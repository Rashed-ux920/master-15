<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/png" href="{{asset('images/handymanicon.jpeg')}}">

    {{-- include stylelinks --}}

    @include('userfront.includes.headlinks')
</head>

<body>

    @include('userfront.includes.section.spinnerfront')

    @include('userfront.includes.section.topbarfront')
    @include('userfront.includes.section.navbarfront')

    @yield('contant')

    @include('userfront.includes.section.footerfront')



    <!-- Back to Top -->
    <a href="{{route('landingpage')}}" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>





    @include('userfront.includes.bodyscripts')


</body>

</html>
