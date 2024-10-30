{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('userback.layouts.adminmaster')
@section('contant')
    {{-- @include('userback.includes.section.sidebar') --}}


    @include('userback.includes.section.middile')


    @include('userback.includes.section.footer')


    @include('userback.includes.bodyscripts')
@endsection

