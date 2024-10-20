<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Pharmacy</title>
    @include('layouts.src.css-links')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        {{--Header--}}
        @include('partials.header')
        {{--Header--}}

        {{--Aside--}}
        @include('partials.aside')
        {{--Aside--}}

        {{--Main Content--}}
        <div class="content-wrapper">
            <div class="content-header">
                 @yield('content')
            </div>
        </div>
        {{--Main Content--}}

        {{--Footer--}}
        @include('partials.footer')
        {{--Footer--}}
    </div>
    @include('layouts.src.js-scripts')
    @yield('scripts')
</body>
</html>

