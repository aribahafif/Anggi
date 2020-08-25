<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Carbon\Carbon;

use App\Article;
use App\Aturan;
use App\BasisPengetahuan;
use App\Diagnosa;
use App\Gejala;
use App\Penyakit;
use App\Riwayat;
use App\Faq;

class WebController extends Controller
{
    protected $viewBase = "web";

    public function index()
    {
        $article = Article::orderBy('created_at', 'DESC')->take(6)->get();

        return view($this->viewBase.'.pages.home', compact('article'));
    }

    public function faq()
    {
        $faq = Faq::all();
        return view($this->viewBase.'.pages.faq', compact('faq'));
    }

    public function blog()
    {
        $article = Article::orderBy('created_at', 'DESC')->get();

        return view($this->viewBase.'.pages.blog', compact('article'));
    }

    public function blogDetail($article)
    {
        $item = Article::where('slug',$article)->first();
        $tgl = Carbon::parse($item->created_at)->formatLocalized('%d %B %Y');

        return view($this->viewBase.'.pages.blog-detail', compact('item','tgl'));
    }

    public function diagnosa()
    {
        $id = Riwayat::count()+1;
        $jmlgejala = ceil(Gejala::count()/2);
        $gejala = Gejala::all();
        $penyakit = Penyakit::pluck('name', 'id');

        return view($this->viewBase.'.pages.diagnosa', compact('id','jmlgejala','gejala','penyakit'));
    }

    public function diagnosaSubmit(Request $request)
    {   
        $request->validate([
            'nama'          => 'required',
            'tanggal_lahir' => 'required',
            'tinggi_badan'  => 'required',
            'berat_badan'   => 'required',
            'gejala'        => 'required',
        ],
        [
            'nama.required'          => 'Nama Harus Diisi!',
            'tanggal_lahir.required' => 'Tanggal Lahir Harus Diisi!',
            'tinggi_badan.required'  => 'Tinggi Badan Harus Diisi!',
            'berat_badan.required'   => 'Berat Badan Harus Diisi!',
            'gejala.required'        => 'Gejala Harus Diisi!'
        ]); 
        
        $u = Carbon::parse($request->tanggal_lahir)->diff(Carbon::now())->format('%y');
        
        if($u<5){
            
            Riwayat::create([
                'nama'   => $request->nama,
                'ttl'    => $request->tanggal_lahir,
                'tb'     => $request->tinggi_badan,
                'bb'     => $request->berat_badan,
                'gejala' => json_encode($request->gejala),
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
                        'cf'           => $cf,
                    ]);
                }
            }

            return redirect()->route('diagnosa.hasil', $request->id);   
            
        }else{
            
            $id = Riwayat::count()+1;
            $jmlgejala = ceil(Gejala::count()/2);
            $gejala = Gejala::all();
            $penyakit = Penyakit::pluck('name', 'id');
            
            return view($this->viewBase.'.pages.diagnosa', compact('id','jmlgejala','gejala','penyakit'))->with('msgUmur', 'Umur harus tidak lebih dari 5 tahun!');
        }
    }

    public function diagnosaShow($id)
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

        return view($this->viewBase.'.pages.hasil', compact('item','birthday','age','gejala','gejalaterpilih','penyakit','diagnosa','kesimpulan','kesimpulan_p'));
    }
}
