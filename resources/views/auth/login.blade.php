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
                            <div class="header-body text-center mb-4">
                                <div class="row justify-content-center">
                                    <img src="../public/img/dash-logo.png" />
                                </div>
                                <div class="row justify-content-center">
                                    <p class="text-lead text-light">Ingresa tu datos para iniciar sesión</p>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--Inicio Class Card-->
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="form-group mb-3">
                        <div id="div-em" class="input-group justify-content-center mb-5">
                            <form method="POST" action="{{ route('login') }}"> <!--Inicio de Form-->
                            @csrf
                            <!--Inicia Campo Correo-->
                            <div class="form-group row justify-content-center">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <label for="email" class="col-form-label text-gray">{{ __('Correo Electrónico') }}</label>
                                <div class="col-md-10 input-group input-group-alternative">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                    @enderror
                                </div>
                            </div>
                            <!--Termina Campo Correo-->

                           <!--Inicia Campo Contraseña-->
                            <div class="form-group row justify-content-center">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <label for="password" class=" col-form-label text-gray">{{ __('Contraseña') }}</label>
                                <div class="col-md-10 input-group input-group-alternative">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <!--Termina Campo Contraseña-->

                            <!-- Inicia Boton login -->
                            <div class="form-group row mb-5">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="submit">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                            <!-- Termina Boton login -->
                            </form> <!--Cierre de Form-->
                        </div                                                                                                                                                                                                                                                                                                                                                                           >
                    </div>
                </div>
                <!--Termina Class Card-->
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
<!--<script>
    $.ajaxSetup({

        headers: {

            //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'

        }

    });



    $("#submit").click(function(e){
        e.preventDefault();

        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();

        var data = new FormData();
        data.append('email', email);
        data.append('password', password);

        $.ajax({

            type:'POST',

            url:'https://tracademe-clients.herokuapp.com/api/login',

            data:data,

            dataType: "json",

            success:function(data){

                alert(data.success);

            },
            error: function(data){
                // Error...
                var errors = $.parseJSON(data.responseText);

                console.log(errors);

                $.each(errors, function(index, value) {

                });

            }

        });

/*
        $.ajax({
            headers: {
                'Content-Type': 'application/json',
                'x-requested-with': 'XMLHttpRequest'
            },
            type: "POST",
            url: "https://tracademe-clients.herokuapp.com/api/login",
            data: {
                'name':name,
                'password':password,
                'email':email
            },
            cache: false,
            beforeSend: function (){
                //modal.preloader();
            },
            success: function (result) {
                //modal.close("-preloader");
                console.log(result, 'success');

            },
            complete: function(){
                console.log("ns parece");
            },
            error: function(result){
                console.log(result, 'error');
            }

        });*/



    });
</script>-->
 </body>
</html>
