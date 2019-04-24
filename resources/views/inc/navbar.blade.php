<nav class="navbar navbar-expand-sm fixed-top" style="height:65px;">
  <img src="{{URL::asset('image/spc-logo.png')}}" alt="Logo" height="50px" width="50px" >
  <div class="text-center px-3">
    San Pablo City
      <p class="h6 text-nowrap" style="font-size:8px;">
          Official Website of the City
          Government of San Pablo
      </p>
  </div>
  <div class='collapse navbar-collapse' id='collapseNav'>
  <div>
    <ul class="navbar-nav nav-justified ml-3">
      <li class="nav-item">
        <a class="btn nav-link mx-2" href="/">
          Home
        </a>

        <li class="nav-item dropdown">
          <a class="btn nav-link dropdown-toggle mx-2 " data-toggle="dropdown" href="#">
            The City<span class="caret"></span>
          </a>
            <ul class="dropdown-menu">
              <div class="dropdown-item ">
                <li>
                  <a class="text-body btn-block"href="mission">
                    MIssion & Vision
                  </a>
                </li>
              </div>
              <div class="dropdown-item ">
                <li>
                  <a class="text-body btn-block"href="location">
                    Location & Topology
                  </a>
                </li>
              </div>
              <div class="dropdown-item">
                <li>
                  <a class="text-body btn-block" href="history">
                    History
                  </a>
                </li>
              </div>
              <div class="dropdown-item"><li><a class="text-body btn-block" href="sanpablenos">San Pableños</a></li></div>
              <div class="dropdown-item"><li><a class="text-body btn-block" href="barangay">Barangays</a></li></div>
              <div class="dropdown-item"><li><a class="text-body btn-block" href="hymn">Hymn</a></li></div>
            </ul>
        </li>

      </li>
      <li class="nav-item dropdown">
        <a class="btn nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="#">
          Government<span class="caret"></span>
        </a>
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
{{--  href="{{URL::asset('docs/SP TMP.pdf')}}" target="_blank" --}}
        <li class="nav-item dropdown">
          <a class="btn nav-link active dropdown-toggle mx-2" data-toggle="dropdown" href="#">
            Economy<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <div class="dropdown-item">
              <li class='dropright'>
                <a class="text-body btn-block dropdown-toggle" data-toggle='dropdown' href='#'>Comprehensive Land Use Program<span class="caret"></span>
                </a>
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

        <li class="nav-item dropdown">
          <a class="btn nav-link dropdown-toggle mx-2" data-toggle="dropdown" href="#">
            Tourism<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <div class="dropdown-item"><li><a class="text-body btn-block" href="{{URL::asset('docs/SP TMP.pdf')}}" target="_blank">Tourism Masterplan</a></li></div>

            <div class="dropdown-item"><li><a class="text-body btn-block" href="landmarks">Landmarks</a></li></div>
            <div class="dropdown-item"><li><a class="text-body btn-block" href="gallery">Gallery</a></li></div>
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
  </div>
</nav>
