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
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service)
    {
        //
    }
}
