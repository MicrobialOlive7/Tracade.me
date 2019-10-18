@extends('Instructor.templates.master')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Alumno Nuevo</h3>
                    </div>
                        <form >
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" placeholder="Seleccionar Fecha" type="text" value="06/20/2019">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-success">
                                        <input type="text" placeholder="Success" class="form-control is-valid" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <textarea class="form-control form-control-alternative" rows="3" placeholder="Write a large text here ..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
    </div>
@endsection
