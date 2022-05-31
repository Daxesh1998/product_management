@extends('layouts.master')


@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col"> Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            
            <!-- <th scope="col" colspan="2">Operations</th> -->
        </tr>
    </thead>
    <tbody>



        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->role}}</td>

           
            
            <!-- <td><a href="oneproduct/{{$data->id}}">View</a></td> -->
            <!-- <td><a href="/edit/{{$data->id}}">Edit</a></td> -->

            
        </tr>

    </tbody>
</table>



@endsection