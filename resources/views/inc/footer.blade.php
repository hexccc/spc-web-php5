<footer id="footer" class="text-center" style="height:1px;">
    {{-- <p>The Integrated Government Philippines (iGovPhil) is a joint program of the<br>
    Department of Information and Communications Technology (DICT) and the<br>
  Advanced Science and Technology Institute of the Department of Science and Technology (DOST-ASTI)</p>
    <div class=" form-groupcol-md-4">
      <img style="padding-right:100px"src="{{URL::asset('image/dict.png')}}" alt="Logo" height="80px">
      <img src="{{URL::asset('image/asti.png')}}" alt="Logo" height="80x">
    </div> --}}
</footer>
  <footer class="page-footer font-small blue pt-2">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-2 text-center">
        <img class="my-2"src="{{URL::asset('image/phlogo.png')}}" alt="Logo" height="90px"><br>
        <img class=""src="{{URL::asset('image/transpa.png')}}" alt="Logo" height="90px">
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0">
          <ul class="list-unstyled small">
            <li>
              <p class="font-weight-bold">REPUBLIC OF THE PHILIPPINES</p>
            </li>
            <li>
              <p>All content is in the public domain unless otherwise stated.</p>
            </li>
          </ul>
      </div>
      <div class="col-md-2 mb-md-0 mb-3">
        <ul class="list-unstyled small">
          <li>
            <p class="font-weight-bold">ABOUT GOVPH</p>
          </li>
          <li>
            <p>Learn more about the Philippine government, its structure, how government works and the people behind it.</p>
          </li>
          <li>
              <a href="http://www.gov.ph/">GOV.PH</a>
          </li>
          <li>
            <a href="http://www.gov.ph/data/">Open Data Portal</a>
          </li>
          <li>
            <a href="http://www.officialgazette.gov.ph/">Official Gazette</a>
          </li>
        </ul>
      </div>
      <div class="col-md-2 mb-md-0 mb-3">
        <ul class="list-unstyled small">
          <li>
            <p class="font-weight-bold">GOVERNMENT LINKS</p>
          </li>
          <li>
            <a href="http://president.gov.ph/">Office of the President</a>
          </li>
          <li>
              <a href="http://ovp.gov.ph/">Office of the Vice President</a>
          </li>
          <li>
            <a href="http://www.senate.gov.ph/">Senate of the Philippines</a>
          </li>
          <li>
            <a href="http://www.congress.gov.ph/">House of Representatives</a>
          </li>
          <li>
              <a href="http://sc.judiciary.gov.ph/">Supreme Court</a>
          </li>
          <li>
            <a href="http://ca.judiciary.gov.ph/">Court of Appeals</a>
          </li>
          <li>
            <a href="http://sb.judiciary.gov.ph/">Sandiganbayan</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <div class="card pb-0">
            <h2 class="text-white card-title border-primary text-center mb-0" >Member Log in</h2>
            <a href="signin_requestor" class="btn btn-outline-success text-dark btn-block btn-sm my-2" aria-disabled="true"  style="border-radius:25px";><h4>Log In</h4></a>
          </div>
        </div>
      </div>
  </div>
  </footer>
<hr>
  <footer class="container-fluid text-md-left">
    <div class="d-flex justify-content-around">
      <div class="p-2">
        <p style="font-size: 8px; ">Project by:
        <img class="image-fluid pt-2"src="{{URL::asset('image/pylon.png')}}" alt="Logo" height="40px"></p>
      </div>
      <div class="p-2">
        <img src="{{URL::asset('image/spc-logo.png')}}" alt="Logo" height="50px" width="50px">
        &copy;
        <script type="text/javascript">
          document.write(new Date().getFullYear());
        </script> San Pablo City Government</p>
      </div>
      <div class="p-2">
      <p class="align-middle"style="font-size: 10px; ">
        Developed by:</br>
        &emsp;Hendrixson Cordez</br>
        &emsp;Renzo Dimasapit</p>
      </div>
    </div>

    {{-- <form style="" action ="{{ route ('visit.update', ['id'=>$id]) }}" method="post">
      <input type="text" name="" value="{{ $post->visit_count}}" id="postVisitCount">
    </form> --}}



  </footer>

</div>
