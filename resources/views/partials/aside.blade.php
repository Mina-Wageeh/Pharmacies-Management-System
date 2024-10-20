<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard.index')}}" class="brand-link">
            <img src="{{asset('dist/img/icons/aside/letter-m.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">M - Pharmacies</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{route('branch.index')}}" class="nav-link">
                        <div class="d-flex align-content-center">
                            <img src="{{asset('dist/img/icons/aside/right-arrow-2.png')}}" class="nav-icon aside-icon mr-3">
                            <p>Branches
{{--                               <span class="badge badge-info right">2</span>--}}
                            </p>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('doctor.index')}}" class="nav-link">
                        <div class="d-flex align-content-center">
                            <img src="{{asset('dist/img/icons/aside/right-arrow-2.png')}}" class="nav-icon aside-icon mr-3">
                            <p>Doctors</p>
                        </div>
                    </a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('medicine.index')}}" class="nav-link">--}}
{{--                        <div class="d-flex align-content-center align-items-center">--}}
{{--                            <img src="{{asset('dist/img/icons/aside/right-arrow-2.png')}}" class="nav-icon aside-icon mr-3">--}}
{{--                            <p>Categories</p>--}}
{{--                            <i class="right fas fa-angle-left ml-5"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="" class="nav-link">--}}
{{--                                <img src="{{asset('dist/img/icons/aside/blue-arrow.png')}}" class="nav-icon aside-icon mr-3">--}}
{{--                                <p>Antibiotic</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link">
                        <div class="d-flex align-content-center">
                            <img src="{{asset('dist/img/icons/aside/right-arrow-2.png')}}" class="nav-icon aside-icon mr-3">
                            <p>Categories</p>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('medicine.index')}}" class="nav-link">
                        <div class="d-flex align-content-center">
                            <img src="{{asset('dist/img/icons/aside/right-arrow-2.png')}}" class="nav-icon aside-icon mr-3">
                            <p>Medicines</p>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('inv_medicine.index')}}" class="nav-link">
                        <div class="d-flex align-content-center">
                            <img src="{{asset('dist/img/icons/aside/right-arrow-2.png')}}" class="nav-icon aside-icon mr-3">
                            <p>Inventory</p>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('order.index')}}" class="nav-link">
                        <div class="d-flex align-content-center">
                            <img src="{{asset('dist/img/icons/aside/right-arrow-2.png')}}" class="nav-icon aside-icon mr-3">
                            <p>Orders</p>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



{{--<div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--    <div class="image">--}}
{{--        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
{{--    </div>--}}
{{--    <div class="info">--}}
{{--        <a href="#" class="d-block">Alexander Pierce</a>--}}
{{--    </div>--}}
{{--</div>--}}
