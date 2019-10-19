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
                        <form >
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" id="customCheck1" type="checkbox">
                                        <label class="custom-control-label" for="customCheck1">Pole Fitness</label>
                                    </div>
                                </div>
                                    <div class="col-md-2">
                                        <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" id="customCheck2" type="checkbox">
                                        <label class="custom-control-label" for="customCheck2">Telas Aéreas</label>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="ap" class="form-control" id="exampleFormControlInput2" placeholder="Apellido Paterno">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="am" class="form-control" id="exampleFormControlInput3" placeholder="Apellido Materno">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" placeholder="Seleccionar Fecha" type="text" value="Fecha de Nacimiento">
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
                                        <a class="btn btn-icon btn-2 btn-info btn-lg" role="button" title="Agregar" href="{{ url('Alumnos') }}"> Agregar </a>
                                    </span>
                                                <span class="btn-inner--icon">
                                         <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ url('Alumnos') }}"> Cancelar </a>
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
