<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aturan;
use App\Gejala;
use App\Penyakit;

class AturanController extends Controller
{
    public function index()
    {
        $items = Aturan::all();
        $gejala = Gejala::all();

        return view('admin.aturan.index', compact('items','gejala'));
    }

    public function create()
    {
        $kode = Aturan::count()+1;
        $gejala = Gejala::all();
        $jmlgejala = ceil(Gejala::count()/3);
        $penyakit = Penyakit::pluck('name', 'id');
        
        return view('admin.aturan.create', compact('kode','gejala','jmlgejala','penyakit'));
    }

    public function store(Request $request)
    {   
        $this->validate($request, Aturan::rules());
        
        Aturan::create([
            'kode' => $request->kode,
            'id_penyakit' => $request->id_penyakit,
            'gejala' => json_encode($request->gejala),
        ]);

        return redirect()->route(ADMIN . '.aturan.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Aturan::findOrFail($id);
        $selection = json_decode($item->gejala);
        $gejala = Gejala::all();
        $jmlgejala = ceil(Gejala::count()/3);
        $penyakit = Penyakit::pluck('name', 'id');
        
        return view('admin.aturan.edit', compact('item','selection','gejala','jmlgejala','penyakit'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Aturan::rules(true, $id));

        $item = Aturan::findOrFail($id);

        $item->update([
            'kode' => $request->kode,
            'id_penyakit' => $request->id_penyakit,
            'gejala' => json_encode($request->gejala),
        ]);

        return redirect()->route(ADMIN . '.aturan.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Aturan::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

