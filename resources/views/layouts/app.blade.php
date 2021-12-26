<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - @yield('pageTitle')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/waves/dist/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/themes/select2-bootstrap/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/themes/sweetalert2-bootstrap/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/css/main.min.css') }}">
    @yield('meta-link')
</head>
<body id="page-top" class="@yield('bg-body')">
    @yield('content');
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/plugins/jquery-waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/plugins/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/waves/dist/waves.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/themes/select2-bootstrap/select2-bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/themes/sweetalert2-bootstrap/bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('lib/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('lib/js/main.min.js') }}"></script>
    @yield('script')
</body>
</html>
