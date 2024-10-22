<?php

namespace App\Http\Controllers;

use App\Models\user_info;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $userinfo = user_info::find($id);
        return view('userfront.userpages.updateprofile',compact('userinfo'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $request->validate([
            'location' => 'required|string|max:225',
            'phonenumber' => 'required|string|max:225',
            'dateofbirth' => 'required|date',
            'image' => 'nullable|string|max:225|mimes:png,jpg,jpeg,wepg',
            // 'image' => 'nullable|string|max:225|mimes:png,jpg',
        ]);
        // dd($request->phonenumber);
        if ($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();

            $filename = time().'.'.$extention;
            $path='images/user/';
            $file->move($path,$filename);
        }
        user_info::create(
            [
                'location' => $request->location,
                'phonenumber' => $request->phonenumber,
                'dateofbirth' => $request->dateofbirth,
                'image' => $path.$filename,
                'user_id' => $id
            ]
        );
        return to_route('profile',$id);
    }

    /**
     * Display the specified resource.
     */
    public function show(user_info $user_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user_info $user_info)
    {
        // return
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'location' => 'nullable|string|max:225',
            'phonenumber' => 'nullable|string|max:225',
            'dateofbirth' => 'nullable|date',
            'image' => 'nullable|string|max:225|mimes:png,jpg,jpeg,wepg',
            // 'image' => 'nullable|string|max:225|mimes:png,jpg',
        ]);
        if ($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();

            $filename = time().'.'.$extention;
            $path='images/user/';
            $file->move($path,$filename);
        }
        user_info::where($id,'=',)->update(
            [
                'location' => $request->location,
                'phonenumber' => $request->phonenumber,
                'dateofbirth' => $request->dateofbirth,
                'image' => $path.$filename,
            ]
        );
        return to_route('profile',$id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }
}
