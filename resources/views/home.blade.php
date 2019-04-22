@extends('layouts.app')
      @include('inc.carousel')
      @section('title', 'Home')
@section('content')
  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div class="col-9">
        <div class="row">
          {{-- <div class="col-6">
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
          </div> --}}
          <div class="col-6">
            <div class="card border-primary mb-3" style="height: 28rem;">
              <h3 class="text-white card-title p-2 text-center mb-0">
                Jobs
              </h3>
              <div class="card-body text-primary">
                <a
                  href="http://csc.gov.ph/career/"
                  class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                  Career in Government Service
                </a>
                <a
                  href="https://www.philjobnet.gov.ph/"
                  class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                  Phil Job Net
                </a>

              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card border-primary mb-3" style="height: 28rem;">
              <h3 class="text-white card-title p-2 text-center mb-0">
                Sevices
              </h3>
                <div class="card-body text-primary">
                  <button type="button" class="btn btn-outline-info btn-block text-dark" data-toggle="modal" data-target="#bploForm">
                    BPLO Fill Up Forms
                  </button>
                  <a
                    href="https://epaymentportal.landbank.com/index.php?code=VHQxcGVETU5EOWZiZXVIQnRWQ3NodmtCL2dKMG1HRjBsJTJCZ2k5dlIvclcwPQ&fbclid=IwAR1nOclEeFYG6lARtlcj5bKGAK3bRaeAXdihUBF1BdvmHzbdT5uPukxYku4"
                    class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                    Business Tax Payment
                  </a>
                  <a
                    href="https://epaymentportal.landbank.com/index.php?code=VHQxcGVETU5EOWZiZXVIQnRWQ3NodmtCL2dKMG1HRjBsJTJCZ2k5dlIvclcwPQ&fbclid=IwAR1nOclEeFYG6lARtlcj5bKGAK3bRaeAXdihUBF1BdvmHzbdT5uPukxYku4"
                    class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                    Franchise Tax Payment
                  </a>
                  <a
                    href="https://epaymentportal.landbank.com/index.php?code=VHQxcGVETU5EOWZiZXVIQnRWQ3NodmtCL2dKMG1HRjBsJTJCZ2k5dlIvclcwPQ&fbclid=IwAR1nOclEeFYG6lARtlcj5bKGAK3bRaeAXdihUBF1BdvmHzbdT5uPukxYku4"
                    class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                    Real Property Tax Payment
                  </a>
                  <button type="button" class="btn btn-outline-info btn-block text-dark">
                    Market Online Payment
                  </button>
                  <a
                    href="https://www.bir.gov.ph/index.php/registration-requirements/primary-registration/application-for-tin.html"
                    class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                    Online BIR Registration
                  </a>
                  <a
                    href="https://www.bnrs.dti.gov.ph/web/guest/home"
                    class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                    Online DTI Business Registration
                  </a>
                  <a
                    href="https://www.passport.gov.ph/"
                    class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                    Passport Online Application
                  </a>
                  {{-- <div class="align-baseline">
                    <a href="#" class="float-right font-weight-bold font-italic p-2 text-primary" data-toggle="modal" data-target="#exampleModalLong">See All Services>></a>
                  </div> --}}
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card border-primary mb-1" style="height: 28rem;">
          <h2 class="text-white card-title p-2 text-center mb-0">
            Hotlines
          </h2>
            <div class="card-body text-dark">
              <dl>
                <dt>San Pablo City Government Offices:</dt>
                <dd>564-3212</dd>
                <dt>San Pablo City Police (PNP): </dt>
                <dd>564-3212</dd>
                <dt>San Pablo City Fire Department:</dt>
                <dd>564-3212</dd>
              </dl>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-9">
        <div class="row">
          <div class="col-12">
            <div class="card border-primary mb-3" style="height: 18rem;">
              <h3 class="text-white card-title p-2 text-center mb-0 align-text-bottom">
                Events and Announcements
              </h3>
                <div class="card-body d-flex justify-content-center">
                  <img src="{{URL::asset('image/event2.jpg')}}" alt="Event 1" class="" style="height: 12vw; object-fit: cover;">

                </div>
                <div class="">
                  <a href="#" class=" float-right font-weight-bold font-italic p-2 text-primary align-baseline align-text-bottom" data-toggle="modal" data-target="#exampleModalLong">See All Events>></a>
                </div>
            </div>
          </div>



        </div>
      </div>
      <div class="col-3">
        <div class="card border-primary mb-1" style="height: 18rem;">
          <h4 class="text-white card-title p-2 text-center mb-0">
            Featured Links
          </h4>
            <div class="card-body">
              <dl class="text-center">
                <dd>
                  <a class="btn-link" href="https://www.facebook.com/Sanpablocity">San Pablo City Facebook Page</a>
                </dd>
                <dd>
                  <a class="btn-link" href="https://www.facebook.com/cio.sanpablo">CIO Facebook Link</a>
                </dd>
                <dd>
                  <a class="btn-link" href="https://www.youtube.com/user/mysanpablo/featured">San Pablo City Youtube Channel</a>
                </dd>
                <dd>
                  <a class="btn-link" href="https://twitter.com/sanpablocity">San Pablo City Twitter</a>
                </dd>
              </dl>
            </div>

        </div>
      </div>
    </div>
    {{-- <div class="col-md-12">
      <div class="card border-primary mb-3" style="height: 28rem;">
        <h3 class="text-white card-title p-2 text-center mb-0">
          Videos
        </h3>
        <div class="card-item embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=cauA0tG0NoE" allowfullscreen>
          </iframe>
        </div>
        </div>
      </div> --}}
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/cauA0tG0NoE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
