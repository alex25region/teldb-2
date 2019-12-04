<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TOtdelsCreateRequest;
use App\Http\Requests\TOtdelsUpdateRequest;
use App\Models\TOtdels;
use App\Http\Controllers\Controller;

class TOtdelsController extends Controller
{
    public function index()
    {
        $otdels = TOtdels::all();
        return view ('admin.otdels.index', compact('otdels'));
    }

    public function create()
    {
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

    public function destroy($id)
    {
//        if (TOtdels::destroy($id)) {
//        return redirect()->route('admin.otdels.index')->with('success', 'Record success deleted!');
//        }
//        else {
//            return __METHOD__;
//        }

        $deleted = TOtdels::destroy($id);

        if ($deleted) {
            return back()->with('success', 'Record success deleted!');
        } else {
            return back()->with('error', 'Record NOT deleted!');
        }


    }
}
