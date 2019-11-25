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
                <h3 class="mb-0">Evaluar <strong>{{$habilidad->hab_nombre}}</strong> de <strong>{{$alumno->alu_nombre}} {{$alumno->alu_apellido_paterno}}</strong></h3>
            </div>
            <!-- Inicia Form -->
            <form method="POST" action="{{route('evaluacionUpdate', [$evaluacion->id, $habilidad->id, $alumno->id])}}">
                @csrf
                <div class="container">
                    <div class="row justify-content-md-center">
                        <!-- Inicia Seccion comentarios y calificacion -->

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="eva_comentario" name="eva_comentario" value="{{$evaluacion->eva_comentario}}" placeholder="Comentarios" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group md-4">
                                    <select class="form-control" id="eva_calificacion" name="eva_calificacion" required>
                                        <option value="{{$evaluacion->eva_calificacion}}" selected>{{$evaluacion->eva_calificacion}}</option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2 </option>
                                        <option value="3"> 3 </option>
                                    </select>
                                </div>
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
                                            {{ __('Modificar') }}
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

