@extends('userfront.layouts.master1')
@section('contant')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                @if ($userinfo && $userinfo->image == null)
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                @elseif ($userinfo && $userinfo->image)
                    <img class="rounded-circle mt-5" width="150px" src="{{$userinfo->image}}" alt="User Image">
                @else
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                @endif

    {{--

                @if ($userinfo->image == null)
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                @else
                    <img class="rounded-circle mt-5" width="150px" src="{{$uerinfo->image}}">
                @endif --}}



                <span class="font-weight-bold">{{Auth::user()->name}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="{{route('storeuserinfo',Auth::user()->id)}}" method="POST" enctype="multipart/form-data" id="updateprofile">
                    @csrf
                        <div class="row mt-2">
                            <div class="col-md-6 width:100%"><label class="labels ">Name</label><input type="text" class="form-control" placeholder="{{Auth::user()->name}}" disabled></div>
                            {{-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div> --}}
                        </div>
                        <div class="row mt-3">


                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="the phone number not assined" name="phonenumber"></div>

                                {{-- <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div> --}}

                                <div class="col-md-12"><label class="labels">location</label><input type="text" class="form-control" placeholder="enter location" name="location"></div>



                                <div class="col-md-12"><label class="labels">image</label><input type="file" class="form-control"  name="image"></div>






                                {{-- <div class="col-md-12"><label class="labels">location</label><input type="text" class="form-control" placeholder="you don't have any lecotion  record in our files" value=""></div> --}}





                                <div class="col-md-12"><label class="labels">date of birth</label><input type="date" name="dateofbirth" class="form-control" placeholder="we don't have any date of birth  record for you" value=""></div>


                                {{-- <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> --}}
                                {{-- <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> --}}
                                {{-- <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> --}}
                                {{-- <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div> --}}
                                {{-- <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div> --}}
                        </div>
                        {{-- <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                        </div> --}}

                        </div>
                        </div>

                    </div>
                </form>
                <div class="mt-5 text-center"><a class="btn btn-primary profile-botton" onclick="document.getElementById('updateprofile').submit()">edit Profile</a></div>
        </div>
    </div>
</div>

@endsection
