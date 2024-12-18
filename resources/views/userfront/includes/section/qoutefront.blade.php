    <!-- Quote Start -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    @if (Auth::check())
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('frontend/img/quote.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">book a service</h1>
                        </div>
                        <p class="mb-4 pb-2">we are going to send you our team as soon  as posible</p>

                            <form method="POST" action="{{route('storebook',$userid)}}">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" name="name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" name="email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Mobile Phone number" style="height: 55px;" name="phonenumber">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="date" name="date" class="form-control border-0" placeholder="Your date of resirve" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="time" name="time" class="form-control border-0" placeholder="your time of resirve" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="location" class="form-control border-0" placeholder="your location" style="height: 55px;">
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <select name="servicetype" class="form-select border-0" style="height: 55px;">
                                            <option selected>Select A Service</option>
                                            @foreach ($services as $item)
                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="note" class="form-control border-0" placeholder="Special Note"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Quote End -->
