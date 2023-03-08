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
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <!-- Scripts -->
    @vite([
        // 'resources/sass/app.scss', 
        'resources/js/app.js'
        ])
</head>
<body data-sidebar="dark" data-layout-mode="light">
    {{-- <main class="py-4"> --}}
<div id="layout-wrapper">
    @include('layouts.admin.navBar')
    @include('layouts.admin.leftSideBar')
        @yield('content')
    {{-- </main> --}}
</div>

@include('layouts.admin.rightSideBar')

</body>
</html>
