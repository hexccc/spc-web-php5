@extends('layouts.app')
      @include('inc.carousel')
      @section('title', 'Home')
@section('content')
  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div class="col-9">
        <div class="row">
          <div class="col-6">
            <div class="card border-primary mb-3" style="height: 12rem;">
              <h2 class="text-white card-title p-2 text-center mb-0">
                MISSION
              </h2>
                <div class="card-body text-primary">
                  <p class="card-text text-dark">To implement the City's development programs through sustainable and effecient delivery of public services in partnership with the private sector.</p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card border-primary mb-3" style="height: 12rem;">
              <h2 class="text-white card-title p-2 text-center mb-0">
                VISION
              </h2>
                <div class="card-body text-primary">
                  <p class="card-text text-dark">San Pablo, the City of Seven Lakes - a premier agricultural and light insdustrial zone, education hub and tourist destination in CALABARZON</p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card border-primary mb-3" style="height: 21rem;">
              <h3 class="text-white card-title p-2 text-center mb-0">
                Events and Announcements
              </h3>
                <div class="card-body d-flex justify-content-center">
                  <img src="{{URL::asset('image/event1.jpg')}}" alt="Event 1" class="" style="height: 15vw; object-fit: cover;">
                </div>
                <div class="align-baseline">
                  <a href="#" class="float-right font-weight-bold font-italic p-2 text-primary" data-toggle="modal" data-target="#exampleModalLong">See All Events>></a>
                </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card border-primary mb-3" style="height: 21rem;">
              <h2 class="text-white card-title p-2 text-center mb-0">
                Sevices
              </h2>
                <div class="card-body text-primary">
                  <button type="button" class="btn btn-light btn-block text-dark" data-toggle="modal" data-target="#bploForm">
                    BPLO Fill Up Forms
                  </button>
                  <a href="https://epaymentportal.landbank.com/index.php?code=VHQxcGVETU5EOWZiZXVIQnRWQ3NodmtCL2dKMG1HRjBsJTJCZ2k5dlIvclcwPQ&fbclid=IwAR1nOclEeFYG6lARtlcj5bKGAK3bRaeAXdihUBF1BdvmHzbdT5uPukxYku4" class="btn btn-light btn-block text-dark" aria-disabled="true" target="_blank">Land Bank Payment System</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card border-primary mb-1" style="height: 34rem;">
          <h2 class="text-white card-title p-2 text-center mb-0">
            Hotlines
          </h2>
            <div class="card-body text-primary">
              <p class="card-text text-dark">
                000
              </p>
          </div>
        </div>
      </div>
    </div>

    <h3 class="text-white p-2 mt-4">
      Home
    </h3>
      <p class="card-text mb-xl-5">
        The earliest historical record of the City of San Pablo dates back to pre-Spanish times when four(4) big barrios bounded by Mt. Banahaw and Mt. Makiling composed Sampaloc.
        In 1521, Sampaloc was changed to San Pablo De Los Montes, which became a parish in 1556 and then a municipality in 1647.  In 1899, a Municipal Government was established with Inocente Martinez as Municipal President in 1902 when the Civil Government was granted independence from the Province of Laguna.  On May 7, 1940, the charter bill sponsored by Congressman Tomas Dizon was approved.
      </p>
</div>




@endsection
