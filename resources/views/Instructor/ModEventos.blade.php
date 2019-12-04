@extends('Instructor.templates.master')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Eventos</h3>
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <strong>Ups!</strong> Hay errores en tu registro, verifica todos los campos.
                </div>
                @endif
            </div>
            <!-- Inicia Form -->
            <form method="POST" action="{{route('eventoUpdate')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-4">

                                <select onchange="" type="ap" class="form-control" id="exampleFormControlInput1" name="id"required>
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

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group mb-4">
                                <input class="form-control datepicker" placeholder="Seleccionar Fecha" type="text" value="Fecha" name="fecha">
                            </div>
                        </div>
                    </div>
                    <!-- Inicia Campo Horario -->
                    <div class="col-md-2">
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

                    <div class="col-md-2">
                        <input class="form-control" placeholder="Min" type="number" max="59" min="00" name="min">
                    </div>

                    <div class="col-md-4">
                        <select class="form-control" id="grupo" name="grupo">
                            <option value="" selected>Grupo</option>
                            @foreach($grupos as $grupo)
                                <option value="{{$grupo->id}}" > {{$grupo->gru_nombre}} </option>
                            @endforeach
                        </select>
                    </div>
                <!-- Termina Campo Horario -->

                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3" placeholder="Descripción..."></textarea>
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
                                        <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ route('calendario') }}">
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
