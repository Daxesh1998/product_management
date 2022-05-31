@extends('layouts.master')


@section('content')
    <h1>
        View User
    </h1>


    <table class="table">
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
            
            @foreach ($data as $item)
            
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->role}}</td>
                 
                <!-- <td><img class="img-thumbnail" height="100" width="100" src=public\images\ {{$item -> image}} </td> -->
               <!-- <td> <img src="/public/image/{{ $item -> image}}" height="30px" width="30px" /> -->

              
                <td><a href="/oneuser/{{$item->id}}">View</a></td>
                <td><a href="/delete/{{$item->id}}">Delete</a></td>
                <!-- <td><a href="data-target="#update">Edit</a></td> -->
                <!-- <td>
                <button type="button"  value="{{$item->id}}" class="btn btn-warning" data-toggle="modal" data-target="#update">
                Update
            </button>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection