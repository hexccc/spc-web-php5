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
            <div class="card border-primary mb-3" style="height: 16rem;">
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
            <div class="card border-primary mb-3" style="height: 11rem;">
              <h3 class="text-white card-title p-2 text-center mb-0">
                Bids and Awards
              </h3>
              <div class="card-body text-primary">
                <a
                  href="https://www.philgeps.gov.ph/GEPSNONPILOT/Tender/SplashOpenOpportunitiesUI.aspx?menuIndex=3&ClickFrom=OpenOpp&type=agency&fbclid=IwAR1rSQrAf0DDTweHIjYTNkT-PWWtHCoCbbN1EfSZcF4b77pZWcIOgOBarS0"
                  class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                  PhilGePS LINK
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
          <h3 class="text-white card-title p-2 text-center mb-0">
            Hotlines
          </h3>
            <div class="card-body text-dark">
              <dl>
                <dt>San Pablo CDRRMO:</dt>
                <dd><span class='fa fa-phone'> </span> Landline 800-405</dd>
                <dd><span class='fa fa-mobile'></span> Smart 09089078124</dd>
                <dd><span class='fa fa-mobile'></span> Globe 09955619456</dd>
                <dt>BARANGAY CONTROL:</dt>
                <dd><span class='fa fa-phone'> </span> 5623-086</dd>
                <dt><span class='fa fa-first-aid'> </span> RED CROSS SPC Chapter</dt>
                <dd><span class='fa fa-phone'> </span> 564-3212</dd>
                <dt><span class='fa fa-fire-extinguisher'> </span> Bumbero</dt>
                <dd><span class='fa fa-phone'> </span> 5627-654</dd>
                <dt><span class='fa fa-taxi'> </span> Pulis</dt>
                <dd><span class='fa fa-phone'> </span> 5626-474 / 5210-610</dd>
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
                  <a class="btn-link" href="https://www.facebook.com/cio.sanpablo">CIO San Pablo FB Fage</a>
                </dd>
                <dd>
                  <a class="btn-link" href="https://www.facebook.com/tourismsanpablo">Tourism Office San Pablo FB Page</a>
                </dd>


                <dd>
                  <a class="btn-link" href="https://www.facebook.com/sanpablo.lgu.1">San Pablo LGU FB Fage</a>
                </dd>
                <dd>
                  <a class="btn-link" href="https://www.facebook.com/profile.php?id=100004675068302&fref=pb&hc_location=friends_tab">CDRRMO San Pablo FB Page</a>
                </dd>
              </dl>
            </div>

        </div>
      </div>
    </div>
    <h3 class="text-white p-2 mt-4">
      Videos
    </h3>
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
      <div class="media row mb-5">
        <div class=" media-body col-9">
          <iframe height="450" width="810" src="https://www.youtube.com/embed/Xja8v82gweA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>
        <div class="col-3">
          <iframe class="pb-3" width="250" height="150" src="https://www.youtube.com/embed/4M7GjCzUb40" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe class="pb-3" width="250" height="150" src="https://www.youtube.com/embed/HCj17hZM4vo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe width="250" height="150" src="https://www.youtube.com/embed/QCd-faJ5OGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>



</div>




@endsection
