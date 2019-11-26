<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TOtdelsCreateRequest;
use App\Http\Requests\TOtdelsUpdateRequest;
use App\Models\TOtdels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TOtdelsController extends Controller
{
    public function index()
    {
        $otdels = TOtdels::all();
            return view ('admin.otdels.index',compact('otdels'))->with('failure', 'asdsad');
    }

    public function create()
    {
        /*$otdels = TOtdels::all();
        return view ('admin.otdels.create',compact('otdels'));*/
        return view ('admin.otdels.create');
    }

    public function store(TOtdelsCreateRequest $request)
    {
        TOtdels::create($request->all());
        return redirect()->route('admin.otdels.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $otdel = TOtdels::findOrFail($id);
        return view ('admin.otdels.edit', compact('otdel'));
    }

    public function update(TOtdelsUpdateRequest $request, $id)
    {

        $otdel = TOtdels::findOrFail($id)->fill($request->all());

        // Проверка измененных данных (isDirty). Если что-то поменялось -> update, если не поменялось -> то ничего не делать:
        if($otdel->isDirty()) {
            $otdel->update();
            return redirect()->route('admin.otdels.index')->with('success', 'Record was updated!');
        }
        else {
            return redirect()->route('admin.otdels.index')->with('message', 'Nothing update!');
        }
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
        return redirect()->route('admin.otdels.index')->with('success', 'Record success deleted!');

    }
}
