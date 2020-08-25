<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
        $items = Penyakit::all();

        return view('admin.penyakit.index', compact('items'));
    }

    public function create()
    {
        $kode = Penyakit::count()+1;
        
        return view('admin.penyakit.create', compact('kode'));
    }

    public function store(Request $request)
    {
        $this->validate($request, Penyakit::rules());

        Penyakit::create($request->all());

        return redirect()->route(ADMIN . '.penyakit.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Penyakit::findOrFail($id);

        return view('admin.penyakit.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Penyakit::rules(true, $id));

        $item = Penyakit::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.penyakit.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Penyakit::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

