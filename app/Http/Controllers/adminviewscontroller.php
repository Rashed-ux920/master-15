<?php

namespace App\Http\Controllers;

use App\Models\book_service;
use App\Models\contactus;
use App\Models\service;
use App\Models\User;
use App\Models\user_info;
use Illuminate\Http\Request;

class adminviewscontroller extends Controller
{
    public function midd(){
        $user = User::all();
        $service = service::all();
        return view('userback.includes.section.middile',compact('user'));
    }
    public function index1(){
        $users = User::with('user_info')->get();



        $services = service::all();
        $booked = book_service::with('user','service')->get();
        $contactus = contactus::all();
        return view('home',compact('users','services' ,'booked','contactus'));
    }

    public function usertable(){
        $users = User::with('user_info')->get();
        return view('userback.userpage.usertable',compact('users'));
    }
    public function edituser($id) {
        $user = User::with('user_info')->find($id);
        return view('userback.userpage.updateuserrole', compact('user'));
    }
    public function updaterole(Request $request,$id){
        // dd($request);


        user_info::where('user_id', $id)->update(
            [
                'role' => $request->role
            ]
        );
        return to_route('dashboard');
    }
    public function displayservices(){
        $services = service::all();
        return view('userback.userpage.allservices',compact('services'));
    }
    public function addservices(){
        $user = User::with('user_info')->whereHas('user_info', function($query) {
            $query->where('role', 'handyman');
        })->get();


        return view('userback.userpage.addservice',compact('user'));
    }
}
