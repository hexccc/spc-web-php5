@extends('layouts.app')
      @include('inc.carousel')
      @include('inc.calendar')
      @section('title', 'Home')
@section('content')
  <div class="col-md-10 offset-md-1">
  <div id='calendar'></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid', 'googleCalendar' ],
    header: {
      left: 'prev',
      center: 'title',
      right: 'next today'
    },


    // THIS KEY WON'T WORK IN PRODUCTION!!!
    // To make your own Google API key, follow the directions here:
    // http://fullcalendar.io/docs/google_calendar/
    googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',


    eventClick: function(arg) {

      // opens events in a popup window
      window.open(arg.event.url, '_blank', 'width=700,height=650');

      // prevents current tab from navigating
      arg.jsEvent.preventDefault();
    }

  });

  calendar.render();
});
</script>
    <div class="row">
      <div class="col-9">
        <div class="row">
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
          <div class="col-6">
            <div class="card border-primary mb-3" style="height: 22rem;">
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
          <div class="col-6">
            <div class="card border-primary mb-3" style="height: 22rem;">
              <h3 class="text-white card-title p-2 text-center mb-0">
                Disclosure
              </h3>
                <div class="card-body text-primary">
                  <div class="row">
                    <div class="col-6">
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/4th-qtr-SPP.xls')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true" >
                        4th-qtr-SPP
                      </a>
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/20-Uitlization-2018-4th-Quarter.xls')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                        20-Utilization-2018-4th-Quarter
                      </a>
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/APP-2019.xlsx')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                      APP-2019
                      </a>
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/BID-RESULTS 2018 4th Quarter.xlsx')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                        BID-RESULTS 2018 4th Quarter
                      </a>
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/CDRRMF-12.31.18.xlsx')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                        CDRRMF-12.31.18
                      </a>
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/Manpower Complement (DILG).xlsx')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                        Manpower Complement (DILG)
                      </a>
                    </div>
                      <div class="col-6">
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/PDAF UTILIZATION.xls')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                        PDAF UTILIZATION
                      </a>
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/SCF-4THQ.xlsx')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                        SCF-4THQ
                      </a>
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/SEF-Utilization-2018.xls')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                        SEF-Utilization-2018
                      </a>
                      <a style="font-size:12px;"
                        href="{{URL::asset('docs/Statement of Debt Services 03.24.14.xlsx')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                        Statement of Debt Services 03.24.14
                      </a>
                      <a style="font-size:12px;"
                      href="{{URL::asset('docs/Unliquidated-2018.xlsx')}}" target="_blank"
                        class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
                        Unliquidated-2018
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="col-3">
        <div class="card border-primary mb-1" style="height: 22rem;">
          <h4 class="text-white card-title p-2 text-center mb-0">
            Featured Links
          </h4>
            <div class="card-body">
              <dl class="text-center">
                <dd>
                  <a class="btn-link" href="https://www.facebook.com/cio.sanpablo">CIO San Pablo FB Page</a>
                </dd>
                <dd>
                  <a class="btn-link" href="https://www.facebook.com/tourismsanpablo">Tourism Office San Pablo FB Page</a>
                </dd>


                <dd>
                  <a class="btn-link" href="https://www.facebook.com/sanpablo.lgu.1">San Pablo LGU FB Page</a>
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

      <div class="media row mb-5">
        <div class=" media-body col-9">
          <iframe class="" height="450" width="810" src="https://www.youtube.com/embed/Xja8v82gweA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>
        <div class="col-3">
          <iframe class="pb-3" width="250" height="150" src="https://www.youtube.com/embed/4M7GjCzUb40" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe class="pb-3" width="250" height="150" src="https://www.youtube.com/embed/HCj17hZM4vo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe width="250" height="150" src="https://www.youtube.com/embed/QCd-faJ5OGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <a>
        <img src="https://smallseotools.com/counterDisplay?code=b393478765d82dad53f6f0aea97be612&style=0015&pad=5&type=page&initCount="  title="Visitor Hit Counter" Alt="Visitor Hit Counter" border="0">
      </a>
    </div>
  </div>
</div>




@endsection
