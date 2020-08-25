<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BasisPengetahuan;
use App\Gejala;
use App\Penyakit;

class BasisPengetahuanController extends Controller
{
    public function index()
    {
        $items = BasisPengetahuan::all();

        return view('admin.basispengetahuan.index', compact('items'));
    }

    public function create()
    {
        $kode = BasisPengetahuan::count()+1;
        $gejala = Gejala::pluck('name', 'id');
        $penyakit = Penyakit::pluck('name', 'id');
        
        return view('admin.basispengetahuan.create', compact('kode','gejala','penyakit'));
    }

    public function store(Request $request)
    {
        $this->validate($request, BasisPengetahuan::rules());

        BasisPengetahuan::create($request->all());

        return redirect()->route(ADMIN . '.basispengetahuan.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = BasisPengetahuan::findOrFail($id);
        $gejala = Gejala::pluck('name', 'id');
        $penyakit = Penyakit::pluck('name', 'id');
        
        return view('admin.basispengetahuan.edit', compact('item','gejala','penyakit'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, BasisPengetahuan::rules(true, $id));

        $item = BasisPengetahuan::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.basispengetahuan.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        BasisPengetahuan::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

