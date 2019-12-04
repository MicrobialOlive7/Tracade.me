@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('gru-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="mb-4">
                    <span class="mb-0 text-pink" style="font-size: 16px">{{$alumno->alu_nombre}} {{$alumno->alu_apellido_paterno}}</span>
                    @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Ups!</strong> Hay errores en tu registro, verifica todos los campos.
                    </div>
                    @endif
                </div>

                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="{{asset('storage/habilidades/'.$habilidad['id'].'/'.$habilidad['hab_imagen'])}}">
                    </a>
                    <div class="media-body">
                        <h3 class="mb-0">{{$habilidad->hab_nombre}}</h3><p>Registro de evaluaciones</p>

                    </div>
                </div>
            </div>
            <!-- Inicia Form -->
            <form method="POST" action="{{route('evaluacionCreate', [$habilidad->id, $alumno->id])}}">
                @csrf
                <div class="container">
                    <div class="row justify-content-md-center">
                        <!-- Inicia Seccion comentarios y calificacion -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group md-4">
                                    <select class="form-control" id="eva_calificacion" name="eva_calificacion" required>
                                        <option value="" selected>Caiificación</option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2 </option>
                                        <option value="3"> 3 </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" id="eva_comentario" name="eva_comentario" value="" placeholder="Comentarios" required>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Termina Seccion comentarios y calificacion-->

                <!-- Inician Botones de Guardado -->
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-auto">
                            <div  class="col-md-offset-right-1">
                                <div class="form-group">
                                    <span class="btn-inner--icon">
                                        <button type="submit" class="btn btn-icon btn-2 btn-info btn-lg">
                                            {{ __('Agregar') }}
                                        </button>
                                    </span>
                                    <span class="btn-inner--icon">
                                         <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ route('evaluaciones', [$habilidad->id, $alumno->id]) }}">
                                             {{ __('Cancelar') }}
                                         </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Terminan Botones de Guardado -->
            </form>
            <!-- Termina Form -->
        </div>
    </div>
@endsection
