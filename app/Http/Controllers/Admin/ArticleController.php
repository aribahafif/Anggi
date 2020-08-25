<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Article;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class ArticleController extends Controller
{
    public function index()
    {
        $items = Article::latest('created_at')->get();

        return view('admin.article.index', compact('items'));
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Article::rules());

        $slug =uniqid().'-'.str_slug($request->title);
        $request->request->add(['slug' => $slug]);

        if ($request->hasfile('image')) {
            $image = $request->image;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);

            Article::create([
                'title' => $request->title,
                'slug'  => $request->slug,
                'image' => 'uploads/'.$uploadname,
                'description' => $request->description,
            ]);
            
        }else{
            Article::create([
                'title' => $request->title,
                'slug'  => $request->slug,
                'description' => $request->description,
            ]);
        }

        return redirect()->route(ADMIN . '.article.index')->withSuccess(trans('app.success_store'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Article::findOrFail($id);

        return view('admin.article.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Article::rules(true, $id));

        $item = Article::findOrFail($id);
        
        $slug =uniqid().'-'.str_slug($request->title);
        $request->request->add(['slug' => $slug]);

        if ($request->hasfile('image')) {
            $image = $request->image;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);

            $item->update([
                'title' => $request->title,
                'slug'  => $request->slug,
                'image' => 'uploads/'.$uploadname,
                'description' => $request->description,
            ]);

        }else{
            $item->update([
                'title' => $request->title,
                'slug'  => $request->slug,
                'description' => $request->description,
            ]);
        }

        return redirect()->route(ADMIN . '.article.index')->withSuccess(trans('app.success_update'));
    }

    public function destroy($id)
    {
        Article::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}

