<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function logout(Request $request)
{
    $this->guard()->logout();

    $request->session()->invalidate();

    return redirect('/');
}
}
