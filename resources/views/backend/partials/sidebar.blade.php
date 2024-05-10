<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.dashboard')}}">

        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <div class="accordion" id="accordionExample">
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('category.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('category.lists')}}">Show List</a></li>
          </ul>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-2" aria-expanded="false" aria-controls="ui-basic-2">

          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic-2">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('product.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('product.list')}}">Show List</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-3" aria-expanded="false" aria-controls="ui-basic-3">

          <span class="menu-title">Banner</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic-3">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('banner.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('banner.list')}}">Show List</a></li>
          </ul>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">


          <span class="menu-title">User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic4">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('user.details')}}">Show List</a></li>
          </ul>
        </div>
      </li>


      <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-3" aria-expanded="false" aria-controls="ui-basic-3">

        <span class="menu-title">Orders</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic-3">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('order.create')}}">Create</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('order.details')}}">Show Details</a></li>
        </ul>
      </div>
    </li> -->


      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">

          <span class="menu-title">Reports</span>
        </a>
      </li>

      <!-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li> -->


      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="{{route('admin.logout')}}" class="nav-link">
            <span class="menu-title">Log Out</span></a>
        </div>
      </li>
    </div>

  </ul>
</nav>