
<div class="row" id="app">
    <div class="sidebar-wrapper">
      <div class="wrapper col-sm pr-0 ">


        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="pylon-admin">Admin Panel</a></h3>
            </div>
            <ul class="list-unstyled components">

                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/newseditor">News Editor</a>
                        </li>
                        <li>
                            <a href="/services">Services</a>
                        </li>
                        <li>
                            <a href="eventsandannouncements">Events and Announcements</a>
                        </li>
                        <li>
                            <a href="/holidays">Holidays</a>
                        </li>
                        <li>
                            <a href="/engineeringform">Engineering and Building Form</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#missionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mission and Vision</a>
                    <ul class="collapse list-unstyled" id="missionSubmenu">
                        <li>
                            <a href="#">Mission</a>
                        </li>
                        <li>
                            <a href="#">VIsion</a>
                        </li>
                        <li>
                            <a href="#">Strategic Directions</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Systems</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">BPLS</a>
                        </li>
                        <li>
                            <a href="#">Market</a>
                        </li>
                        {{-- <li>
                            <a href="#">Page 3</a>
                        </li> --}}
                    </ul>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Accounts</a>
                </li>
            </ul>
        </nav>
    </div>
  </div>

  <div class="col-sm px-0">
    <div id="content">
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid pl-0">
                {{-- <button type="btn btn-dark" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left" title="Sidebar"></i>
                    <span></span> --}}

                </button>
                <a href="/signout"  type="button" class="btn btn-dark">Sign Out</a>
            
            </div>
        </nav>
    </div>




<style>
    
</style>

@include('style-admin-nav')
