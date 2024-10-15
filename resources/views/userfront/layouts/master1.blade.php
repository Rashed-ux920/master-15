<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    {{-- include stylelinks --}}

    @include('userfront.includes.headlinks')
</head>

<body>

    @include('userfront.includes.section.spinnerfront')

    @include('userfront.includes.section.topbarfront')
    @include('userfront.includes.section.navbarfrontl')

    @yield('contant')

    <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    @include('userfront.includes.section.footerfrontl')



    <!-- Back to Top -->
    <a href="{{route('home')}}" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>





    @include('userfront.includes.bodyscripts')


</body>

</html>
