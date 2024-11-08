@extends('userfront.layouts.master')
@section('contant')

        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Service</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
    @include('userfront.includes.section.servicefront')
    @include('userfront.includes.section.qoutefront')
    @include('userfront.includes.section.testimonialfront')

@endsection
