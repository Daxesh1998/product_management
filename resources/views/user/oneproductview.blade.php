@extends('layouts.master')


@section('content')
<a href="/product" class="btn btn-primary"><b>Back To Product</b></a><br></br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col"> Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col" colspan="2">Operations</th>
        </tr>
    </thead>
    <tbody>



        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>

           
            <td><img src="{{ asset('image/'.$data-> image) }}" height="70px" width="70px"></td>
            <!-- <td><a href="oneproduct/{{$data->id}}">View</a></td> -->
            <td><a href="/edit/{{$data->id}}">Edit</a></td>

            
        </tr>

    </tbody>
</table>



@endsection