@extends('layouts.master')


@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col"> Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            
        </tr>
    </thead>
    <tbody>

        @foreach ($data as $item)

        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->description}}</td>

            <!-- <td><img class="img-thumbnail" height="100" width="100" src=public\images\ {{$item -> image}} </td> -->
            <!-- <td> <img src="/public/image/{{ $item -> image}}" height="30px" width="30px" /> -->

            <td><img src="{{ asset('image/'.$item -> image) }}" height="70px" width="70px"></td>
            
        </tr>
        @endforeach
    </tbody>
</table>

@endsection