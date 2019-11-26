<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TUsersCreateRequest;
use App\Http\Requests\TUsersUpdateRequest;
use App\Models\TOtdels;
use App\Models\TPosts;
use App\Models\TUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TUsersController extends Controller
{
    public function index()
    {
        $otdels = TOtdels::with('getUsers.getPost:id,post')->get()->sortBy('id');
        return view('admin.users.index', compact('otdels'));
    }

    public function create()
    {
        $posts = TPosts::all();
        $otdels = TOtdels::all();
        return view ('admin.users.create',compact('posts', 'otdels'));
    }

    public function store(TUsersCreateRequest $request)
    {
        TUsers::create($request->all());
        return redirect()->route('admin.users.index');
        //return redirect()->route('admin.users.index')->with('success', 'Contact saved!'); //протестить сообщения
    }

    public function show($id)
    {
        $user = TUsers::findOrFail($id);
        return view ('admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        $posts = TPosts::all();
        $otdels = TOtdels::all();
        $user = TUsers::findOrFail($id);
        return view ('admin.users.edit', compact('user', 'posts', 'otdels'));
    }

    public function update(TUsersUpdateRequest $request, $id)
    {

        $user = TUsers::findOrFail($id)->fill($request->all());

        // Проверка измененных данных (isDirty). Если что-то поменялось -> update, если не поменялось -> то ничего не делать:
        if($user->isDirty()) {
            $user->update();
            return redirect()->route('admin.users.index')->with('success', 'Record updated!');
        }
        else {
            return redirect()->route('admin.users.index')->with('message', 'Nothing update!');
        }

    }

    public function destroy($id)
    {
        TUsers::destroy($id);
        return redirect()->route('admin.users.index')->with('success', 'Record success deleted!');
    }
}
