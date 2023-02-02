<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $team = $user->team;
        return view('Profile', compact('user', 'team'));
    }
}
