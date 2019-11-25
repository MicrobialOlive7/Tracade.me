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
                <h3 class="mb-0">Grupos</h3>
            </div>
            <!-- Inicia Form -->
            <form method="POST" action="{{route('grupoUpdate', $id)}}">
                @csrf
                <div class="container">
                    <div class="row justify-content-md-center">
                        <!-- Inicia Seccion Nombre y Dia -->

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="gru_nombre" name="gru_nombre" value="{{$grupo->gru_nombre}}" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group md-4">
                                    <select class="form-control" id="gru_dia" name="gru_dia">
                                        <option value="{{$grupo->gr_dia}}" selected>{{$grupo->gr_dia}}</option>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group md-4">
                                    <select class="form-control" id="id_disciplina" name="dis_id">
                                        <option value="{{$grupo->dis_id}}" selected>{{$disciplinas->find($grupo->dis_id)->dis_nombre}}</option>
                                        <option value="1"> Pole Fitness</option>
                                        <option value="2"> Telas Aéreas </option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Termina Seccion Nombre y Dia -->

                <!-- Inicia Campo Horario -->

                <div class="col-md-3 offset-md-7 text-center">
                    <h5 class="card-title text-uppercase text-muted mb-0">Horario</h5>
                </div>

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="input-group md-4">
                                    <select class="form-control" id="id_aula" name="aul_id">
                                        <option value="{{$grupo->aul_id}}" selected >{{$aulas->find($grupo->aul_id)->aul_salon}}</option>
                                        @foreach($aulas as $aula)
                                            <option value="{{$aula->id}}"> {{$aula->aul_salon}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="col-auto">
                            <select class="form-control" id="hora" name="hora">
                                <option value="" selected>Hora</option>
                                <option value="01" > 01 </option>
                                <option value="02" > 02 </option>
                                <option value="03" > 03 </option>
                                <option value="04" > 04 </option>
                                <option value="05" > 05 </option>
                                <option value="06" > 06 </option>
                                <option value="07" > 07 </option>
                                <option value="08" > 08 </option>
                                <option value="09" > 09 </option>
                                <option value="10" > 10 </option>
                                <option value="11" > 11 </option>
                                <option value="12" > 12 </option>
                            </select>
                        </div>

                        <div class="col-xs-1">:</div>

                        <div class="col-auto">
                            <input class="form-control" id="gru_minutos_de" placeholder="Min" type="number" max="59" min="00" name="min">
                        </div>
                        <div class="col-auto">
                            <select type="ap" class="form-control" id="gru_hora_a" name="hora_2">
                                <option value="" selected>Hora</option>
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
                            <input class="form-control" placeholder="Min" id="gru_minutos_a" type="number" max="59" min="00" name="min_2">
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
                                        <button type="submit" class="btn btn-icon btn-2 btn-info btn-lg">
                                            {{ __('Modificar') }}
                                        </button>
                                    </span>
                                    <span class="btn-inner--icon">
                                         <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ route('grupos') }}">
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

@section('js_content')

@endsection
