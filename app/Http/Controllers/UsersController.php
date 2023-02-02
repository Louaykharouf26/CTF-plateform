<?php

namespace App\Http\Controllers;
use App\Models\User as users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $userslist=users::all();
        return view("UsersList",['userlist'=>$userslist]);
    
        }
}
