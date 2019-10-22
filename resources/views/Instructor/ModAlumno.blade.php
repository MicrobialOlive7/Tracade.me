@extends('Instructor.templates.master')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Alumnos</h3>
                    </div>
                        <form method="POST" action="{{route('modificar-alumno', $id)}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" value="1" name="disciplina" id="customCheck1" type="checkbox">
                                        <label class="custom-control-label" for="customCheck1">Pole Fitness</label>
                                    </div>
                                </div>
                                    <div class="col-md-2">
                                        <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" value="2" name="disciplina" id="customCheck2" type="checkbox">
                                        <label class="custom-control-label" for="customCheck2">Telas Aéreas</label>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" value="{{$alumno->alu_nombre}}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="alu_apellido_paterno" class="form-control" id="alu_apellido_paterno" placeholder="Apellido Paterno" value="{{$alumno->alu_apellido_paterno}}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="alu_apellido_materno" id="alu_apellido_materno" placeholder="Apellido Materno" value="{{$alumno->alu_apellido_materno}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" id="email" name="email" placeholder="Correo Electrónico" type="email" value="{{$alumno->email}}" required>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" id="alu_fecha_nacimiento" name="alu_fecha_nacimiento" placeholder="Seleccionar Fecha" type="text" value="{{$alumno->alu_fecha_nacimiento}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                     <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ url('/Alumnos') }}">
                                                         {{ __('Cancelar') }}
                                                     </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
    </div>
@endsection

