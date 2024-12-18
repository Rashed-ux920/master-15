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


        book_service::create(
            [
                'date' => $request->date,
                'name' => $request->name,
                'time' => $request->time,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'location' => $request->location,
                'note' => $request->note,
                'user_id' => $id,
                'service_id' => $request->servicetype
            ]
        );
        return to_route('home');

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
        $book = book_service::all()->where('id',$id);
        return view('userfront.userpages.editreservation',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        book_service::where($id)->update(
            [
                'date' => $request->date,
                'name' => $request->name,
                'time' => $request->time,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
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
