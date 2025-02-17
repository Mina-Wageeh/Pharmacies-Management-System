<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('dashboard.index')}}" class="nav-link">Dashboard</a>
        </li>
    </ul>


    <ul class="navbar-nav ml-auto">
        <!-- Full Screen-->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        @if(auth()->check())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{auth()->user()->name}}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="logout-btn nav-link" href="{{route('logout')}}">Logout</a>
                </div>
            </li>

        @else
            <li class="nav-item">
                <a class="login-btn nav-link" href="{{route('login')}}">Login</a>
            </li>
        @endif
    </ul>
</nav>
