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

    <div class="row col-md-8">
      <div class="col-md-12 pb-2">
        <div class="card shadow card-body">
          <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/amben.png')}}" style="height:100%; width:200px;">
          <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Mayor Loreto "Amben" S. Amante</h5>
          <p class="text-center"><b>City Mayor of San Pablo City</b></p>
        </div>
      </div>

      <div class="col-md-12 pb-2">
        <div class="card shadow card-body">
          <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/colago.png')}}" style="height:100%; width:200px;">
          <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Justin G. Colago</h5>
          <p class="text-center"><b>City Vice Mayor of San Pablo City</b></p>
        </div>
      </div>
        {{-- <div class="row col-md-12"> --}}
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/yang.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Angie Yang</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/adajar.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Karla Monica Adajar</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/acebedo.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Carmela Acebedo</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/biglete.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Jojo Biglete</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/gel.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Adriano Gel</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/pavico.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Elsie Pavico</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/delacruz.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Ed Dela Cruz</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/espiritu.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Buhay Espiritu</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/calatraba.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Napoleon Calatrabra</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/medina.png')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Dandi Medina</h5>
              <p class="text-center"><b>City Councilor</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/aristonamante.PNG')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Ariston A. Amante</h5>
              <p class="text-center"><b>ABC, President</b></p>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="card shadow card-body">
              <img class="img-fluid rounded mx-auto d-block" src="{{URL::asset('image/capuchino.PNG')}}" style="height:100%; width:200px;">
              <h5 class="mt-0 font-weight-bold text-center" style="color:3490DC;">Hon. Liberty Pamela E. Capuchino</h5>
              <p class="text-center"><b>SK Federation President</b></p>
            </div>
          </div>


      </div>
    </div>
  </div>
