<?php

namespace App\Http\Controllers;

use App\Models\TUsers;
use App\Models\TPosts;
use App\Models\TOtdels;

class FrontController extends Controller
{
    public function index() {
        //$otdels = TOtdels::with('getUsers.getPost:id,post')->get()->sortBy('id');
        //return view('index', compact('otdels'));

        //$users = TUsers::all();
        //$users = TUsers::with('')->get();
        $users = TUsers::with('getPost:id,post','getOtdel:id,otdel')->get()->sortBy( 'otdel_id');
        //dd($users);

        return view('front.index', compact('users'));
    }
}
