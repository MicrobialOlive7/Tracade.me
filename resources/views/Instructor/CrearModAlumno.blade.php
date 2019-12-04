@extends('Instructor.templates.master')
@section('alu-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Alumnos</h3>
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <strong>Ups!</strong> Hay errores en tu registro, verifica todos los campos.
                </div>
                @endif
            </div>
            <form method="POST" action="{{route('alumnoCreate')}}">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <div class="custom-control custom-checkbox mb-3" id="dis_id">

                          <input type="radio" name="dis_id" value="1" required> Pole Fitness<br>
                          <input type="radio" name="dis_id" value="2"> Telas Aéreas<br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <input type="text" name="alu_apellido_paterno" class="form-control" value="{{old('alu_apellido_paterno')}}" id="alu_apellido_paterno" placeholder="Apellido Paterno" required>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <input type="text" class="form-control" name="alu_apellido_materno" value="{{old('alu_apellido_materno')}}" id="alu_apellido_materno" placeholder="Apellido Materno" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Correo Electrónico" type="email" required>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" id="password" name="password" placeholder="Contraseña" type="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control datepicker" value="{{old('alu_fecha_nacimiento')}}" id="alu_fecha_nacimiento" name="alu_fecha_nacimiento" placeholder="Fecha de Nacimiento" type="text" required>
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
                                                        {{ __('Agregar') }}
                                                    </button>
                                                </span>
                                    <span class="btn-inner--icon">
                                                     <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ route('alumnos') }}">
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
