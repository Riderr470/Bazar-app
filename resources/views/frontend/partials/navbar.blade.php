<!-- frontend -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="{{route('home')}}"><img src="{{asset('images/svg/logo-no-background.svg')}}" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="{{route('home')}}"><img src="{{asset('images/svg/logo-color.svg')}}" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <div class="search-field d-block">
      <form class="d-flex align-items-center h-100" action="#" method="post">
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <i class="input-group-text border-0 mdi mdi-magnify"></i>
          </div>
          <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
        </div>
      </form>
    </div>

    <ul class="navbar-nav navbar-nav-right">
      @auth()
      <li class="nav-item nav-profile dropdown" style="margin-right: 100px;">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img">
            <img src="{{ asset('app/users/' . auth()->user()->image) }}" alt="image">
          </div>
          <div class="nav-profile-text">
            <p class="mb-1 text-black">{{auth()->user()->name}}</p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
          <div class="p-3 text-center bg-primary">
            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('app/users/' . auth()->user()->image) }}" alt="">
          </div>
          <div class="p-2">
            <h5 class="dropdown-header text-uppercase ps-2 text-dark">User Options</h5>
            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
              <span>Inbox</span>
              <span class="p-0">
                <span class="badge badge-primary">3</span>
                <i class="mdi mdi-email-open-outline ms-1"></i>
              </span>
            </a>
            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
              <span>Profile</span>
              <span class="p-0">
                <span class="badge badge-success">1</span>
                <i class="mdi mdi-account-outline ms-1"></i>
              </span>
            </a>
            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span>Settings</span>
              <i class="mdi mdi-settings"></i>
            </a>
            <div role="separator" class="dropdown-divider"></div>
            <h5 class="dropdown-header text-uppercase  ps-2 text-dark mt-2">Actions</h5>
            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
              <span>Lock Account</span>
              <i class="mdi mdi-lock ms-1"></i>
            </a>
            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{route('logout')}}">
              <span>Log Out</span>
              <i class="mdi mdi-logout ms-1"></i>
            </a>
          </div>
        </div>
      </li>



      @endauth

      @guest()
      <li class="nav-item dropdown">
        <a class="btn btn-dark btn-sm" href="{{route('register')}}">Register</a>
      </li>

      <li class="nav-item dropdown">
        <span class="mx-2"></span>
        <a class="btn btn-dark btn-sm" href="{{route('login')}}">Login</a>
      </li>
      @endguest




    </ul>

    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>