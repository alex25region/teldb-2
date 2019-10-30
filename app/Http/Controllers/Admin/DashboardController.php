<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TUsers;
use App\Models\TPosts;
use App\Models\TOtdels;

class DashboardController extends Controller
{
    public function index ()
    {
        $users = TUsers::all()->count();
        $posts = TPosts::all()->count();
        $otdels = TOtdels::all()->count();

        return view('admin.dashboard', compact('users','posts', 'otdels'));
    }
}
