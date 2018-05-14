 <header class="main-header">
        <!-- Logo -->

        <a href="{{ route('admin.home')}}" class="logo">  <img src="{{ asset('admin/dist/img/gym.png') }}" height="50"></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('admin/dist/img/logo.png') }}" height="160" width="160" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Furkatov Mukhammadmirzo
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
