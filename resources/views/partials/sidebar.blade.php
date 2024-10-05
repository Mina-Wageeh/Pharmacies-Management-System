<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link d-flex justify-content-center">
{{--      <img src="dist/img/PharmacyLogo.gif" alt="Pharmacy Logo" class="brand-image img-circle elevation-3" style="opacity: 0.9;">--}}
      <span class="brand-text font-weight-light align-middle">M - Pharmacies</span>
    </a>
    <div class="sidebar" style="height: 84vh;border-bottom:solid thin rgb(96, 96, 96);">
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column gap-1" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item sidebar-list">
            <a href="" class="nav-link">
                <img src="dist/img/icons/Pharmacies-icon.png" class="nav-icon">
                <p>Branches</p>
            </a>
          </li>

          <li class="nav-item sidebar-list">
            <a href="" class="nav-link">
                <img src="dist/img/icons/Doctors-icon.png" class="nav-icon">
                <p>Doctors</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link sidebar-list">
              <img src="dist/img/icons/sidebar/m.png" class="nav-icon">
              <p>Clients</p>
            </a>
          </li>
          <li class="nav-item sidebar-list">
            <a href="" class="nav-link">
                <img src="dist/img/icons/Medicines-icon.png" class="nav-icon">
              <p>Medicines</p>
            </a>
          </li>

          <li class="nav-item sidebar-list">
            <a href="" class="nav-link">
                <img src="dist/img/icons/Orders-icon.png" class="nav-icon">
              <p>
                Orders
              </p>
            </a>
          </li>

          <li class="nav-item sidebar-list">
            <a href="" class="nav-link">
                <img src="dist/img/icons/Revenue-icon.png" class="nav-icon">
              <p>Revenue</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!--Logout-->
    <div class="d-flex justify-content-center w-100 align-items-center">
        <a class="nav-link d-flex justify-content-center align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
{{--            <img src="/dist/img/icons/Logout-icon.png" class="nav-icon" width="30px">--}}
            <span class="">Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</aside>
