@extends('layouts.master')

@section('content')

<div class="row"  style="justify-content: center;">
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
    <div class="card bg-light d-flex flex-fill">
      <div class="card-header text-muted border-bottom-0">
      Software Engineer
      </div>
      <div class="card-body pt-0">
        <div class="row" >
          <div class="col-7">
            <h2 class="lead"><b>{{ Auth::user()->name }}</b></h2>
            <p class="text-muted text-sm"><b>About: </b> Web Designer/ Developer</p>
            <h4 class="lead"><b>{{ Auth::user()->email }}</b></h4>
            <ul class="ml-4 mb-0 fa-ul text-muted">
              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: At & Po:- Paria, Ta:- Olpad, Dist:- Surat</li>
              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +91 9537645400</li>
            </ul>
          </div>
          
        </div>
      </div>
      <div class="card-footer">
        <div class="text-right">
        </div>
      </div>
    </div>
  </div>
</div>
  @endsection
