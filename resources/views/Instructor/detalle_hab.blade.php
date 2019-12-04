@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('hab-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row mb-5">
            <div class="col-xl-7 col-lg-6">
                <div class="card shadow mb-5">
                    <div class="card-header border-0">
                        <h3 class="mb-4">Detalle de <strong>{{$habilidad->hab_nombre}}</strong></h3>
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  Descripción </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">{{$habilidad->hab_descripcion}}</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-left">
                                    <span class="h2 font-weight-bold mb-0">  Detalles de Habilidad </span>
                                </p>
                                @if($hab_anterior== null)
                                @else
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="h4">Habilidad Anterior</span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="text-gray-dark">{{$hab_anterior->hab_nombre}}</span>

                                </p>

                                @endif
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="h4">Dificultad</span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="text-gray-dark">
                                        @if ($habilidad->hab_dificultad == 1) Principiante
                                        @elseif ($habilidad->hab_dificultad == 2) Intermedio
                                        @elseif ($habilidad -> hab_dificultad == 3) Avanzado
                                        @endif
                                    </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="h4">Disciplina</span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="text-gray-dark">
                                        @if ($habilidad->dis_id == 1) Pole Fitness
                                        @elseif ($habilidad->dis_id== 2) Telas Aéreas
                                        @endif
                                    </span>
                                </p>
                                @if($campo_ad != null)
                                    <p class="mt-3 mb-0 text-muted text-md text-left">
                                        <span class="h4">{{$campo_ad->cad_nombre}}</span>
                                    </p>
                                    <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="text-gray-dark">
                                        {{$campo_ad->cad_contenido}}
                                    </span>
                                    </p>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="card shadow ">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-left">
                                    <span class="h2 font-weight-bold mb-0"> Foto </span>
                                </p>
                                <p class="text-center mt-3 mb-0 text-muted">
                                    <img class="carousel__image col-7" src="{{asset('storage/habilidades/'.$habilidad->id.'/'.$habilidad->hab_imagen)}}">
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-xl-8 col-lg-6">
                <div class="card-shadow ">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-left">
                                    <span class="h2 font-weight-bold mb-0"> Video </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-sm text-center">
                                    <video width="100%" height="auto" preload="auto" controls loop muted autoplay>
                                        <source src="{{asset('storage/habilidades/'.$habilidad->id.'/'.$habilidad->hab_video)}}" type="video/mp4">

                                    </video>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
