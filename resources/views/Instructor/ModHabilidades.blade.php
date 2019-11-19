@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('hab-active', 'active')
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
            <form method='POST' action="{{route('modificar-habilidad', $hab_id)}}" enctype="multipart/form-data">
              @csrf
                <div class="container">
                    <div class="row justify-content-md-start">
                        <!-- Inicia Seccion Nombre, disciplina, dificultad-->

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="nombre" value="{{$Habilidad->hab_nombre}}" class="form-control " id="hab_nombre" placeholder="Nombre" name="hab_nombre" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select value="{{$Habilidad->dis_id}}" type="ap" name="dis_id" class="form-control" id="dis_id" >
                                    <option value="" disabled> Disciplina</option>
                                    <option value="1" > Pole Fitness </option>
                                    <option value="2" > Telas Aereas </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select value="{{$Habilidad->hab_dificultad}}" type="ap" name="hab_dificultad" class="form-control" id="hab_dificultad" >
                                    <option value="" disabled>Dificultad</option>
                                    <option value="1" > Principiante </option>
                                    <option value="2" > Intermedio </option>
                                    <option value="3" > Avanzado </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Termina Seccion Nombre, Disciplina, Dificultad -->


                <!-- Inicia Descripcion -->

                <div class="container">
                    <div class="row justify-content-md-start">
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea value="" class="form-control" name="hab_descripcion" id="hab_descripcion" rows="3" placeholder="Descripción ..."> {{$Habilidad->hab_descripcion}} </textarea>
                            </div>
                        </div>
                        <!-- Inicia Seccion Habilidades requeridas -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <select value="{{$HabReq->hab_ant_id}}" type="ap" class="form-control" id="hab_id" name="hab_id" >
                                    <option value="" disabled > Habilidad Requerida</option>
                                    <option value=""> Sin habilidad</option>
                                    @foreach($Habilidades as $key => $value)
                                    <option value="{{$value->id}}"> {{$value['hab_nombre']}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <!-- Termina Seccion Habilidades requeridas -->
                    </div>
                </div>
                <!-- Termina Descripción -->

                <!-- Container de campos adicionales -->

                <!-- Termianr botón para añadir campos adicionales -->

                @if($CamposAd == null)
                <div id="campos_adicionales">
                <div>
                <div class="container row" id="remove">
                  <div class="col-md-12 text-left">

                      <span class="btn-inner--icon">
                          <a class="btn btn-icon btn-2 btn-outline-info btn-LG" id="añadirHabilidad"role="button" title="AnadirCampo" >
                              <i class="ni ni-fat-add" ></i>
                          </a>
                      </span>
                      <label> Agregar Campo Adicional</label>
                  </div>

                </div>
                @else
                <div id="campos_adicionales">
                  <div class="container">
                    <div class="row justify-content-md-start">
                      <div class="col-md-4">
                          <div class="form-group">
                              <input value="{{$CamposAd->cad_nombre}}" type="nombre" class="form-control" id="cad_nombre" placeholder="Nombre campo">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <input type="nombre" value="{{$CamposAd->cad_contenido}}" class="form-control" id="cad_contenido" placeholder="Contenido campo">
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
                <!-- Termina contariner de campos adicionales -->
                <!-- Boton para añadir campos adicionales -->
                <div class="container">
                    <div class="row justify-content-md-start">
                        <div class="col">
                            <div class="form-group">
                                <input type="file" id="hab_imagen" name="hab_imagen" accept="image/*">
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
                                      <button type="submit" class="btn btn-icon btn-2 btn-info btn-lg">
                                          {{ __('Modificar') }}
                                      </button>
                                  </span>
                                  <span class="btn-inner--icon">
                                       <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ route('Habilidades') }}">
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

<script type="text/javascript">

var campos=0;

$("#añadirHabilidad").click(function(){

  var campo_adicional = '<div class="container">'+
                    '<div class="row justify-content-md-start">'+
                    '<div class="col-md-4">'+
                        '<div class="form-group">'+
                            '<input type="nombre" class="form-control" name="cad_nombre" id="cad_nombre" placeholder="Nombre campo">'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                        '<div class="form-group">'+
                            '<input type="nombre" class="form-control" name="cad_contenido" id="cad_contenido" placeholder="Contenido campo">'+
                        '</div>'+
                    '</div>'+
                  '</div>'+
                  '</div>';
  $("#campos_adicionales").append(campo_adicional);
  $("#remove").remove();

  campos=1;
});

</script>

@endsection
