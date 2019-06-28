
<div class="row">
  <div>
    <div class="wrapper col-sm pr-0 ">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Panel</h3>
            </div>
            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Events and Announcements</a>
                        </li>
                        <li>
                            <a href="#">Holidays</a>
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
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
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
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Sidebar</span>
                </button>

            </div>
        </nav>
    </div>
  </div>
</div>

@include('style-admin-nav')
