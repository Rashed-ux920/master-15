<?php

namespace App\Http\Controllers;

use App\Models\book_service;
use Illuminate\Http\Request;

class BookServiceController extends Controller
{
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
    public function store(Request $request,$id)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'name' => 'required|string|max:225',
            'email' => 'required|email|string|max:225',
            'location' => 'required|string|max:225',
            'note' => 'required|text|max:225',
            'servicetype'=> 'required|number'
        ]);
        book_service::create(
            [
                'date' => $request->date,
                'name' => $request->name,
                'time' => $request->time,
                'location' => $request->location,
                'note' => $request->note,
                'user_id' => $id,
                'service_id' => $request->servicetype
            ]
        );

    }

    /**
     * Display the specified resource.
     */
    public function show(book_service $book_service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book_service $book_service,$id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book_service $book_service,$id)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|time',
            'name' => 'required|string|max:225',
            'email' => 'required|email|string|max:225',
            'location' => 'required|string|max:225',
            'note' => 'required|text|max:225',
            'servicetype'=> 'required|number'
        ]);
        book_service::where($id)->update(
            [
                'date' => $request->date,
                'name' => $request->name,
                'time' => $request->time,
                'location' => $request->location,
                'note' => $request->note,
                'user_id' => $id,
                'service_id' => $request->servicetype
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book_service $book_service)
    {

    }
}
