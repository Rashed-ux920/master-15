<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        // dd($request);
        $request->validate([
            'location' => 'required|string|max:225',
            'phonenumber' => 'required|string|max:225',
            'dateofbirth' => 'required|date',
            'image' => 'nullable|file|max:225|mimes:png,jpg,jpeg,wepg',
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
     * Show the form for editing the specified resource.
     */
    public function edit(user_info $user_info,$id)
    {
        $user = User::find($id);
        $userinfo =user_info::find($id);
        return view('userfront.userpages.edituserprofile',compact('user','userinfo'));
    }


    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'location' => 'nullable|string|max:225',
            'phonenumber' => 'nullable|string|max:225',
            'dateofbirth' => 'nullable|date',
            'image' => 'nullable|file|mimes:png,jpg,jpeg,webp|max:2048',  // Adjusted file validation
        ]);

        // Retrieve the current user's information
        $user = user_info::find($id);

        // Initialize the filename and path for the image, default to the current image
        $filename = $user->image; // Keep the current image if no new one is uploaded
        $path = 'images/user/';   // Path where images are stored

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;  // Generate a unique filename
            $file->move(public_path($path), $filename);  // Move the file to the correct directory
        }

        // Prepare data for update, retaining the old image if no new one was uploaded
        $data = [
            'location' => $request->location,
            'phonenumber' => $request->phonenumber,
            'dateofbirth' => $request->dateofbirth,
            'image' => $path . $filename,  // Update with new or existing image
        ];

        // Update the user info record
        $user->update($data);

        // Redirect to profile page
        return redirect()->route('profile', $id);
    }


}
