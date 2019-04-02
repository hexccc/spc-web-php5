@extends('layouts.app')


  <div class="mx-auto col-md-10 offset-md-1 pt-4" style="width:100%">
      <h3 class="bg-primary text-white p-2 mt-4">
    City Hall Vicinity Map
      </h3>
    <img src="{{URL::asset('image/cityhall.png')}}" style="width:80%;" class="mx-auto d-block">
  </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7740.128825323812!2d121.32083646232464!3d14.073373671893519!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x33bd5ccf79d1fc51%3A0x3b7a30db01a7f29d!2sSan+Pablo+City+Hall!3m2!1d14.074488299999999!2d121.32454279999999!4m0!5e0!3m2!1sen!2sph!4v1553066791791" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
