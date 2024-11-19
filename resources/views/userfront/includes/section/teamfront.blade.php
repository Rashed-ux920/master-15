
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
    <br>
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Team Members</h1>
            </div>
            <div class="row g-4">
                @foreach ($admin as $item)

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{$item->user_info->image}}" width="450" height="100" alt="user">

                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">{{$item->name}}</h5>
                            <small>{{$item->email}}</small>
                        </div>
                    </div>
                </div>

            @endforeach
           
            </div>
        </div>
    </div>
    <!-- Team End -->
