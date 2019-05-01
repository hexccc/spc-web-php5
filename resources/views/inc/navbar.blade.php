<nav class="navbar navbar-expand-lg fixed-top" role='navigation'>
  <a class='navbar-brand'>
    <img class='img-responsive' src="{{URL::asset('image/spc-logo.png')}}" alt="Logo" height="50px" width="50px" >
  </a>
  <div class="text-center px-3">
    San Pablo City
    <p class="h6 text-nowrap" style="font-size:8px;">
      Official Website of the City
      Government of San Pablo
    </p>
  </div>
  <button type='button' class='navbar-toggler' data-toggle='collapse' data-target='#collapseNav'>
    <span class='fa fa-list-ul'></span>
  </button>
  <div class='collapse navbar-collapse' id='collapseNav' >
    <a class='navbar-brand'></a>
    <ul class="navbar-nav mr-auto ml-3">
      <li class="nav-item">
        <a class="btn nav-link mx-2" href="/">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="btn nav-link dropdown-toggle mx-2 " data-toggle="dropdown" href="#">The City<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <div class="dropdown-item">
              <li>
                <a class="text-body btn-block"href="mission">Mission & Vision</a>
              </li>
            </div>
            <div class="dropdown-item">
              <li>
                <a class="text-body btn-block"href="location">Location & Topology</a>
              </li>
            </div>
            <div class="dropdown-item">
              <li>
                <a class="text-body btn-block" href="history">History</a>
              </li>
            </div>
            <div class="dropdown-item"><li><a class="text-body btn-block" href="sanpablenos">San Pableños</a></li></div>
            <div class="dropdown-item"><li><a class="text-body btn-block" href="barangay">Barangays</a></li></div>
            <div class="dropdown-item"><li><a class="text-body btn-block" href="hymn">Hymn</a></li></div>
          </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="btn nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="#">Government<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <div class="dropdown-item"><li><a class="text-body btn-block" href="#">Local Officials</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="departments">Departments</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="ordinances">Standing Commitees</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="ordinances">Ordinances</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="ela">ELA</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="office_map">Office Vicinity Map</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="economy">Economy</a></li></div>
        </ul>
      </li>

<<<<<<< HEAD
            <div class="dropdown-item"><li><a class="text-body btn-block" href="landmarks">Landmarks</a></li></div>
            <div class="dropdown-item"><li><a class="text-body btn-block" href="gallery">Gallery</a></li></div>
          </ul>
        </li>
          <a class="float-right btn nav-link mx-2 d-flex justify-content-end" href="{{URL::asset('docs/SPC CC V 04.24.19.pdf')}}" target="_blank"  >
            Citizen's Charter
          </a>
          {{-- <li class="float-right mx-auto">
          <iframe class="float-right" style="pointer-events: none;" src="https://freesecure.timeanddate.com/clock/i6qeu6qp/n145/tlph/fs15/fcfff/tct/pct/tt0" frameborder="0" width="279" height="20" allowTransparency="true" disabled>
          </iframe>
        </li> --}}
      </ul>
      <ul class="navbar-nav ml-auto">
=======
      <li class="nav-item dropdown">
        <a class="btn nav-link active dropdown-toggle mx-2" data-toggle="dropdown" href="#">Economy<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <div class="dropdown-item">
            <li class='dropright'>
              <a class="text-body btn-block dropdown-toggle" data-toggle='dropdown' href='#'>Comprehensive Land Use Program<span class="caret"></span></a>
              <ul class='dropdown-menu'>
                <li class="dropdown-item"><a class="text-body btn-block" href="{{URL::asset('docs/VOLUME 1 The Comprehensive Land Use Plan San Pablo City as of Nov 30 2016.pdf')}}" target="_blank">Volume 1</a></li>
                <li class="dropdown-item"><a class="text-body btn-block" href="{{URL::asset('docs/VOLUME 2 Zoning Ordinance San Pablo City as of Nov 30 2016.pdf')}}" target="_blank">Volume 2</a></li>
                <li class="dropdown-item"><a class="text-body btn-block" href="{{URL::asset('docs/VOLUME 3 Sectoral Studies San Pablo City UPDATED_as of Nov 27 2016.pdf')}}" target="_blank">Volume 3</a></li>
              </ul>
            </li>
          </div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="{{URL::asset('docs/CDP Annexes 2018-2023.pdf')}}" target="_blank">Comprehensive Development Plan</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="{{URL::asset('docs/SPC Ecological Profile.pdf')}}" target="_blank">SPC Ecological Profile</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="{{URL::asset('docs/CDP Annexes 2018-2023.pdf')}}" target="_blank">CDP Annexes</a></li></div>
        </ul>
      </li>
>>>>>>> 19c7084eb3644b66ddac2f3f6b70ee390b56df7f

      <li class="nav-item dropdown">
        <a class="btn nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="#">Tourism<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <div class="dropdown-item"><li><a class="text-body btn-block" href="{{URL::asset('docs/SP TMP.pdf')}}" target="_blank">Tourism Masterplan</a></li></div>

          <div class="dropdown-item"><li><a class="text-body btn-block" href="landmarks">Landmarks</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn-block" href="gallery">Gallery</a></li></div>
        </ul>
      </li>
      
      <li class='nav-item'>
        <a class="btn nav-link mx-2" href="{{URL::asset('docs/SPC CC V 04.24.19.pdf')}}" target="_blank"  >
          Citizen's Charter
        </a>
      </li>
      <li class='nav-item text-center' style="padding-top:10px">
        <iframe style="pointer-events: none;" src="https://freesecure.timeanddate.com/clock/i6qeu6qp/n145/tlph/fs15/fcfff/tct/pct/tt0" frameborder="0" width="279" height="20" allowTransparency="true" disabled></iframe>
      </li>
    </ul>
  </div>
</nav>
