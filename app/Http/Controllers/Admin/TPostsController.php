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

        $rules = [
            'post' => 'required|string|unique:t_posts|min:5|max:100',
        ];
        $this->validate($request, $rules);

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

        $rules = [
            'post' => 'required|string|min:5|max:100',
        ];
        $this->validate($request, $rules);

        $post = TPosts::findOrFail($id)->fill($request->all());

        // Проверка измененных данных (isDirty). Если что-то поменялось -> update, если не поменялось -> то ничего не делать:
        if($post->isDirty()) {
            $post->update();
            return redirect()->route('admin.posts.index')->with('success', 'Record was updated!');
        }
        else {
            return redirect()->route('admin.posts.index')->with('message', 'Nothing update!');
        }


    }

    public function destroy($id)
    {
        TPosts::destroy($id);
        return redirect()->route('admin.posts.index')->with('success', 'Record success deleted!');
    }
}
