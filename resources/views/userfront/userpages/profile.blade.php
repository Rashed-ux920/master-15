@extends('userfront.layouts.master1')
@section('contant')

<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="header">
                <img src="#" alt="userimage">
                <div class="gap">
                    <h1>{{$user->name}}</h1>
                </div>
                <div class="gap">
                    <h1>
                        {{$user->email}}
                    </h1>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
