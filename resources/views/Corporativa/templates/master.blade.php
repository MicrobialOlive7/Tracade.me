<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('img/fav-icon.ico')}}" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tracade.Me - Seguimiento de Habilidades</title>

    <!-- Icon css link -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/icofont.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{asset('vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/animate-css/animate.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('vendors/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="90">


<div id="preloader">
    <div id="preloader_spinner">
        <div class="pre_inner">
            <div class="dot dot-1"></div>
            <div class="dot dot-2"></div>
            <div class="dot dot-3"></div>
        </div>
    </div>
</div>

<!--================Header Area =================-->
<header class="dash_tp_menu_area">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('') }}"><img src="{{asset('img/dash-logo.png')}}" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('Nosotros') }}">Nosotros</a></li>
                <li><a href="{{ url('Precios') }}">Precio</a></li>
                <li><a href="{{ url('Contacto') }}">Contacto</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="get_free_btn"><a href="{{route('login')}}">Iniciar Sesión</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</header>
<!--================End Header Area =================-->

@yield('content')

<!--================Footer Area =================-->
<footer class="pink_footer">
    <div class="pink_footer_wedget_area">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-offset-1 col-xs-6">
                    <aside class="f_widget p_menu_widget">
                        <div class="p_f_w_title">
                            <h3>Enlaces</h3>
                        </div>
                        <ul>
                            <li><a href="{{ url('Nosotros') }}">Nosotros</a></li>
                            <li><a href="{{ url('Precios') }}">Precio</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-6">
                    <aside class="f_widget p_support_widget">
                        <div class="p_f_w_title">
                            <h3>Soporte</h3>
                        </div>
                        <ul>
                            <li><a href="{{ url('login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ url('Contacto') }}">Contacto</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-md-offset-1 col-xs-6">
                    <aside class="f_widget p_contact_widget">
                        <div class="p_f_w_title">
                            <h3>Información de Contacto</h3>
                        </div>
                        <ul class="contact_info">
                            <li>Phone  :<a href="#"> 00-29-03-9084413</a></li>
                            <li>E-mail  :<a href="#"> example.201@domain.com</a></li>
                            <li>Address  :<a href="#"> R-03, Sec-04, Uttara-1230,  <span>Dhaka, Bangladesh</span></a></li>
                        </ul>
                        <ul class="pink_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <div class="pink_copyright">
        <div class="container">
            <div class="pull-left">
                <a href="#"><img src="{{asset('img/logo-white.png')}}" alt=""></a>
            </div>
            <div class="pull-right">
                <a class="copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script></a><a> All rights reserved |by </a><a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->









<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-2.2.4.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<!-- Extra Plugin -->
<script src="{{asset('vendors/parallax/jquery.parallax-scroll.js')}}"></script>
<script src="{{asset('vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('vendors/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/flexslider/flex-slider.js')}}"></script>
<script src="{{asset('vendors/flexslider/mixitup.js')}}"></script>
<script src="{{asset('vendors/swiper/js/swiper.min.js')}}"></script>
<script src="{{asset('vendors/flipster-slider/jquery.flipster.min.js')}}"></script>
<script src="{{asset('vendors/nice-selector/jquery.nice-select.min.js')}}"></script>

<script src="{{asset('js/theme.js')}}"></script>
</body>
</html>
