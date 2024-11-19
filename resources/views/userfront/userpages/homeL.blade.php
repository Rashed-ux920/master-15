@extends('userfront.layouts.master1')
@section('contant')

@include('userfront.includes.section.carouselfront')
@include('userfront.includes.section.featurefront')
@include('userfront.includes.section.aboutfront')
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                @foreach ($services as $item)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="/{{$item->image}}" alt="">
                            </div>
                            <div class="p-4 text-center border border-5 border-light border-top-0">
                                <h4 class="mb-3">{{$item->title}} </h4>
                                <p>{{$item->description}}</p>
                                <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach



                        
            </div>
        </div>
    </div>
    <!-- Service End -->

@include('userfront.includes.section.feature2front')
{{-- @include('userfront.includes.section.projectsfront') --}}
@include('userfront.includes.section.qoutefront')
@include('userfront.includes.section.teamfront')
{{-- @include('userfront.includes.section.testimonialfront') --}}



@endsection

