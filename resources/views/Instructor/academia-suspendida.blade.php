<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Tracade.Me - Seguimiento de Habilidades
    </title>
    <!-- Favicon -->
    <link href="{{asset('../public/img/fav-icon.ico')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('../public/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
    <link href="{{asset('../public/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{asset('../public/css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
    <!-- themify-icon.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body class="">
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ url('') }}">
            <img src="{{asset('../public/img/dash-logo.png')}}" class="navbar-brand-img" style="width: 100%;" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{asset('../public/img/theme/team-1-800x800.jpg')}}">
              </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">¡Bienvenido!</h6>
                    </div>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>Mi Perfil</span>
                    </a>
                    @auth
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{route('logout')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit">Logout</button>
                        </form>
                    @endauth
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../index.html">
                            <img src="{{asset('../public/img/dash-logo.png')}}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('perfil') }}">
                        <i class="ni ni-circle-08"></i> Mi Perfil
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">

            <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">

            </form>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="{{asset('storage/alumnos/'.Auth::user()->id.'/perfil.png')}}">
                              </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->alu_nombre }} {{Auth::user()->alu_apellido_paterno}}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">¡Bienvenido!</h6>
                        </div>
                        <a href="{{ url('perfil') }}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>Mi Perfil</span>
                        </a>
                        @auth
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{route('logout')}}" >

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">

                                    <a class="dropdown-item">
                                        <i class="ni ni-user-run"></i>
                                        <span>Cerrar Sesissón</span>
                                    </a>

                                </button>
                            </form>
                        @endauth
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->




    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 400px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-primary opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">Hola, <Strong>{{Auth::user()->alu_nombre}}</Strong></h1>
                    <p class="text-white mt-0 mb-5">Bienvenido a tu perfil.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{asset('storage/alumnos/'.Auth::user()->id.'/perfil.png')}}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top pt-0 pt-md-9">
                        <div class="text-center">
                            <h3>
                                {{Auth::user()->alu_nombre}} {{Auth::user()->alu_apellido_materno}}<span class="font-weight-light">, {{\Carbon\Carbon::parse(Auth::user()->alu_fecha_nacimiento)->age}}</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{$academia->aca_nombre}}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Plan
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{$plan->pla_nombre}}
                            </div>

                            <hr class="my-4" />
                            <p>{{Auth::user()->alu_biografia}}</p>

                        </div>
                    </div>
                </div>
                <div class="mb-4"></div>
            </div>

            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="text-center mb-2">
                            <h3>
                                CUENTA SUSPENDIDA {{$academia->id}}
                            </h3>
                            <hr class="my-4" />
                                <div class="h4 text-left text-center">
                                    <span class="font-weight-700 text-red">Debes realizar tu pago</span>
                                </div>


                            <div class="h4 text-left">
                                <span class="font-weight-700">Ultimo pago: </span><span class="font-weight-300">{{\Carbon\Carbon::parse($pago->created_at)->locale('es_MX')->isoFormat('MMMM Do YYYY')}}</span>
                            </div>

                                <div id="paypal-button"></div>

                        </div>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>

        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <script>
            var total = {{$precio}};

            paypal.Button.render({
                env: 'sandbox', // sandbox | production

                // PayPal Client IDs - replace with your own
                // Create a PayPal app: https://developer.paypal.com/developer/applications/create
                client: {
                    sandbox:    'AbM9ljm6nbmbfuro_f1_9oC5ViOnOIVMvQSBI4ije_UKdBPMTPdJW6U6Ad2NiVWN5JX53tYcr1IpU8yD',
                    production: ''
                },


                // Show the buyer a 'Pay Now' button in the checkout flow
                commit: true,

                // payment() is called when the button is clicked
                payment: function(data, actions) {

                    // Make a call to the REST api to create the payment
                    return actions.payment.create({
                        payment: {
                            transactions: [
                                {
                                    amount: { total: total.toFixed(2), currency: 'MXN' }//"'"+total.toFixed(2)+"'"
                                }
                            ]
                        }
                    });
                },

                // onAuthorize() is called when the buyer approves the payment
                onAuthorize: function(data, actions) {

                    // Make a call to the REST api to execute the payment
                    return actions.payment.execute().then(function() {
                        window.location = '{{ route('plan-contratado', [$plan->id,$academia->id]) }}';
                    });
                }
            }, '#paypal-button');
        </script>




    <!-- Footer -->
    <footer class="footer">

    </footer>
</div>
</div>
<!--   Core   -->
<script src="{{asset('../public/js/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('../public/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!--   Optional JS   -->
<script src="{{asset('../public/js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!--   Argon JS   -->
<script src="{{asset('../public/js/argon-dashboard.min.js?v=1.1.0')}}"></script>
<script src="{{asset('https://cdn.trackjs.com/agent/v3/latest/t.js')}}"></script>
<script>
    window.TrackJS &&
    TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
    });
</script>



</body>

</html>
