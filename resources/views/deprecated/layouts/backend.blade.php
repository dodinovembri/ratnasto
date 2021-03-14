<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <title>Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Administrator" name="description" />
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

        <!-- For theme 1 -->
        <link href="{{ asset('backend/theme1/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/theme1/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/theme1/lib/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('backend/theme1/assets/css/cassie.css') }}">

    </head>
    <body>
        
        @yield('content')

    <!-- For theme 1 -->
    <script src="{{ asset('backend/theme1/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/jquery.flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/jquery.flot/jquery.flot.threshold.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/theme1/lib/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('backend/theme1/assets/js/cassie.js') }}"></script>
    <script src="{{ asset('backend/theme1/assets/js/flot.sampledata.js') }}"></script>
    <script src="{{ asset('backend/theme1/assets/js/vmap.sampledata.js') }}"></script>
    <script src="{{ asset('backend/theme1/assets/js/dashboard-one.js') }}"></script>

  </body>
</html>
