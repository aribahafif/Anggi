<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gejala;

class GejalaController extends Controller
{
    public function index()
    {
        $items = Gejala::all();

        return view('admin.gejala.index', compact('items'));
    }

    public function create()
    {
        $kode = Gejala::count()+1;
        
        return view('admin.gejala.create', compact('kode'));
    }

    public function store(Request $request)
    {
        $this->validate($request, Gejala::rules());

        Gejala::create($request->all());

        return redirect()->route(ADMIN . '.gejala.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Gejala::findOrFail($id);
        
        return view('admin.gejala.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Gejala::rules(true, $id));

        $item = Gejala::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.gejala.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Gejala::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

