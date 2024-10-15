    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{route('landingpage')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">{{config('app.name')}}</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('aboutpage')}}" class="nav-item nav-link">About</a>
                <a href="{{route('service')}}" class="nav-item nav-link">Service</a>
                <a href="{{route('project')}}" class="nav-item nav-link">Project</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{route('feature')}}" class="dropdown-item">Feature</a>
                        <a href="{{route('freeqoute')}}" class="dropdown-item">Free Quote</a>
                        <a href="{{route('ourteam')}}" class="dropdown-item">Our Team</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                        <a href="{{route('profile',Auth::user()->id)}}" class="dropdown-item">profile</a>
                        {{-- <a href="{{route('404')}}" class="dropdown-item">404 Page</a> --}}
                    </div>
                </div>
                <a href="{{route('contactus')}}" class="nav-item nav-link">Contact</a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            

            <a href="{{route('profile',Auth::user()->id)}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">{{Auth::user()->name}}<i class="fa fa-arrow-right ms-3"></i></a>
            {{-- <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a> --}}
        </div>
    </nav>
    <!-- Navbar End -->
