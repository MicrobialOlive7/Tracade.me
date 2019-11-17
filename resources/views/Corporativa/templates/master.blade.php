<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <title>Tracade.Me</title>

    <link rel="icon" href="{{asset('img/fav-icon.ico')}}" type="image/x-icon" />

    <meta name="description" content="--">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css-include -->

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- themify-icon.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <!-- video.min.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/video.min.css')}}">
    <!-- menu style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- responsive.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">

</head>

<body>
<!-- Start of Header
    ============================================= -->
<header>
    <div id="main-menu"  class="main-menu-container tbg navbar-fixed-top">
        <div  class="main-menu">

            <div class="container">
                <div class="row">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Menu</span>
                                    <i class="ti-menu"></i>
                                </button><!-- /.navbar-toggle collapsed -->
                                <a class="navbar-brand text-uppercase" href="{{ url('') }}"><img src="../public/img/logo/logo.png" alt="logo"></a>
                            </div><!-- /.navbar-header -->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <nav class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                <ul id="main-nav" class="nav navbar-nav">
                                    <li><a href="{{ url('Nosotros') }}">Nosotros</a></li>
                                    <li><a href="{{ url('Precios') }}">Precios</a></li>
                                    <li><a href="{{ url('Contacto') }}">Contacto</a></li>
                                    <li><a href="{{ url('login') }}">Iniciar Sesión</a></li>
                                </ul><!-- /#main-nav -->
                            </nav><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </div><!-- /.navbar navbar-default -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.full-main-menu -->
    </div><!-- #main-menu -->
    <!-- Main Menu end -->
</header> <!-- .cd-auto-hide-header -->
<!-- End of Header
    ============================================= -->


@yield('content')

<!-- Start of footer section
		============================================= -->
<footer>
    <section id="footer-area" class="footer-area-section">
        <div class="container">
            <div class="row section-content">
                <div class="footer-area-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-content">
                                <span class="right deep-black">2017 Landy. All right reserved</span>
                                <div class="footer-address mt20">
											<span>457 Shantibag, Green Road
												Philadelphia, PH USA 17512
												+1 437 800 2078
											</span>
                                </div>
                                <div class="footer-social ul-li mt20">
                                    <ul class="footer-social-list">
                                        <li><a href="#"><span class="ti-facebook"></span></a></li>
                                        <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                        <li><a href="#"><span class="ti-google"></span></a></li>
                                        <li><a href="#"><span class="ti-vimeo-alt"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- //col-sm-4 -->

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-service-list">
                                <div class="footer-widget pb20">
                                    <h2 class="widgettile deep-black">Information</h2>
                                </div>
                                <div class="service-list ul-li ul-li-block">
                                    <ul class="service-list-item">
                                        <li><a href="#">Terms & Condision</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Download</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- //1st service -->
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div class="footer-service-list">
                                <div class="footer-widget pb20">
                                    <h2 class="widgettile deep-black">Support</h2>
                                </div>
                                <div class="service-list ul-li ul-li-block">
                                    <ul class="service-list-item">
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- //col-sm-4 -->

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget pb20">
                                <h2 class="widgettile deep-black">Subscribe</h2>
                            </div>
                            <span>Don’t miss out our every updates and news!</span>
                            <div class="newsletter">
                                <form action="#" method="get">
                                    <div class="newsletter-email">
                                        <input type="email" class="" >
                                        <button type="submit" value="Submit"><span class="orange-gred ti-arrow-right"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!--  //row -->
            </div><!--  //footer-area-content -->
        </div><!--  //container -->
    </section>
</footer>
<!-- End of footer section
    ============================================= -->


<!--  Js Library -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- Include  for bootstrap -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Include Owl-carousel -->
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Include OnePagenNav -->
<!-- <script type="text/javascript" src="{{asset('js/OnePagenNav.js')}}"></script> -->
<!-- Include jquery.magnific-popup.min.js-->
<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Include script.js-->
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

</body>
</html>






