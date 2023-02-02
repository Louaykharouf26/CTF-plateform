<?php

namespace App\Http\Controllers;
use App\Models\Challenges as challenges;

use Illuminate\Http\Request;

class ChallengesController extends Controller
{
    //
    public function index(){
        $challengeslist=challenges::all();
        return view("challenges",['challengeslist'=>$challengeslist]);
    
        }
}
