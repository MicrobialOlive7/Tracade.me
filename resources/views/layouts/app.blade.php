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
</head>

<body class="bg-gradient-primary py-4">
        <div class="main-content" >

            <div class="container">
                <div class="row justify-content-start">
                    <div class="col">
                        <div  class="col-md-offset-right-1">
                            <div class="form-group">
                                    <span class="btn-inner--icon">
                                        <a class="btn btn-icon btn-2 btn-default btn-sm" role="button" title="Regresar" href="{{ url('') }}"> <i class="ni ni-bold-left"></i> </a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- Page content -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="container">
                                    <div class="header-body text-center mb-7">
                                        <div class="row justify-content-center">
                                                <img src="../public/img/dash-logo.png" />
                                        </div>
                                        <div class="row justify-content-center">
                                            <p class="text-lead text-light">Ingresa tu datos para iniciar sesión</p>
                                        </div>
                                    </div>
                                </div>
                                <form role="form">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Correo Electrónico" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Contraseña" type="password">
                                        </div>
                                    </div>
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                        <label class="custom-control-label" for=" customCheckLogin">
                                            <span class="text-muted">Recuérdame</span>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary my-4">Iniciar Sesión</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a href="#" class="text-light"><small>¿Olvidaste tu contraseña?</small></a>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="text-light"><small>Registrarse</small></a>
                            </div>
                        </div>
                    </div>
                </div>
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
    </script>
</body>

</html>
