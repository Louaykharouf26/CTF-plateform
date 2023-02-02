<?php

namespace App\Http\Controllers;
use App\Models\Teams as teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    //
    public function index(){
    $teamlist=teams::all();
    return view("Team",['teamlist'=>$teamlist]);

    }
    
}
