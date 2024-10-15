    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Aqaba, JORDAN</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+962 79 663 219 5</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>HandyMan@gmail.com</p>
                    <div class="d-flex pt-2">
                        {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a> --}}
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100070927364793"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/rashed-alaqrabawy-28899b257/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="{{route('genaralcarpentry')}}">General Carpentry</a>
                    <a class="btn btn-link" href="{{route('furnituremodeling')}}">Furniture Remodeling</a>
                    <a class="btn btn-link" href="{{route('woodenfloor')}}">Wooden Floor</a>
                    <a class="btn btn-link" href="{{route('woodenfurniture')}}">Wooden Furniture</a>
                    <a class="btn btn-link" href="{{route('customcarpentry')}}">Custom Carpentry</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{route('aboutpage')}}">About Us</a>
                    <a class="btn btn-link" href="{{route('contactus')}}">Contact Us</a>
                    <a class="btn btn-link" href="{{route('service')}}">Our Services</a>
                    {{-- <a class="btn btn-link" href="">Terms & Condition</a> --}}
                    {{-- <a class="btn btn-link" href="">Support</a> --}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    {{-- <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p> --}}
                    <p>Send for us any messege you want and we will replay in shortes time.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="TEXT US or">
                        <a href="" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Send</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">{{config('app.name')}}</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://rashed-ux920.github.io/my-profile/">Rashed Alaqrabawy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
