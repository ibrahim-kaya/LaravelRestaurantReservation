<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{ $config['title'] }} ~ {{ $config['store_name'] }}</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script"
          rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css"/>
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    @yield('styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body>

<!-- Header -->
<header id="header">

    <!-- Top nav -->
    <div id="top-nav">
        <div class="container">

            <!-- logo -->
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ $config['site_logo'] }}" alt="logo"></a>
            </div>
            <!-- logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- Mobile toggle -->

            <!-- social links -->
            <ul class="social-nav">
                @if(isset($config['facebook']) && $config['facebook'])
                    <li><a href="{{ $config['facebook'] }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                @endif
                @if(isset($config['twitter']) && $config['twitter'])
                    <li><a href="{{ $config['twitter'] }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                @endif
                @if(isset($config['instagram']) && $config['instagram'])
                    <li><a href="{{ $config['instagram'] }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                @endif
                @if(isset($config['youtube']) && $config['youtube'])
                    <li><a href="{{ $config['youtube'] }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                @endif
            </ul>
            <!-- /social links -->

        </div>
    </div>
    <!-- /Top nav -->

    <!-- Bottom nav -->
    <div id="bottom-nav">
        <div class="container">
            <nav id="nav">

                <!-- nav -->
                <ul class="main-nav nav navbar-nav">
                    <li><a href="index.html">Anasayfa</a></li>
                    <li><a href="index.html#about">Hakkımızda</a></li>
                    @if($config['show_menu'])<li><a href="index.html#menu">Menü</a></li>@endif
                    @if($config['show_reservation'])<li><a href="index.html#reservation">Rezervasyon</a></li>@endif
                    <!-- <li><a href="index.html#gallery">Gallery</a></li> -->
                    @if($config['show_blog'])<li><a href="index.html#events">Blog</a></li>@endif
                    <li><a href="index.html#contact">İletişim</a></li>
                </ul>
                <!-- /nav -->

                @if($config['show_reservation'])
                    <!-- button nav -->
                    <ul class="cta-nav">
                        <li><a href="index.html#reservation" class="main-button">Rezervasyon</a></li>
                    </ul>
                    <!-- button nav -->
                @endif

                <!-- contact nav -->
                <ul class="contact-nav nav navbar-nav">
                    <li><a href="tel:{{ $config['tel_no'] }}"><i class="fa fa-phone"></i> {{ $config['tel_no'] }}</a>
                    </li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 3685 Granville Lane</a></li>
                </ul>
                <!-- contact nav -->

            </nav>
        </div>
    </div>
    <!-- /Bottom nav -->


</header>
<!-- /Header -->

@yield('content')

<!-- Footer -->
<footer id="footer">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- copyright -->
            <div class="col-md-6">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <span class="copyright">Copyright @2018 All rights reserved | This template is made with <i
                        class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></span>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
            <!-- /copyright -->

            <!-- footer nav -->
            <div class="col-md-6">
                <nav class="footer-nav">
                    <a href="index.html">Home</a>
                    <a href="index.html#about">About</a>
                    <a href="index.html#menu">Menu</a>
                    <a href="index.html#reservation">Reservation</a>
                    <a href="index.html#events">Events</a>
                    <a href="index.html#contact">Contact</a>
                </nav>
            </div>
            <!-- /footer nav -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</footer>
<!-- /Footer -->

<!-- Preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- /Preloader -->

@vite('resources/js/app.js')

<!-- jQuery Plugins -->
@yield('scripts')


</body>
</html>
