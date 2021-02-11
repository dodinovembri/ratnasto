<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>Login | Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Ratna Store Administrator" name="description" />
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">

        <!-- For theme 1 -->
        <link href="{{ asset('backend/auth/theme1/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/auth/theme1/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/auth/theme1/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    @yield('content')

        <!-- For theme 1 -->
        <script src="{{ asset('backend/auth/theme1/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/auth/theme1/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/auth/theme1/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/auth/theme1/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/auth/theme1/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend/auth/theme1/js/app.js') }}"></script>

    </body>

</html>
