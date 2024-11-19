<?php

namespace App\Http\Controllers;

use App\Models\book_service;
use App\Models\service;
use App\Models\User;
use App\Models\user_info;
use Illuminate\Http\Request;

class viewscontroller extends Controller
{
    public function index1(){
        $admin = User::with('user_info')->wherehas('user_info',function($query){
            $query->where('role','admin');
        })->get();
        return view('userfront.userpages.about',compact('admin'));

    }

    public function index2($id){
        $services = service::all();
        $userid = User::with('user_info')->where('id', $id);
        return view('userfront.userpages.service',compact('services','userid'));
    }
    public function index3(){
        return view('userfront.userpages.project');
    }
    public function index4(){
        return view('userfront.userpages.feature');
    }
    public function index5($id){
        $services = service::all();
        $user = User::with('user_info')->where('id',$id);
        return view('userfront.userpages.quote',compact('services','user'));
    }
    public function index6(){
        return view('userfront.userpages.ourteam');
    }
    public function index7(){
        return view('userfront.userpages.testimonial');
    }
    public function index8(){
        return view('userfront.userpages.404page');
    }
    public function index9(){
        $services = service::all();
        $admin = User::with('user_info')->wherehas('user_info',function($query){
            $query->where('role','admin');
        })->get();
        
        // $userinfo = user_info::find($id);
        return view('userfront.userpages.homeL',compact('services','admin'));
    }
    public function index10($id){
        $user = User::find($id);
        $userinfo = user_info::find($id);
        $reservation =book_service::all()->where('user_id', $id);

        return view('userfront.userpages.profile',compact('user','userinfo','reservation'));
    }
}
