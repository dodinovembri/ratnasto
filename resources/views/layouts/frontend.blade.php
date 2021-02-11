<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Ratna Store</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Ratna Store Ecommerce">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/theme1/images/icons/favicon.png') }}">

    <script>
        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>



    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/theme1/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/theme1/vendor/animate/animate.min.css') }}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/theme1/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/theme1/vendor/owl-carousel/owl.carousel.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/theme1/css/main.min.css') }}">
</head>

<body class="home">

    @yield('content')

    <!-- Plugins JS File -->
    <script src="{{ asset('frontend/theme1/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/theme1/vendor/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/theme1/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/theme1/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('frontend/theme1/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('frontend/theme1/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('frontend/theme1/js/main.js') }}"></script>
</body>

</html>
</body>
</html>
