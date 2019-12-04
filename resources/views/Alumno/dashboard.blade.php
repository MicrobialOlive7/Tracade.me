@extends('Alumno.templates.master')
@extends('layouts.modal')
@section('ini-active', 'active')
@section('content')

    <!--<nav class="navbar navbar-top navbar-expand-md navbard-dark" id="navbar-main">
    <div class="container-fluid">
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"> Inicio </a>
    </div>
</nav> -->
<div class="header bg-gradient-indigo pb-8 pt-5 pt-md-8">
<div class="container-fluid">
    
</div>
</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div>
                            <h6 class="text-uppercase text-light 1s-1 mb-1">   Habilidades / Tiempo </h6>
                            <h2 class=> Progreso de los alumnos  </h2>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end"> <!--Aqui van los botones mes semana -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        {!! $habilidades->container() !!}
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div>
                            <h6 class="text-uppercase text-light 1s-1 mb-1"> Habilidades / Dificultad </h6>
                            <h2> Habilidades aprendidas por dificultad  </h2>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end"> <!--Aqui van los botones mes semana -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        {!! $clasificacion->container() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{!! $habilidades->script() !!}
    {!! $clasificacion->script() !!}
@endsection
