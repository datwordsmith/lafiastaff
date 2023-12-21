<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/tincad_favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->

    <link href="{{ asset('admin/dist/css/style.css')}}" rel="stylesheet">

    @livewireStyles
</head>
<body>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        @include('layouts.inc.admin.header')
        @include('layouts.inc.admin.sidebar')


        <div class="page-wrapper">

            @include('layouts.inc.admin.breadcrumb')

            <div class="container-fluid">

                @yield('content')

            </div>
            @include('layouts.inc.admin.footer')
        </div>
    </div>




    <script src="{{ asset ('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset ('admin/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset ('admin/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset ('admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset ('admin/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset ('admin/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset ('admin/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>
    @livewireScripts
</body>
</html>
