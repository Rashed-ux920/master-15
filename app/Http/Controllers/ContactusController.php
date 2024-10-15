<?php

namespace App\Http\Controllers;

use App\Models\contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('userfront.userpages.contact');
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
    public function show(contactus $contactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contactus $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contactus $contactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contactus $contactus)
    {
        //
    }
}
