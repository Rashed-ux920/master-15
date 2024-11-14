<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\User;
use App\Models\user_info;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function genaralcarpentry(){
        return view('userfront.userpages.servicespages.genaralcarpentry');
    }
    public function woodenfloor(){
        return view('userfront.userpages.servicespages.woodenfloor');
    }
    public function woodenfurniture(){
        return view('userfront.userpages.servicespages.woodenfurniture');
    }
    public function customcarpentry(){
        return view('userfront.userpages.servicespages.customcarpentry');
    }
    public function furnitureremodeling(){
        return view('userfront.userpages.servicespages.furnitureremodeling');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        if ($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();

            $filename = time().'.'.$extention;
            $path='images/services/';
            $file->move($path,$filename);
        }
        service::create([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'image'=> $path.$filename,
            'user_id' => $request->user_id

        ]);
        return to_route('dashboard');

    }
    public function includeservices(){
        $services = service::all();
        $worker = User::with('user_info')->wherehas('user_info',function($quiry){
            $quiry->where('role','handyman');
        })->get();
        return view('userfront.includes.section.servicefront',compact('services','worker'));
    }
    /**
     * Display the specified resource.
     */
    public function show(service $service)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(service $service,$id)
    {
        $service = service::findOrFail($id);
        $user = User::with('user_info')->whereHas('user_info', function($query) {
            $query->where('role', 'handyman');
        })->get();
        return view('userback.userpage.editservice',compact('service','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)

    {
        if ($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();

            $filename = time().'.'.$extention;
            $path='images/services/';
            $file->move($path,$filename);
        }
        service::where('id',$id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'image'=> $path.$filename,
            'user_id' => $request->user_id

        ]);
        return to_route('services');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = service::findOrFail($id);
        $service->delete();
        return to_route('dashboard')->with('status' , 'the service deleted');
    }
}
