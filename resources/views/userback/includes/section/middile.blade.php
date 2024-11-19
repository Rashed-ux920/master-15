    {{-- start middile --}}


        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                        <h5 class="font-weight-bolder mb-0">
                          $53,000
                          <span class="text-success text-sm font-weight-bolder">+55%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
                        <h5 class="font-weight-bolder mb-0">
                          2,300
                          <span class="text-success text-sm font-weight-bolder">+3%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                        <h5 class="font-weight-bolder mb-0">
                          +3,462
                          <span class="text-danger text-sm font-weight-bolder">-2%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
                        <h5 class="font-weight-bolder mb-0">
                          $103,430
                          <span class="text-success text-sm font-weight-bolder">+5%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-lg-5 mb-lg-0 mb-4">
              <div class="card z-index-2">
                <div class="card-body p-3">
                  <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                    <div class="chart">
                      <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                    </div>
                  </div>
                  <h6 class="ms-2 mt-4 mb-0"> Active Users </h6>
                  <p class="text-sm ms-2"> (<span class="font-weight-bolder">+23%</span>) than last week </p>
                  <div class="container border-radius-lg">
                    <div class="row">
                      <div class="col-3 py-3 ps-0">
                        <div class="d-flex mb-2">
                          <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>document</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(154.000000, 300.000000)">
                                      <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                      <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <p class="text-xs mt-1 mb-0 font-weight-bold">Users</p>
                        </div>
                        <h4 class="font-weight-bolder">{{$users->count()}}</h4>
                        <div class="progress w-75">
                          <div class="progress-bar bg-dark w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                      <div class="col-3 py-3 ps-0">
                        <div class="d-flex mb-2">
                          <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>settings</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(304.000000, 151.000000)">
                                      <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                      <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                      <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <p class="text-xs mt-1 mb-0 font-weight-bold">services</p>
                        </div>
                        <h4 class="font-weight-bolder">{{$services->count()}}</h4>
                        <div class="progress w-75">
                          <div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card z-index-2">
                <div class="card-header pb-0">
                  <h6>Sales overview</h6>
                  <p class="text-sm">
                    <i class="fa fa-arrow-up text-success"></i>
                    <span class="font-weight-bold">4% more</span> in 2021
                  </p>
                </div>
                <div class="card-body p-3">
                  <div class="chart">
                    <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="row my-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>users</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">{{$users->count()}} users</span> this month
                                    </p>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">userimage&name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">date of birth</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">location</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone number</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            @if ($item && $item->user_info->image == null)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @elseif ($item && $item->user_info->image)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="/{{$item->user_info->image}}" alt="User Image">
                                                            @else
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @endif

                                                            {{-- <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd"> --}}
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->name}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->user_info->dateofbirth}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->user_info->location}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->email}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->user_info->phonenumber}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->user_info->role}}</h6>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-7">
                                    <h6>services table</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">we have {{$services->count()}} service</span>
                                    </p>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">service image & name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">discription</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">maneger name and image</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone number</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            @if ($item && $item->image == null)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @elseif ($item && $item->image)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="{{$item->image}}" alt="User Image">
                                                            @else
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @endif

                                                            {{-- <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd"> --}}
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->title}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->description}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            @if ($item && $item->user->user_info->image == null)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @elseif ($item && $item->user->user_info->image)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="{{'/'.$item->user->user_info->image}}" alt="User Image">
                                                            @else
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @endif

                                                            {{-- <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd"> --}}
                                                        </div>

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->user->name}}</h6>
                                                        </div>
                                                    </div>
                                                </td>


                                            </tr>
                                        @endforeach

                                    </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-7">
                                        <h6>booking</h6>
                                        <p class="text-sm mb-0">
                                            <i class="fa fa-check text-info" aria-hidden="true"></i>
                                            <span class="font-weight-bold ms-1">we have {{$services->count()}} service</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">service image & name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">discription</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">maneger name and image</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone number</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($booked as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            @if ($item && $item->service->image == null)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @elseif ($item && $item->service->image)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="{{$item->service->image}}" alt="User Image">
                                                            @else
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @endif

                                                            {{-- <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd"> --}}
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->service->title}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->service->description}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            @if ($item && $item->user->user_info->image == null)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @elseif ($item && $item->user->user_info->image)
                                                                <img class="avatar avatar-sm me-3" width="150px" src="{{'/'.$item->user->user_info->image}}" alt="User Image">
                                                            @else
                                                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                                                            @endif

                                                            {{-- <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd"> --}}
                                                        </div>

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$item->user->name}}</h6>
                                                        </div>
                                                    </div>
                                                </td>



                                            </tr>
                                        @endforeach

                                    </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>

                </div>
            </div>

        </div>


      {{-- end middile --}}
