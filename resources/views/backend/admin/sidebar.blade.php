<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{url('/dashboard')}}"><img src="assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
              <span>Gold Member</span>
            </div>
          </div>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('users')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Food Menu</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('foodmenu')}}"">Add new Menu</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('showmenu')}}">Show All Menu</a></li>

          </ul>
        </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showreservation')}}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Reservation</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Chefs</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic1">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('addchef')}}">Add new Chefs</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('showchef')}}">Show All Chefs</a></li>

          </ul>
        </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/orders')}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>




    </ul>
  </nav>
