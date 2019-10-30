<?php

namespace App\Http\Controllers\Admin;

use App\Models\TOtdels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TOtdelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otdels = TOtdels::all();
            return view ('admin.otdels.index',compact('otdels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$otdels = TOtdels::all();
        return view ('admin.otdels.create',compact('otdels'));*/
        return view ('admin.otdels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TOtdels::create($request->all());
        return redirect()->route('admin.otdels.index');

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
        $otdel = TOtdels::findOrFail($id);
        return view ('admin.otdels.edit', compact('otdel'));
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
        TOtdels::findOrFail($id)->update($request->all());
        return redirect()->route('admin.otdels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TOtdels::destroy($id);
        return redirect()->route('admin.otdels.index');

    }
}
