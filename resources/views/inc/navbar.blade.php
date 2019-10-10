<nav class="navbar navbar-expand-lg fixed-top" role='navigation'>
  <a href="/" class='navbar-brand mr-1'>
    <img class='img-responsive' src="{{URL::asset('image/spc-logo.png')}}" alt="Logo" width="40px" >
  </a>
  <div class="text-center">
      <p class="my-0"style="">San Pablo City</p>
    <p class="h6 text-nowrap pr-2" style="font-size:8px; color: white;">
      Official Website of the City
      Government of San Pablo
    </p>
  </div>
  <div class="vl px-1">
  </div>
  <button type='button' class='navbar-toggler' style="color:white;" data-toggle='collapse' data-target='#collapseNav'>
    <span class='fa fa-list-ul'></span>
  </button>
  <div class='collapse navbar-collapse' id='collapseNav' >

    <ul class="navbar-nav mr-0 text-center">
      <li class="nav-item">
        <a class="btn nav-link mx-2" href="/">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="btn nav-link dropdown-toggle mx-2 " data-toggle="dropdown" href="#">The City<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <div class="dropdown-item">
              <li>
                <a class="text-body btn btn-block"href="missionvision">Mission & Vision</a>
              </li>
            </div>
            <div class="dropdown-item">
              <li>
                <a class="text-body btn btn-block"href="location">Location & Topology</a>
              </li>
            </div>
            <div class="dropdown-item">
              <li>
                <a class="text-body btn btn-block" href="history">History</a>
              </li>
            </div>
            <div class="dropdown-item"><li><a class="text-body btn btn-block" href="sanpablenos">San Pableños</a></li></div>
            <div class="dropdown-item"><li><a class="text-body btn btn-block" href="barangay">Barangays</a></li></div>
            <div class="dropdown-item"><li><a class="text-body btn btn-block" href="hymn">Hymn</a></li></div>
          </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="btn nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="#">Government<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="local_off">Local Officials</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="departments">Departments</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="#">Standing Commitees</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="#">Ordinances</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="{{URL::asset('docs/ELA 2016-2019 (final).docx')}}" target="_blank">
            ELA
          </a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="officemap">Office Vicinity Map</a></li></div>

        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="btn nav-link active dropdown-toggle mx-2" data-toggle="dropdown" href="#">Economy<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <div class="dropdown-item">
            <li class='dropright'>
              <a class="active btn btn-block dropdown-toggle" data-toggle='dropdown' href='#'>Comprehensive Land Use Program<span class="caret"></span></a>
              <ul class='dropdown-menu'>
            <div class="dropdown-item">
              <li>
                <a class="text-body btn btn-block" href="{{URL::asset('docs/VOLUME 1 The Comprehensive Land Use Plan San Pablo City as of Nov 30 2016.pdf')}}" target="_blank">
                  Volume 1
                </a>
              </li>
            </div>
            <div class="dropdown-item"><li><a class="text-body btn btn-block" href="{{URL::asset('docs/VOLUME 2 Zoning Ordinance San Pablo City as of Nov 30 2016.pdf')}}" target="_blank">
                  Volume 2
                </a>
              </li>
            </div>
            <div class="dropdown-item">
              <li>
                <a class="text-body btn btn-block" href="{{URL::asset('docs/VOLUME 3 Sectoral Studies San Pablo City UPDATED_as of Nov 27 2016.pdf')}}" target="_blank">
                  Volume 3
                </a>
              </li>
            </div>
              </ul>
            </li>
          </div>
          <div class="dropdown-item">
            <li>
              <a class="text-body btn btn-block" href="{{URL::asset('docs/CDP Annexes 2018-2023.pdf')}}" target="_blank">
                Comprehensive Development Plan
              </a>
            </li>
          </div>
          <div class="dropdown-item">
            <li>
              <a class="text-body btn btn-block" href="{{URL::asset('docs/SPC Ecological Profile.pdf')}}" target="_blank">
                SPC Ecological Profile
              </a>
            </li>
          </div>
          <div class="dropdown-item">
            <li>
              <a class="text-body btn btn-block" href="{{URL::asset('docs/CDP Annexes 2018-2023.pdf')}}" target="_blank">
                CDP Annexes
              </a>
            </li>
          </div>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="btn nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="#">Tourism<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="{{URL::asset('docs/SP TMP.pdf')}}" target="_blank">Tourism Masterplan</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="cultural_properties">Imporant Cultural Properties</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="our7lakes">Our Seven Lakes</a></li></div>
          <div class="dropdown-item"><li><a class="text-body btn btn-block" href="gallery">Gallery</a></li></div>
        </ul>
      </li>

      <li class='nav-item'>
        <a class="btn nav-link mx-2" href="{{URL::asset('docs/SPC CC V 04.24.19.pdf')}}" target="_blank"  >
          Citizen's Charter
        </a>
      </li>
      
    </ul>
    <div style="width: 25%; margin: auto">
      <iframe class="justify-content-center" style="color:#f9f9f9;" style="pointer-events: none;" src="http://oras.pagasa.dost.gov.ph/time_display/widget.php" frameborder="0" width="190" height="68" allowTransparency="true" scrolling="no" style="text-align: center" disabled></iframe>
    </div>
  </div>
</nav>
