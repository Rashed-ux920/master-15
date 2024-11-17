    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        @if (Auth::check())
        <a href="{{route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">{{config('app.name')}}</h2>
        </a>
        @else
        <a href="{{route('landingpage') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">{{config('app.name')}}</h2>
        </a>
        @endif

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('aboutpage')}}" class="nav-item nav-link">About</a>
                @if (Auth::check())
                <a class="nav-item nav-link" href="{{route('service',$userid)}}">Services</a>
                @else
                    <a class="nav-item nav-link" href="#">Services</a>
                @endif
                <a href="{{route('project')}}" class="nav-item nav-link">Project</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{route('feature')}}" class="dropdown-item">Feature</a>
                        @if (Auth::check('login'))
                        <a href="{{  route('freeqoute',$userid)}}" class="dropdown-item" >services</a>
                        @else

                        @endif


                        <a href="{{route('ourteam')}}" class="dropdown-item">Our Team</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                        @if (Auth::check())
                        <a href="{{route('profile',Auth::user()->id)}}" class="dropdown-item">profile</a>
                        @endif

                        {{-- <a href="{{route('404')}}" class="dropdown-item">404 Page</a> --}}
                    </div>
                </div>
                <a href="{{route('contactus')}}" class="nav-item nav-link">Contact</a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>


            @if (Auth::check())
                <a href="{{route('profile',Auth::user()->id)}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">{{Auth::user()->name}}<i class="fa fa-arrow-right ms-3"></i></a>
            @endif
            {{-- <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a> --}}
        </div>
    </nav>
    <!-- Navbar End -->
