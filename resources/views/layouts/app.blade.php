<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Tracade.Me - Inicio de Sesión
    </title>
    <!-- Favicon -->
    <link href="../public/img/fav-icon.ico" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../public/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="../public/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../public/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-default">
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
        <div class="container px-4">

            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../index.html">
                                <img src="../public/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Navbar items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="../examples/profile.html">
                            <i class="ni ni-bold-left"></i>
                            <span class="nav-link-inner--text"> Regresar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-gradient-primary py-7 py-lg-8">
    <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="container">
                                <div class="header-body text-center mb-7">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-9 col-md-6">
                                            <img src="../public/img/dash-logo.png" />
                                            <p class="text-lead text-light">Ingresa tu datos para iniciar sesión</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form role="form" method="post" action="{{route('login')}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div id="div-em" class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input  id="email" name="alu_correo_electronico" class="form-control is-invalid" placeholder="Correo Electrónico" type="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div id="div-pas" class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input id="password" name="alu_password" class="form-control" placeholder="Contraseña" type="password">
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Recuérdame</span>
                                    </label>
                                </div>

                                <div class="text-center">
                                    <button id="btn-inicar_sesion2" type="submit" class="btn btn-primary my-4" >Iniciar Sesión</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="#" class="text-light"><small>¿Olvidaste tu contraseña?</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="text-light"><small>Registrarse</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="py-6">

        </footer>
    </div>

</div>


<!--   Core   -->
<script src="../public/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="../public/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--   Optional JS   -->
<!--   Argon JS   -->
<script src="../public/js/argon-dashboard.min.js?v=1.1.0"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
    TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
    });

    $("#div-em").click(function(){
      $("#div-em").removeClass("has-danger");
    })

    $("#div-pas").click(function(){
      $("#div-pas").removeClass("has-danger");
    })


    $("#btn-inicar_sesion").click(function (){

      var cont = 0;
      var errores = "";
      var email = $("#email").val().trim();
      var password = $("#password").val().trim();

      if(email == ""){
        console.log("em-inv")
        $("#div-em").addClass("has-danger");
        cont = 1;
        errores += "El correo electrónico es obligatorio.<br>";
      }
      if(password == ""){
        console.log("pas-inv")
        $("#div-pas").addClass("has-danger");
        cont = 1;
        errores += "La contraseña es obligatoria.";
      }

      if(cont =! 0){
        $("#warning_modal").modal().find('.modal-title').text('Error de Inicio de Sesión.');
        $("#warning_modal").modal().find('.message-text').empty();
        $("#warning_modal").modal().find('.message-text').append(errores);

        return false
      }

    });
</script>
</body>

</html>
