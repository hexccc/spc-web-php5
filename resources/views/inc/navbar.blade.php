<nav class="navbar navbar-expand-sm fixed-top" style="height:65px;">
  <img src="{{URL::asset('image/spc-logo.png')}}" alt="Logo" height="50px" width="50px" >
  <div class="navbar-brand text-center" href='#' >
    San Pablo City</br>
      <p class="h6 text-nowrap" style="font-size:12px;">
          City Government Website
      </p>
  </div>
  {{-- <div class='collapse navbar-collapse' id='collapseNav'> --}}
  <div>
    <ul class="navbar-nav ml-3">
      <li class="nav-item">
        <a class="btn btn-outline-info nav-link mx-2" href="/">
          Home
        </a>

        <li class="nav-item dropdown">
          <a class="btn btn-outline-info nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="gov">
            The City<span class="caret"></span>
          </a>
            <ul class="dropdown-menu">
              <div class="dropdown-item"><li><a href="location" class="text-body">Location & Topology</a></li></div>
              <div class="dropdown-item"><li><a href="history">History</a></li></div>
              <div class="dropdown-item"><li><a href="sanpablenos">San Pableños</a></li></div>
              <div class="dropdown-item"><li><a href="barangay">Barangays</a></li></div>
              <div class="dropdown-item"><li><a href="hymn">Hymn</a></li></div>
            </ul>
        </li>

      </li>
      <li class="nav-item dropdown">
        <a class="btn btn-outline-info nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="gov">
          Government<span class="caret"></span>
        </a>
          <ul class="dropdown-menu">
            <div class="dropdown-item"><li><a href="local_off">Local Officials</a></li></div>
            <div class="dropdown-item"><li><a href="departments">Departments</a></li></div>
            <div class="dropdown-item"><li><a href="ordinances">Standing Commitees</a></li></div>
            <div class="dropdown-item"><li><a href="ordinances">Ordinances</a></li></div>
            <div class="dropdown-item"><li><a href="ela">ELA</a></li></div>
            <div class="dropdown-item"><li><a href="office_map">Office Vicinity Map</a></li></div>
            <div class="dropdown-item"><li><a href="economy">Economy</a></li></div>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="btn btn-outline-info nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="tourism">
            Tourism<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <div class="dropdown-item"><li><a href="festival">Festival</a></li></div>
            <div class="dropdown-item"><li><a href="gallery">Gallery</a></li></div>
            <div class="dropdown-item"><li><a href="landmarks">Landmarks</a></li></div>
          </ul>
        </li>

        {{-- <li class="nav-item dropdown">
          <a class="btn btn-outline-info nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="economy">
            Economy<span class="caret"></span>
          </a>
            <ul class="dropdown-menu">
              <div class="dropdown-item"><li><a href="economy">Investments</a></li></div>
              <div class="dropdown-item"><li><a href="#">Trade & relation</a></li></div>
              <div class="dropdown-item"><li><a href="#">Banks & institutions</a></li></div>
              <div class="dropdown-item"><li><a href="#">Revenue code</a></li></div>
            </ul>
          </li>

        <li class="nav-item dropdown">
          <a class="btn btn-outline-info nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="spablenos">
            San Pableños<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <div class="dropdown-item"><li><a href="spablenos">Population</a></li></div>
            <div class="dropdown-item"><li><a href="#">Education</a></li></div>
            <div class="dropdown-item"><li><a href="#">Livelihood</a></li></div>
            <div class="dropdown-item"><li><a href="#">Contribution</a></li></div>
            <div class="dropdown-item"><li><a href="#">Awardees</a></li></div>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="btn btn-outline-info nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="gallery">
            Gallery<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <div class="dropdown-item"><li><a href="gallery">New Videos</a></li></div>
            <div class="dropdown-item"><li><a href="#">Pictures</a></li></div>
          </ul>
        </li> --}}
      </ul>
    </div>
</nav>
