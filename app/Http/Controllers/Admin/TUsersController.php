<?php

namespace App\Http\Controllers\Admin;

use App\Models\TOtdels;
use App\Models\TPosts;
use App\Models\TUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otdels = TOtdels::with('getUsers.getPost:id,post')->get()->sortBy('id');
        return view('admin.users.index', compact('otdels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TUsers::create($request->all());
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = TPosts::all();
        $otdels = TOtdels::all();
        $user = TUsers::findOrFail($id);
        return view ('admin.users.edit', compact('user', 'posts', 'otdels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        TUsers::findOrFail($id)->update($request->all());
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TUsers::destroy($id);
        return redirect()->route('admin.users.index');
    }
}
