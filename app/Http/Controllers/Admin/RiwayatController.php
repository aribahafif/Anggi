<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gejala;
use App\Penyakit;
use App\Riwayat;
use App\Diagnosa;
use Carbon\Carbon;

class RiwayatController extends Controller
{
    public function index()
    {
        $items = Riwayat::all();
        $diagnosa = Diagnosa::all();
        $penyakit = Penyakit::all();
        $gejala = Gejala::all();
        
        return view('admin.riwayat.index', compact('items','diagnosa','penyakit','gejala'));
    }

    public function store(Request $request)
    {   
        //
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

