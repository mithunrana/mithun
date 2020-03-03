  <header class="main-header">
    <!-- Logo -->
    <a href="{{asset('')}}admin/admin-panel" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          @php
          $About = \App\AboutProfile::first();
          @endphp
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img  @isset($About->profileImage1) src="{{asset('')}}{{$About->profileImage1->imageurl}}"  @endisset src="{{asset('')}}Images/default-image.png" class="user-image" alt="User Image">
              <span class="hidden-xs"> @isset($About->Name) {{$About->Name}} @endisset</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img @isset($About->profileImage1) src="{{asset('')}}{{$About->profileImage1->imageurl}}" @endisset src="{{asset('')}}Images/default-image.png" class="img-circle" alt="User Image">
                <p>
                  @isset($About->Designation) {{$About->Designation}} @endisset
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{url('admin/profile-update')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a class="dropdown-item btn btn-danger"  href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>

            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>