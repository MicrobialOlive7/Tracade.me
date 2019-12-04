@extends('Alumno.templates.master')
@extends('layouts.modal')
@section('hab-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-indigo pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row mb-5">
            <div class="col-xl-5 col-lg-6">
                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Detalle de <strong>{{$habilidad->hab_nombre}}</strong></h3>
                        <th scope="row">
                            <div class="text-center">
                                @if($evaluation== null)
                                @else
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0"> Calificación más reciente </span>
                                </p>
                                <div class=" icon-shape">
                                    @if ($evaluation->eva_calificacion == 1)
                                        <i style="font-size: 2.5rem" class=" text-yellow fas fa-star"></i>
                                    @elseif ($evaluation->eva_calificacion == 2)
                                        <i style="font-size: 2.5rem" class="text-yellow fas fa-star "></i>
                                        <i style="font-size: 2.5rem" class="text-yellow fas fa-star"></i>
                                    @elseif ($evaluation->eva_calificacion == 3)
                                        <i style="font-size: 2.5rem" class="text-yellow fas fa-star "></i>
                                        <i style="font-size: 2.5rem" class="text-yellow fas fa-star"></i>
                                        <i style="font-size: 2.5rem" class="text-yellow fas fa-star "></i>
                                    @endif
                                </div>
                                @endif
                            </div>
                        </th>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-left">
                                    <span class="h2 font-weight-bold mb-0"> Video </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-sm text-center">
                                    <video width="94%" height="auto" preload="auto" controls loop muted autoplay>
                                        <source src="{{asset('storage/habilidades/'.$habilidad->id.'/'.$habilidad->hab_video)}}" type="video/mp4"></video>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="card shadow mb-3 ">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-left">
                                    <span class="h2 font-weight-bold mb-0"> Foto </span>
                                </p>
                                <p class="text-center mt-3 mb-0 text-muted">
                                    <img class="carousel__image col-7" src="{{asset('storage/habilidades/'.$habilidad->id.'/principal.jpg')}}" alt="costos">
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <h3 class="mb-0"> Mis notas</h3>
                        <div class="row">
                            <div class="col">
                                @if($notas->first() == null)
                                @else
                                        <div class="table-responsive">
                                            <table class="table align-items-center table-flush">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Fecha</th>
                                                    <th scope="col">Comentarios</th>
                                                    <th class="text-right"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($notas as $nota)
                                                    <tr>
                                                        <th scope="row">
                                                            <span class="mb-0 text-sm">{{$nota['created_at']}}</span>
                                                        </th>

                                                        <th scope="row">
                                                            @for($i = 0 ; $i < $nota['not_nota']; $i++)
                                                                <i class="text-yellow ti-star"></i>
                                                            @endfor
                                                        </th>
                                                        <th class="text-right">
                                                            <div class="dropdown">
                                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                    <a class="dropdown-item" href="#">Modificar</a>
                                                                    <a class="dropdown-item" href="#">Eliminar</a>
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                @endif
                                <form method="post" action="{{route('notasCreate')}}">
                                    {{ csrf_field() }}
                                <p class="mt-3 mb-4 text-muted text-md text-center">
                                    <textarea rows="4" class="form-control form-control-alternative" name="nota"></textarea>
                                </p>
                                    <input type="hidden"  name="id" >
                                <div class="text-center">
                                    <span class="btn-inner--icon">
                                          <button type="submit" class="btn btn-icon btn-2 btn-info btn-sm">Agregar</button>
                                     </span>
                                </div>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
                @if($evaluation == null)
                @else
                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <h3 class="mb-0"> Registro de Evaluaciones</h3>
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">

                                        <tr>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Calificacion</th>
                                            <th scope="col">Comentarios</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($evaluaciones as $evaluacion)
                                            <tr>
                                                <th scope="row">
                                                    <span class="mb-0 text-sm">{{$evaluacion['created_at']}}</span>
                                                </th>

                                                <th scope="row">
                                                    @for($i = 0 ; $i < $evaluacion['eva_calificacion']; $i++)
                                                        <i class="text-yellow ti-star"></i>
                                                    @endfor
                                                </th>
                                                <th> {{$evaluacion['eva_comentario']}}</th>

                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
            </div>
        </div>
    </div>

@endsection
