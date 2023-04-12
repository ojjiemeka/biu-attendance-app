<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/app.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"> --}}
    {{-- @stack('scripts') --}}
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <!-- Scripts -->
    {{-- @vite([
        'resources/sass/app.scss', 
        'resources/js/app.js'
        ]) --}}
</head>
<body data-sidebar="dark" data-layout-mode="light">
    {{-- <main class="py-4"> --}}
<div id="layout-wrapper">
    @include('layouts.admin.navBar')
    @include('layouts.admin.leftSideBar')
        @yield('content')
    {{-- </main> --}}
</div>

{{-- @include('layouts.admin.rightSideBar') --}}

<script src="{{asset('assets/js/app.js') }}" ></script>
<script src="{{asset('assets/libs/jquery-ui-dist/jquery-ui.min.js')}}"></script>


<!-- plugin js -->
   
</body>
</html>
