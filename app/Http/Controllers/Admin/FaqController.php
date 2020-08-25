<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $items = Faq::all();

        return view('admin.faq.index', compact('items'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Faq::rules());

        Faq::create($request->all());

        return redirect()->route(ADMIN . '.faq.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Faq::findOrFail($id);
        
        return view('admin.faq.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Faq::rules(true, $id));

        $item = Faq::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.faq.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Faq::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

