@extends('Instructor.templates.master')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Grupos</h3>
            </div>
         <!-- Inicia Form -->
            <form >
                <div class="container">
                    <div class="row justify-content-md-center">
                        <!-- Inicia Seccion Nombre y Dia -->

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="input-group md-4">
                                    <select type="ap" class="form-control" id="exampleFormControlInput2" >
                                        <option value="" disabled selected>Día</option>
                                        <option value="Lunes"> Lunes </option>
                                        <option value="Martes"> Martes </option>
                                        <option value="Miercoles"> Miércoles </option>
                                        <option value="Jueves"> Jueves </option>
                                        <option value="Viernes"> Viernes </option>
                                        <option value="Sabado"> Sábado </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- Termina Seccion Nombre y Dia -->

                        <!-- Inicia Campo Horario -->

                <div class="col-md-12 text-center">
                    <h5 class="card-title text-uppercase text-muted mb-0">Horario</h5>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <select type="ap" class="form-control" id="exampleFormControlInput1" >
                                <option value="" disabled selected>Hora</option>
                                <option value="1" > 01 </option>
                                <option value="2" > 02 </option>
                                <option value="3" > 03 </option>
                                <option value="4" > 04 </option>
                                <option value="5" > 05 </option>
                                <option value="6" > 06 </option>
                                <option value="7" > 07 </option>
                                <option value="8" > 08 </option>
                                <option value="9" > 09 </option>
                                <option value="10" > 10 </option>
                                <option value="11" > 11 </option>
                                <option value="12" > 12 </option>
                            </select>
                        </div>

                        <div class="col-xs-1">:</div>

                        <div class="col-auto">
                            <input class="form-control" placeholder="Min" type="number" max="59" min="00">
                        </div>
                        <div class="col-auto">
                            <select type="ap" class="form-control" id="exampleFormControlInput2" >
                                <option value="" disabled selected>Hora</option>
                                <option value="1" > 01 </option>
                                <option value="2" > 02 </option>
                                <option value="3" > 03 </option>
                                <option value="4" > 04 </option>
                                <option value="5" > 05 </option>
                                <option value="6" > 06 </option>
                                <option value="7" > 07 </option>
                                <option value="8" > 08 </option>
                                <option value="9" > 09 </option>
                                <option value="10" > 10 </option>
                                <option value="11" > 11 </option>
                                <option value="12" > 12 </option>
                            </select>
                        </div>

                        <div class="col-xs-1">:</div>

                        <div class="col-auto">
                            <input class="form-control" placeholder="Min" type="number" max="59" min="00">
                        </div>
                    </div>
                </div>
                <br>
                <!-- Termina Campo Horario -->

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
