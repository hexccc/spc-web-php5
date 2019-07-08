@include('inc.carousel')
@extends('layouts.app')
@section('content')
@section('title', 'Home')



{{-- NEWS --}}
  <div class="container-fluid">
    <div class="row">
      <div class='col-md-12'>
        <div class="card border-primary mb-3">
          <h3 class="text-white card-title p-2 pl-3 mb-0" style="background:#0072e9;">My City, My Government</h3>
          <div class="card-body text-primary" >
            <div class="row">
              {{-- <div class="col-sm-3">
                <img class="align-middle img-thumbnail rounded" src="{{URL::asset('image/news1.jpg')}}" >
                <p>End of 15th Sangguniang Panlungsod during their 153rd Regular Session held last June 24, 2019</p>
              </div>
              <div class="col-sm-3">
                <img class="align-middle img-thumbnail rounded" src="{{URL::asset('image/news2.jpg')}}" >
                <p>Congratulations to Barangay III-A for being "Drug-cleared Barangay"</p>
              </div>
              <div class="col-sm-3">
                <img class="align-middle img-thumbnail rounded" src="{{URL::asset('image/news 3.jpg')}}">
                <p>Courtesy Call of National PRISAA 2019 3rd placer (Mixed Doubles) Mr. John Carlitos F. Reyes and Mr. Jan Vermier M. Escueta his Coach.</p>
              </div>
              <div class="col-sm-3">
                <img class="align-middle img-thumbnail rounded" src="{{URL::asset('image/news4.jpg')}}" >
                <p>Courtesy Call of Miss Tourism Philippines 2019 Official Candidate Ms. Daisy Rose A. Gonzales.</p>
              </div> --}}
              @foreach($news as $n)
                <div class="col-sm-3">
                  <img class="align-middle img-thumbnail rounded" src="{{ URL::to('/') }}/image/{{$n->thumbnail}}">
                  <p>{{$n->title}}</p>
                </div>
              @endforeach
            </div>
            <a href="#" id="moreNews"
              class="font-weight-bold font-italic text-primary align-baseline"
              data-toggle="modal"
              data-target="#id-2">
              See All News>>
            </a>
          </div>
        </div>
      </div>
    </div>



    {{-- 1st row --}}
    <div class="row">
      <div class="col-lg-3">
        <div class="card border-primary mb-3">
          <h3 class="text-white card-title p-2 text-center mb-0">Jobs</h3>
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

        <div class="card border-primary mb-3">
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
          <div>
            <img class="align-middle" src="{{URL::asset('image/banner.png')}}" style="height:73px">
          </div>
      </div>
      <div class="col-lg-6">
        <div class="card border-primary mb-3">
          <h3 class="text-white card-title p-2 text-center mb-0">Sevices</h3>
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
          </div>
        </div>
      </div>

      <div class="col-lg-3 pb-1">
        <div class="card border-primary">
          <h3 class="text-white card-title p-2 text-center mb-0">Hotlines</h3>
          <div class="card-body text-primary col-md-12" >
            <dl class="row text-dark pb-0 mb-0">
              <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/spc-logo.png')}}" class="img-responsive" style="width:16px"></dt>
              <dd class="col-10 font-weight-bold mb-0">San Pablo Government</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/telephone.png')}}" class="img-responsive" style="width:16px"></dt>
                <dd class="col-10 pb-2">Landline 3000-065</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/spc-logo.png')}}" class="img-responsive" style="width:16px"></dt>
              <dd class="col-10 font-weight-bold mb-0">San Pablo CDRRMO</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/telephone.png')}}" class="img-responsive" style="width:16px"></dt>
                <dd class="col-10 mb-0">Landline 800-405</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/phone.png')}}" class="img-responsive" style="width:12px"></dt>
                <dd class="col-10 mb-0">Smart 09089078124</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/phone.png')}}" class="img-responsive" style="width:12px"></dt>
                <dd class="col-10 pb-2">Globe 09955619456</dd>&nbsp;
              <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/control.png')}}" class="img-responsive" style="width:16px"></dt>
              <dd class="col-10 font-weight-bold mb-0">BARANGAY CONTROL</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/telephone.png')}}" class="img-responsive" style="width:16px"></dt>
                <dd class="col-10 pb-2">5623-086</dd>&nbsp;
              <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/redcross.png')}}" class="img-responsive" style="width:16px"></dt>
              <dd class="col-10 font-weight-bold mb-0">RED CROSS SPC Chapter</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/telephone.png')}}" class="img-responsive" style="width:16px"></dt>
                <dd class="col-10 pb-2">564-3212</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/spc-logo.png')}}" class="img-responsive" style="width:16px"></dt>
                <dd class="col-10 font-weight-bold mb-0">San Pablo Welfare & Development Office</dd>&nbsp;
                  <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/telephone.png')}}" class="img-responsive" style="width:16px"></dt>
                  <dd class="col-10 pb-2">Landline (049)3000-065</dd>&nbsp;
              <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/bumbero1.png')}}" class="img-responsive" style="width:20px"></dt>
              <dd class="col-10 font-weight-bold mb-0">Bureau of Fire Protection</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/telephone.png')}}" class="img-responsive" style="width:16px"></dt>
                <dd class="col-10 pb-2">5627-654/5210-610</dd>&nbsp;
              <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/police.png')}}" class="img-responsive" style="width:23px"></dt>
              <dd class="col-10 font-weight-bold mb-0">San Pablo City Police</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-right mb-0"><img src="{{URL::asset('image/telephone.png')}}" class="img-responsive" style="width:16px"></dt>
                <dd class="col-10 mb-0">5626-474 / 5210-610</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    {{-- 1st row end --}}

    {{-- 2nd row --}}
    <div class="row">
      <div class="col-lg-4">
        <div class="card border-primary mb-3" style="height: 23rem;">
          <h3 class="text-white card-title p-2 text-center mb-0 align-text-bottom">
          Events and Announcements
          </h3>
          <div class="card-body d-flex justify-content-center">
          <img src="{{URL::asset('image/event3.jpg')}}" alt="Event 1" class="img-responsive" style="width: 100%;height: 100%;" data-toggle="modal" data-target="#event1">
          </div>
          <a href="#" class="text-right font-weight-bold font-italic p-2 text-primary align-baseline align-text-bottom" data-toggle="modal" data-target="#event1">See All Events>></a>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card border-primary mb-3">
          <h3 class="text-white card-title p-2 text-center mb-0">
          Disclosure
          </h3>
          <div class="card-body text-primary">
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
      <div class="col-lg-4">
        <div class="card border-primary mb-1">
          <h4 class="text-white card-title p-2 text-center mb-0">
            Featured Links
          </h4>
          <div class="card-body">
            <dl class="text-center">
            <dd>
            <a class="btn-link" href="https://www.facebook.com/cio.sanpablo" target="_blank">CIO San Pablo FB Page</a>
            </dd>
            <dd>
            <a class="btn-link" href="https://www.facebook.com/tourismsanpablo" target="_blank">Tourism Office San Pablo FB Page</a>
            </dd>
            <dd>
            <a class="btn-link" href="https://www.facebook.com/sanpablo.lgu.1" target="_blank">San Pablo LGU FB Page</a>
            </dd>
            <dd>
            <a class="btn-link" href="https://www.facebook.com/profile.php?id=100004675068302&fref=pb&hc_location=friends_tab" target="_blank">CDRRMO San Pablo FB Page</a>
            </dd>
            </dl>
          </div>

        </div>
        <div class="card border-primary card-body ">
          <img class="align-middle" src="{{URL::asset('image/flag.gif')}}">
          <p class="text-center">Happy Independence Day from The City Government of San Pablo</br> <b style="font-size:1rem;">Independence Day June 12, 2019</b> </br></p>
        </div>
      </div>
    </div>
    {{-- 2nd row end --}}

    {{-- 3rd row --}}
    <div class="row mt-4">
      <div class="col-lg-12 mb-4">
        <div class="card border-primary mb-1">
          <h3 class="text-white card-title p-2 text-center mb-0">Videos</h3>
          <div class="card-body text-primary">
            <div class="container">
              <div class="row">
                <div class="col-lg-3" style="margin-bottom: 20px;">
                  <iframe height="250px" width="100%" src="https://www.youtube.com/embed/Xja8v82gweA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3" style="margin-bottom: 20px;">
                  <iframe class="pb-3" width="100%" height="250px" src="https://www.youtube.com/embed/4M7GjCzUb40" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3" style="margin-bottom: 20px;">
                  <iframe class="pb-3" width="100%" height="250px" src="https://www.youtube.com/embed/HCj17hZM4vo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3" style="margin-bottom: 20px;">
                  <iframe width="100%" height="250px" src="https://www.youtube.com/embed/QCd-faJ5OGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- 3rd row end --}}

  </div>
  <div class="float-right mr-3">
    <p>Visitor's Counter: {{ $count }}</p>
  </div>

  <script src="/js/modal.js"></script>
  <script src="/js/modal-brgy.js"></script>
@extends('inc.modals')
@endsection
