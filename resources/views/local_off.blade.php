@extends('layouts.app')
@section('title', 'Local Officials')

<div class="mx-auto col-md-10 offset-md-1 pt-4" style="width:100%">
    <h3 class=" text-white p-2 mt-4">
      Local Officials
    </h3>

    <div class="row">
    <div class="col-md-4 mt-2">
      <div class="input-group">
        <input class="form-control py-2 border-right-0 border" type="text" placeholder="" aria-label="Search">
          <span class="input-group-append">
              <div class="input-group-text bg-transparent">
                <i class="fa fa-search">
                </i>
              </div>
          </span>
      </div>
    </div>

<div class="row">
      <div class="col-md-8">
        <div class="card border-primary card-body ">
          <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/amben.png')}}" style="height:100%; width:200px;">
          <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Mayor Loreto "Amben" S. Amante</h5>
          <p class="text-center"><b>City Mayor of San Pablo City</b></p>
        </div>
      </div>

      <li class="media">
        <div class="card border-primary card-body ">
          <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/amben.png')}}" style="height:100%; width:200px;">
          <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Mayor Loreto "Amben" S. Amante</h5>
          <p class="text-center"><b>City Mayor of San Pablo City</b></p>
        </div>
      </div>
    </div>


  </div>
</div>
