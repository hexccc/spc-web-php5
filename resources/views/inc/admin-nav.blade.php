
<div class="row" id="app">
    <div class="sidebar-wrapper">
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
                            <a href="/newseditor">News Editor</a>
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
                  <button type="button" class="btn btn-info">
                    <a href="" data-toggle="modal"  data-toggle="modal" data-target="#modalLoginForm">Admin Login</a>
                  </button>

            </div>
        </nav>
    </div>


    {{-- LOGIN MODAL --}}
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-user-shield prefix grey-text"></i>
              <input type="text" id="defaultForm-email" class="form-control validate">
              <label data-error="wrong" data-success="right" for="defaultForm-email">Admin User</label>
            </div>
            <div class="md-form mb-4">
              <i class="fas fa-user-lock prefix grey-text"></i>
              <input type="password" id="defaultForm-pass" class="form-control validate">
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
            </div>

          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-default">Login</button>
          </div>
        </div>
      </div>
    </div>



@include('style-admin-nav')
