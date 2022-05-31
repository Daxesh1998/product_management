@extends('layouts.master')


@section('content')

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-primary text-uppercase text-center">View Product</h1>

        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Add
            </button>
        </div>
        <br>


        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="{{ url('/addproduct') }}" method="post">

                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                            @csrf
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label>Price:</label>
                                <input type="number" name="price" id="price" class="form-control" placeholder="Enter Price">
                            </div>

                            <div class="form-group">
                                <label>Description:</label>
                                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Description">
                            </div>

                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- View all the record -->


    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" id="search" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
            
        </div>
    </div>
    <br>
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
        <tbody id="Content">

            @foreach ($data as $item)

            <tr>    
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>

                <!-- <td><img class="img-thumbnail" height="100" width="100" src=public\images\ {{$item -> image}} </td> -->
                <!-- <td> <img src="/public/image/{{ $item -> image}}" height="30px" width="30px" /> -->

                <td><img src="{{ asset('image/'.$item -> image) }}" height="70px" width="70px"></td>
                <td><a href="/oneproduct/{{$item->id}}">View</a></td>
                <td><a href="/edit/{{$item->id}}">Edit</a></td>
                <!-- <td><a href="data-target="#update">Edit</a></td> -->
                <!-- <td>
                <button type="button"  value="{{$item->id}}" class="btn btn-warning" data-toggle="modal" data-target="#update">
                Update
            </button>
                </td> -->
            </tr>
            @endforeach
        </tbody>

        <!-- <tbody class="Content" class="searchdata"> -->

        </tbody>
    </table>


    <script type="text/javascript">
        $('#search').on('keyup', function() {
            //alert('hello');

            $value=$(this).val();

            
           // alert($value);
           $.ajax({
                type:'get',
                url:'search',
                //url:'{{URL::to('search')}}',
                data:{
                    'search':$value
                },
                success:function(data){
                    console.log(data);
                    $('#Content').html(data);
                }

           });
            
        })
    </script>





</body>

</html>

@endsection