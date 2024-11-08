<?php

namespace App\Http\Controllers;

use App\Models\service;
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
            'image'=> $filename,
            'user_id' => $request->user_id

        ]);
        return to_route('dashboard');

    }
    public function includeservices(){
        $services = service::all();
        return view('userfront.includes.section.servicefront',compact('services'));
    }
    /**
     * Display the specified resource.
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(service $service,$id)
    {
        $service = service::findOrFail($id);
        return view('userback.userpage.editservice',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, service $service,$id)
    {


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
