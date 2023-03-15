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
    <link href="{{ asset('assets/libs/admin-resources/rwd-table/rwd-table.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/%40fullcalendar/core/main.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/%40fullcalendar/daygrid/main.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/%40fullcalendar/bootstrap/main.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/%40fullcalendar/timegrid/main.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive Table js -->
        <script src="{{asset('assets/libs/admin-resources/rwd-table/rwd-table.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{asset('assets/js/pages/table-responsive.init.js')}}"></script>
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}" defer></script>
    

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

<script src="{{ asset('assets/js/app.js') }}" defer></script>
    <!-- plugin js -->
    <script src="{{ asset('assets/libs/moment/min/moment.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/jquery-ui-dist/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/%40fullcalendar/core/main.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/%40fullcalendar/bootstrap/main.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/%40fullcalendar/daygrid/main.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/%40fullcalendar/timegrid/main.min.js') }}" defer></script>
    <script src="{{ asset('assets/libs/%40fullcalendar/interaction/main.min.js') }}" defer></script>

    <!-- Calendar init -->
    <script src="{{ asset('assets/js/pages/calendars-full.init.js')}}" defer></script>

     <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>  

</body>
</html>
