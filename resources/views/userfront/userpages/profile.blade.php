@extends('userfront.layouts.master1')
@section('contant')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                @if ($userinfo && $userinfo->image == null)
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                @elseif ($userinfo && $userinfo->image)
                    <img class="rounded-circle mt-5" width="150px" src="/{{$userinfo->image}}" alt="User Image">
                @else
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                @endif

    {{--

                @if ($userinfo->image == null)
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                @else
                    <img class="rounded-circle mt-5" width="150px" src="{{$uerinfo->image}}">
                @endif --}}


                @if (Auth::user() && Auth::user()->name == null)
                    <span class="font-weight-bold">
                        {{__('gust')}}
                    </span>
                @elseif (Auth::user() && Auth::user()->name)
                    <span class="font-weight-bold">
                        {{Auth::user()->name}}
                    </span>

                @else
                    <span class="font-weight-bold">
                        {{__('gust')}}
                    </span>
                

                @endif
                <span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>

                </div>
                <form action="">
                        <div class="row mt-2">
                            <div class="col-md-6 width:100%"><label class="labels ">Name</label><input type="text" class="form-control" placeholder="{{Auth::user()->name}}" disabled></div>
                        </div>
                        <div class="row mt-3">
                            @if ($userinfo && $userinfo->phonenumber == null)
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="the phone number not assined" ></div>
                            @elseif ($userinfo && $userinfo ->phonenumber)
                             <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" disabled placeholder="{{$userinfo->phonenumber}}"  ></div>

                            @else
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="the phone number not assined"  ></div>

                            @endif
                            {{-- <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" ></div> --}}
                            @if ($userinfo && $userinfo->location == null)
                                <div class="col-md-12"><label class="labels">location</label><input type="text" class="form-control" placeholder="enter location" ></div>

                            @elseif ($userinfo && $userinfo ->location)
                                <div class="col-md-12"><label class="labels">location</label><input type="text" class="form-control" disabled placeholder="{{$userinfo->location}}" ></div>


                            @else

                                <div class="col-md-12"><label class="labels">location</label><input type="text" class="form-control" placeholder="you don't have any lecotion  record in our files" value=""></div>

                            @endif
                            @if ($userinfo && $userinfo->dateofbirth)
                                <div class="col-md-12"><label class="labels">date of birth</label><input type="text" class="form-control" disabled placeholder="{{$userinfo->dateofbirth}}" value=""></div>


                            @else
                                <div class="col-md-12"><label class="labels">date of birth</label><input type="text" class="form-control" placeholder="we don't have any date of birth  record for you" value=""></div>

                            @endif

                            </div>


                        </div>
                        </div>

                    </div>
                </form>
                @if ($userinfo)

                    <div class="mt-5 text-center"><a class="btn btn-primary profile-botton" href="{{route('editprofile',Auth::user()->id)}}">update the profile info</a></div>
                @else

                    <div class="mt-5 text-center"><a class="btn btn-primary profile-botton" href="{{route('updateprofile',Auth::user()->id)}}">Add Profile info</a></div>

                @endif

        </div>
    </div>
</div>



@endsection
