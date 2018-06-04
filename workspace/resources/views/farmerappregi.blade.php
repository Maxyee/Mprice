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
    <link href="css/main.css" rel="stylesheet" />
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
                <!--
                <nav class="pull-right nav-collapse collapse">
                    @if (Route::has('login'))
                        <ul id="menu-main" class="nav">
                            @if (Auth::check())
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            @else
                            <li><a href="{{ route('farmer.login') }}">Farmer Login</a></li>
                            <li><a href="{{ route('farmer.register') }}">Supplier Login</a></li>
                            @endif
                        </ul>
                    @endif
                </nav>
                -->
            </div>
        </div>
    </div>
</div>
<!-- Header area -->
<div id="header-wrapper" class="header-slider">
    <header class="clearfix">
        <div class="logo">
            <img src="{{asset('img/ekrishok_logo.png')}}" alt="" style="height:150px;margin-left:60px;"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <!--<div id="main-flexslider" class="flexslider-->
                        @if (Route::has('login'))
                        <ul id="menu-main" class="nav">
                            @if (Auth::check())
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            @else
                            <li><a href="{{ route('farmer.register') }}">Farmer Registration</a></li>
                            <li><a href="{{ route('supplier.register') }}">Supplier Registration</a></li>
                            @endif
                        </ul>
                    @endif
                   <!-- </div> -->
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </header>
</div>

<div class="help">
    <div class="container">
                <p><h3>Help</h3></p><br>
                <div class="row container">
                    <div class="col-md-3 pull-left">            
                        <ul>
                            <li><a href="http://wp.ekrishok.com/?page_id=962">ই-কৃষক কি ?</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=277">ঠিকানা ও অবস্থান</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=210">ফিডব্যাক</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=382">দায়মুক্তি</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=380">সংরক্ষিত নীতিমালা</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">          
                        <ul>
                            <li><a href="http://wp.ekrishok.com/?page_id=1970">Zero Cost EAS Model</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=292">eXtension.org.bd</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=317">তথ্য ভান্ডার</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=288">ফার্মবুক</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=223">মার্কেট লিংকেজ</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">          
                        <ul>
                            <li><a href="http://wp.ekrishok.com/?page_id=342">কৃষি পরামর্শ আর্কাইভ</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=364">পার্টনার</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=366">ফটো এলবাম</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=368">ভিডিও ক্লিপস</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=315">বাতিঘর</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">          
                        <ul>
                            <li><a href="http://wp.ekrishok.com/?page_id=339">Success Story</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=644">ই-নিউজলেটার সাবস্ক্রিপশন</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=982">প্রধান প্রধান খবর</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=1199">এস এম ই</a></li>
                            <li><a href="http://wp.ekrishok.com/?page_id=540">কৃষি বিষয়ক লিংক</a></li>
                        </ul>
                    </div>  
                </div>                              

    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="col-md-6 pull-left">
            Copyright &copy; ২০১৭ mPrice | All Rights Reserved.
        </div>  
        <div class="col-md-6 pull-right">
            <p>Developed by <a href="https://ulab.edu.bd/">ULAB</a>. Powered by <a href="http://www.biid.org.bd/">BIID</a></p>
        </div>
    </div>
</div>

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
