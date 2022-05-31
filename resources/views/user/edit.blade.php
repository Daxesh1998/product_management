@extends('layouts.master')


@section('content')

    

    <div class="container">
        <h2 class="text-center">Edit Product</h2>
        <br>
        <form action="/update" method="post" class="form-group" style="width:70%; margin-left:15%;">

            

        <input type="hidden" name="id" id="id" value="{{$data->id}}">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <label class="form-group">ID:</label>
        <input type="text" class="form-control" value="{{$data->id}}" placeholder="oldpassword" >

        <label class="form-group">Name:</label>
        <input type="text" class="form-control" value="{{$data->name}}" placeholder="oldpassword" name="update_name">

        <label class="form-group">Price:</label>
        <input type="text" class="form-control" value="{{$data->price}}" placeholder="oldpassword" name="update_price">

        <label class="form-group">Description:</label>
        <input type="text" class="form-control" value="{{$data->description}}" placeholder="oldpassword" name="update_description">

        <label class="form-group">Image:</label>
        <input type="file" class="form-control" placeholder="" value="{{$data->image}}" name="update_image"><br>

        
        <button type="submit" value="Add student" class="btn btn-primary">Submit</button>
        </form>

        
    </div>
@endsection