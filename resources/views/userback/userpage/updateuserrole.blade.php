@extends('userback.layouts.adminmaster')
@section('contant')
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

            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                            @if ($user && $user->user_info->image == null)
                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                            @elseif ($user && $user->user_info->image)
                                <img class="avatar avatar-sm me-3" width="150px" src="/{{$user->user_info->image}}" alt="User Image">
                            @else
                                <img class="avatar avatar-sm me-3" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                            @endif

                            {{-- <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd"> --}}
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex px-2 py-1">

                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$user->user_info->dateofbirth}}</h6>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex px-2 py-1">

                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$user->user_info->location}}</h6>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex px-2 py-1">

                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$user->email}}</h6>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex px-2 py-1">

                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$user->user_info->phonenumber}}</h6>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex px-2 py-1">

                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$user->user_info->role}}</h6>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="{{route('updaterole',$user->user_info->user_id)}}" method="POST">

                        @csrf
                        <label for="role">

                            change the role of the user
                            <select name="role" id="role">
                                <option value="admin">admin</option>
                                <option value="handyman">handyman</option>
                                <option value="cordenator">cordenator</option>
                                <option value="GM">GM</option>
                                <option value="designer">designer</option>
                            </select>
                            <button type="submit">save</button>
                        </label>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

@endsection
