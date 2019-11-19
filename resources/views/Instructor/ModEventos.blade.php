@extends('Instructor.templates.master')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Eventos</h3>
            </div>
            <!-- Inicia Form -->
            <form method="POST" action="{{route('modificar-evento')}}">
                @csrf
                <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <select onchange="" type="ap" class="form-control" id="exampleFormControlInput1" name="id">
                                        <option value="" disabled selected>Evento a Modificar</option>
                                        @foreach($eventos as $evento)
                                            <option value="{{$evento -> id}}">{{$evento -> eve_nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="exampleFormControlInput1" name="name" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control datepicker" placeholder="Seleccionar Fecha" type="text" value="Fecha" name="fecha">
                            </div>
                        </div>
                    </div>
                    <!-- Inicia Campo Horario -->
                    <div class="col-md-3">
                        <select type="ap" class="form-control" id="exampleFormControlInput1" name="hora">
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


                    <div class="col-md-3">
                        <input class="form-control" placeholder="Min" type="number" max="59" min="00" name="min">
                    </div>
                <!-- Termina Campo Horario -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3" placeholder="Descripción..."></textarea>
                        </div>
                    </div>


                    </div>
                    <div class="col-sm"></div>
                </div>


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
                                        <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ url('/Calendario') }}">
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
