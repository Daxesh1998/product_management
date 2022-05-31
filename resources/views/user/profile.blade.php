@extends('layouts.master')


@section('content')





<div class="row"  style="justify-content: center;">
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('userimage/user1-128x128.jpg') }}" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Profile</h3>



                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>{{ Auth::user()->name }}</b>
                            </li>
                            <li class="list-group-item">
                                <b>{{ Auth::user()->email }}</b>
                            </li>
                            <li class="list-group-item">
                                <b>{{ Auth::user()->role }}</b>
                            </li>
                        </ul>

                        <a href="dashboard" class="btn btn-primary btn-block"><b>Back To Deshboard</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>

  </div>
</div>
<!-- <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col"> Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>

            <th scope="col" colspan="2">Operations</th>
        </tr>
    </thead>
    <tbody>



        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->role}}</td>



            <td><a href="oneproduct/{{$data->id}}">View</a></td>
            <td><a href="/edit/{{$data->id}}">Edit</a></td>


        </tr>

    </tbody>
</table> -->



@endsection