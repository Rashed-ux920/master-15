<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminviewscontroller extends Controller
{
    public function index1(){
        $users = User::all();
        return view('home',compact('users'));
    }
}
