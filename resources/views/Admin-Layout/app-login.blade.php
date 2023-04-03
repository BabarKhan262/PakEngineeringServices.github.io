<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- index.html  29 Nov 2019 03:27:29 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Construction & Building HTML Template">
    <meta name="author" content="AlexaTheme">
    <title>Indico | Construction & Building HTML Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/elegant-line-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/elegant-font-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">

    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">

    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/venobox/venobox.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div>
    <header class="header">
        <div class="primary-header">
            <div class="container">
                <div class="primary-header-inner">
                </div>
            </div>
        </div>
    </header>

    @yield('section')

    <section class="widget-section padding">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
    <footer class="footer-section align-center">
        <div class="container">
            <p><a href="templateshub.net">Templates Hub</a></p>
        </div>
    </footer>
    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

    @yield('script')

</body>

</html>