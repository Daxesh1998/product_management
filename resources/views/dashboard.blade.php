@extends('layouts.master')

@section('page_title')
    Dashboard
@endsection

@section('header_title')
    Dashboard
@endsection

@section('bredcrum_content_two')
    Dashboard
@endsection

@section('content') 
    @can('isAdmin')
        Hello I am Admin

        <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h2 class="h2 font-weight-bold mb-0">{{DB::table('users')->count()}} </h2>
                        <p style="padding: 9px">Total users</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-list" ></i>
                    </div>
                    <a href="/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
    @endcan

    @can('isUser')
        Hello I am User
    @endcan
@endsection
