<?php

namespace App\Http\Controllers\Admin;

use App\Models\TPosts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TPostsController extends Controller
{
    public function index()
    {
        $posts = TPosts::all();
        return view ('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view ('admin.posts.create');
    }

    public function store(Request $request)
    {
        //TPosts::create($request->all());
        //return redirect()->route('admin.posts.index');
        $newpost = new TPosts($request->all());
        $newpost->save();
        return redirect()->route('admin.posts.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = TPosts::findOrFail($id);
        return view ('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        TPosts::findOrFail($id)->update($request->all());
        return redirect()->route('admin.posts.index')->with('success', 'Record updated!');
    }

    public function destroy($id)
    {
        TPosts::destroy($id);
        return redirect()->route('admin.posts.index')->with('success', 'Record success deleted!');
    }
}
