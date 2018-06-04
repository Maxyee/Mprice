<!DOCTYPE HTML>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <title>Mprice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('color/default.css') }}" rel="stylesheet"/>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"/>
    
    <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="color/default.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="img/favicon.ico"/>
</head>
<body>
<!-- navbar -->
<div class="navbar-wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <!-- Responsive navbar -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
                <h1 class="brand"><a href="#">Mprice</a></h1>
                <!-- navigation -->
                <nav class="pull-right nav-collapse collapse">
                    @if (Route::has('login'))
                        <ul id="menu-main" class="nav">
                            @if (Auth::check())
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            @else
                            <li><a href="{{ route('farmer.login') }}">Farmer Login</a></li>
                            <li><a href="{{ route('farmer.register') }}">Farmer Register</a></li>
                            <!--
                            <li><a href="{{ url('/login') }}">User Login</a></li>
                            <li><a href="{{ url('/register') }}">User Register</a></li>
                            -->
                            <li><a href="{{ route('supplier.login') }}">Supplier Login</a></li>
                            <li><a href="{{ route('supplier.register') }}">Supplier Register</a></li>
                            <!--
                            <li><a href="{{ route('admin.login') }}">Admin Login</a></li>
                            -->
                            @endif
                        </ul>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header area -->
<div id="header-wrapper" class="header-slider">
    <header class="clearfix">
        <div class="logo">
            <img src="{{asset('img/ekrishok_logo.png')}}" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="main-flexslider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <p class="home-slide-content">
                                    <strong>Latest Price</strong> in Agriculture
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                    Eat and drink <strong>With Low Price</strong>
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                    We love <strong>farmers Hard Work</strong>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </header>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
                <ul class="social-networks">
                    <li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
                    <li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
                    <li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
                    <li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
                </ul>
                <p class="copyright">
                    Copyright © ২০১৭ mPrice | All Rights Reserved. Developed by ULAB. Powered by BIID
                </p>
            </div>
        </div>
    </div>
    <!-- ./container -->
</footer>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>


<script src="js/jquery.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/inview.js"></script>
<script src="js/animate.js"></script>
<script src="js/validate.js"></script>
<script src="js/custom.js"></script>


</body>
</html>
