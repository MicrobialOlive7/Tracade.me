@extends('Instructor.templates.master')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Habilidades</h3>
            </div>
            <!-- Inicia Form -->
            <form >
                <div class="container">
                    <div class="row justify-content-md-start">
                        <!-- Inicia Seccion Nombre, disciplina, dificultad-->

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select type="ap" class="form-control" id="exampleFormControlInput1" >
                                    <option value="" disabled selected>Disciplina</option>
                                    <option value="Pole" > Pole Fitness </option>
                                    <option value="Telas" > Telas Aereas </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select type="ap" class="form-control" id="exampleFormControlInput1" >
                                    <option value="" disabled selected>Dificultad</option>
                                    <option value="Principiante" > Principiante </option>
                                    <option value="Intermedio" > Intermedio </option>
                                    <option value="Avanzado" > Avanzado </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Termina Seccion Nombre, Disciplina, Dificultad -->


                <!-- Inicia Descripcion -->

                <div class="container">
                    <div class="row justify-content-md-start">
                        <div class="col-md-5">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción ..."></textarea>
                            </div>
                        </div>
                        <!-- Inicia Seccion Habilidades requeridas -->
                        <div class="col-md-5">
                            <div class="form-group">
                                <select type="ap" class="form-control" id="exampleFormControlInput1" >
                                    <option value="" disabled selected>Habilidad Requerida</option>
                                    <option value="Fallen Marley" > Fallen Marley </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-1 text-right">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-outline-info btn-LG" role="button" title="AnadirCampo" href="">
                                    <i class="ni ni-fat-add" ></i>
                                </a>
                            </span>
                        </div>
                        <!-- Termina Seccion Habilidades requeridas -->
                    </div>
                </div>
                <!-- Termina Descripción -->

                <div class="container">
                    <div class="row justify-content-md-start">
                        <div class="col-xl-1">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-outline-info btn-LG" role="button" title="AnadirFoto" href="">
                                    <i class="ni ni-fat-add" ></i>
                                </a>
                            </span>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="file" name="pic" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inician Botones de Guardado -->
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
                <!-- Terminan Botones de Guardado -->
            </form>
            <!-- Termina Form -->
        </div>
    </div>
@endsection
