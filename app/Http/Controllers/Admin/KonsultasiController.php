<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Carbon\Carbon;

use App\Aturan;
use App\Gejala;
use App\Penyakit;
use App\BasisPengetahuan;
use App\Riwayat;
use App\Diagnosa;

class KonsultasiController extends Controller
{
    public function index()
    {
        $id = Riwayat::count()+1;
        $jmlgejala = ceil(Gejala::count()/3);
        $gejala = Gejala::all();
        $penyakit = Penyakit::pluck('name', 'id');

        return view('admin.konsultasi.create', compact('id','jmlgejala','gejala','penyakit'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'   => 'required',
            'ttl'    => 'required',
            'tb'     => 'required',
            'bb'     => 'required',
            'gejala' => 'required',
        ],
        [
            'nama.required'   => 'Nama Harus Diisi!',
            'ttl.required'    => 'Tanggal Lahir Harus Diisi!',
            'tb.required'     => 'Tinggi Badan Harus Diisi!',
            'bb.required'     => 'Berat Badan Harus Diisi!',
            'gejala.required' => 'Gejala Harus Diisi!'
        ]); 
        
        $u = Carbon::parse($request->ttl)->diff(Carbon::now())->format('%y');
        
        if($u<5){
            
            Riwayat::create([
                'nama'  => $request->nama,
                'ttl'   => $request->ttl,
                'tb'    => $request->tb,
                'bb'    => $request->bb,
                'gejala'=> json_encode($request->gejala),
            ]);

            $penyakit = Penyakit::all();

            foreach($penyakit as $p){
                $diagnosa = BasisPengetahuan::whereIn('id_gejala',$request->gejala)->where('id_penyakit',$p->id)->get();

                $mbb=0; $mdb=0; //baru
                $mbl=0; $mdl=0; //lama
                $mbs=0; $mds=0; //sementara
                $cf=0;

                foreach($diagnosa as $i => $d){
                    if($i==0){
                        $mbl = $d->mb;
                        $mdl = $d->md;

                        $cf = $mbl-$mdl;
                    }elseif($i==1){
                        $mbb = $d->mb;
                        $mdb = $d->md;

                        $mbs = $mbl + ($mbb * (1 - $mbl));
                        $mds = $mdl + ($mdb * (1 - $mdl));

                        $cf =$mbs-$mds;

                    }else{
                        $mbb = $d->mb;
                        $mdb = $d->md;

                        $mbl = $mbs;
                        $mdl = $mds;

                        $mbs = $mbl + ($mbb * (1 - $mbl));
                        $mds = $mdl + ($mdb * (1 - $mdl));

                        $cf =$mbs-$mds;
                    }
                }

                if($cf!=0){
                    Diagnosa::create([
                        'id_riwayat'   => $request->id,
                        'id_penyakit'  => $p->id,
                        'cf'          => $cf,
                    ]);
                }
            }

            return redirect('admin/konsultasi/'.$request->id);
            
        }else{
            
            $id = Riwayat::count()+1;
            $jmlgejala = ceil(Gejala::count()/3);
            $gejala = Gejala::all();
            $penyakit = Penyakit::pluck('name', 'id');

            return view('admin.konsultasi.create', compact('id','jmlgejala','gejala','penyakit'))->with('msgUmur', 'Umur harus tidak lebih dari 5 tahun!');
        }
    }


    public function show($id)
    {
        Carbon::setLocale('id');
        $item = Riwayat::where('id',$id)->first();
        $birthday = Carbon::parse($item->ttl)->formatLocalized('%d %B %Y');
        $age = Carbon::parse($item->ttl)->diff(Carbon::now())->format('%y Tahun, %m Bulan, %d Hari');
        $gejala = Gejala::all();
        $gejalaterpilih = json_decode($item->gejala);
        $penyakit = Penyakit::all();
        $diagnosa = Diagnosa::where('id_riwayat',$id)->get();
        $kesimpulan = Diagnosa::where('id_riwayat',$id)->orderBy('cf', 'desc')->first();
        $kesimpulan_p = Penyakit::where('id',$kesimpulan->id_penyakit)->first();

        return view('admin.riwayat.show', compact('item','birthday','age','gejala','gejalaterpilih','penyakit','diagnosa','kesimpulan','kesimpulan_p'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($kode)
    {
        //
    }
}

