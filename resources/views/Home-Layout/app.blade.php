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
                    @if(isset($logo))
                    <div class="header-logo">
                        <a href="#"><img src="{{ asset($logo->logo) }}" alt="Indico"></a>
                    </div>
                    @endif
                    <div class="header-menu-wrap">
                        <ul class="dl-menu">
                            <li><a href="/">Home</a>
                            </li>
                            <li><a href="/about-us">About</a>
                            </li>
                            <li><a href="/allServices">Services</a>
                            </li>
                            <li><a href="/allProjects">Projcets</a>
                            </li>
                            <li><a href="/team">Our Team</a>
                            </li>
                            <li><a href="/contact-us">Contact</a></li>
                        </ul>
                    </div>
                    <!-- <div class="header-right">
                        <a class="menu-btn" href="#">Request a Quote</a>

                        <div class="mobile-menu-icon">
                            <div class="burger-menu">
                                <div class="line-menu line-half first-line"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu line-half last-line"></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </header>

    @yield('section')

    <section class="widget-section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="widget-content">
                        <a href="#"><img src="img/logo-light.png" alt="brand"></a>
                        <p>Building your own home is about desire, fantasy. But it’s achievable anyone can do it.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 sm-padding">
                    <div class="widget-content">
                        <h4>Company</h4>
                        <ul class="widget-links">
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/allServices">Our Services</a></li>
                            <li><a href="/allProjects">Projects</a></li>
                            <li><a href="/team">Our Team</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                @if(isset($contacts))
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="widget-content">
                        <h4>Headquaters</h4>
                        <p>{{$contacts['addres']}}</p>
                        <span><a href="#">{{$contacts['email']}}</a></span>
                        <span>{{$contacts['cell_num']}}</span>
                    </div>
                </div>
                @endif
                <div class="col-lg-4 col-sm-6 sm-padding">
                    <div class="widget-content">
                        <h4>Newslatter Subscription</h4>
                        <p>Subscribe and get 10% off from our <br>architecture company.</p>
                        <div class="subscribe-box clearfix">
                            <div class="subscribe-form-wrap">
                                <form action="#" class="subscribe-form">
                                    <input type="email" name="email" id="subs-email" class="form-input" placeholder="Enter Your Email Address...">
                                    <button type="submit" class="submit-btn">Subscribe</button>
                                    <div id="subscribe-result">
                                        <p class="subscription-success"></p>
                                        <p class="subscription-error"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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