@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('content')
    <!--<nav class="navbar navbar-top navbar-expand-md navbard-dark" id="navbar-main">
    <div class="container-fluid">
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"> Inicio </a>
    </div>
</nav> -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
<div class="container-fluid">
    <div class="header-body">
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="cad-title text-uppercase text-muted mb-0">Numero de alumnos</h5>
                                <!--Aqui va el PHP -->
                                <span class="h2 font-weight-bold mb-0"> {{$alumnos}} ALUMNOS </span>
                                <p class="mt-3 mb-0 text-muted text-sm text-center">
                                    <span class="text-nowrap"> Total de alumnos registrados </span>
                                </p>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                    <i class="fas icor fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="cad-title text-uppercase text-muted mb-0">Pole Fitness</h5>
                                <!--Aqui va el PHP -->
                                <span class="h2 font-weight-bold mb-0"> {{$habilidadesPF}} HABILIDADES </span>
                                <p class="mt-3 mb-0 text-muted text-sm text-center">
                                    <span class="text-nowrap"> Número total de habilidades</span>
                                </p>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                    <i class="fas icor fa-chart-bar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="cad-title text-uppercase text-muted mb-0">Telas Aéreas</h5>
                                <!--Aqui va el PHP -->
                                <span class="h2 font-weight-bold mb-0"> {{$habilidadesTA}} HABILIDADES </span>
                                <p class="mt-3 mb-0 text-muted text-sm text-center">
                                    <span class="text-nowrap"> Número total de habilidades</span>
                                </p>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                    <i class="fas icor fa-address-book"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid mt--7">
    <div class="row mb-5">
        <div class="col-xl-6 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-light 1s-1 mb-1"> Número de Habilidades Evaluadas</h6>
                            <h2 class="mb-0"> Pole Fitness </h2>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end"> <!--Aqui van los botones mes semana -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        {!! $pole->container() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-light 1s-1 mb-1">Número de Habilidades Evaluadas</h6>
                            <h2 class="mb-0"> Telas Aéreas </h2>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end"> <!--Aqui van los botones mes semana -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        {!! $telas->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Alumnos / Tiempo</h6>
                            <h2 class="mb-0">Cantidad de Alumnos</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        {!! $barras->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{!! $pole->script() !!}
{!! $telas->script() !!}
{!! $barras->script() !!}
@endsection
