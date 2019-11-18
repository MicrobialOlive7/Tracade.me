@extends('Instructor.templates.master')
@extends('layouts.modal')
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
            <form>
              @csrf
                <div class="container">
                    <div class="row justify-content-md-start">
                        <!-- Inicia Seccion Nombre, disciplina, dificultad-->

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="nombre"
                                @if($Mod=='1')
                                 value="{{$Habilidad->hab_nombre}}"
                                @else
                                  value=""
                                @endif

                                class="form-control " id="hab_nombre"

                               @if($Mod=='1')
                                data-id= "{{$Habilidad->hab_id}}" data-id_cad= "{{$CamposAd->id}}" data-id-han="{{$HabReq}}"
                              @else
                                data-id = ''
                              @endif placeholder="Nombre" name="hab_nombre" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select type="ap"
                                  @if($Mod=='1')
                                   value="{{$Habilidad->dis_id}}"
                                  @else
                                    value=""
                                  @endif
                                  class="form-control" id="dis_id" required>
                                    <option value="" disabled
                                    @if($Mod=='0')
                                     selected
                                    @endif
                                    name="dis_id" >Disciplina</option>
                                    <option value="1" > Pole Fitness </option>
                                    <option value="3" > Telas Aereas </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select type="ap"
                                @if($Mod=='1')
                                 value="{{$Habilidad->hab_dificultad}}"
                                @else
                                  value=""
                                @endif
                                class="form-control" id="hab_dificultad" name="hab_dificultad" required>
                                    <option value="" disabled
                                    @if($Mod=='0')
                                    selected
                                    @endif
                                    >Dificultad</option>
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
                                <textarea  maxlength="255" class="form-control" name="hab_descripcion" id="hab_descripcion" rows="3" placeholder="Descripción ..." required> @if($Mod=='1')
                                 {{$Habilidad->hab_descripcion}}
                                @else

                                @endif </textarea>
                            </div>
                        </div>
                        <!-- Inicia Seccion Habilidades requeridas -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <select type="ap"
                                @if($Mod=='1')
                                 value="{{$HabReq}}"
                                @else
                                  value=""
                                @endif
                                class="form-control" id="hab_id" name="hab_id" required >
                                    <option value="" disabled
                                    @if($Mod=='0')
                                    selected
                                    @endif >Habilidad Requerida</option>
                                    @foreach($Habilidades as $key => $value)
                                    <option value="{{$value['id']}}"> {{$value['hab_nombre']}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <!-- Termina Seccion Habilidades requeridas -->
                    </div>
                </div>
                <!-- Termina Descripción -->

                <!-- Container de campos adicionales -->
                <div id="campos_adicionales">

                  @if($Mod==1)
                  @foreach($CamposAd as $key => $values)

                  <div class="container">
                                    <div class="row justify-content-md-start">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input value="{{$values['cad_nombre']}}" type="nombre" class="form-control" name="cad_nombre" id="cad_nombre" placeholder="Nombre campo" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="nombre" value="{{$values['cad_contenido']}}" class="form-control" name="cad_contenido" id="cad_contenido" placeholder="Contenido campo" required>
                                        </div>
                                    </div>
                                  </div>
                                  </div>
                  @endforeach

                  @endif
                </div>
                <!-- Termina contariner de campos adicionales -->
                <!-- Boton para añadir campos adicionales -->
                <div class="container row" id="remove">
                  <div class="col-md-12 text-left">

                      <span class="btn-inner--icon">
                          <a class="btn btn-icon btn-2 btn-outline-info btn-LG" id="añadirHabilidad"role="button" title="AnadirCampo" >
                              <i class="ni ni-fat-add" ></i>
                          </a>
                      </span>
                      <label  > Agregar Campo Adicional</label>



                  </div>

                </div>
                <!-- Termianr botón para añadir campos adicionales -->

            @if($Mod==0)
                <div class="container">
                    <div class="row justify-content-md-start">
                        <div class="col">
                            <div class="form-group">
                                <input id="hab_imagen" type="file" name="hab_imagen" accept="image/*">

                            </div>
                        </div>
                    </div>
                </div>
            @endif

                <!-- Inician Botones de Guardado -->
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-auto">
                            <div  class="col-md-offset-right-1">
                              <div class="form-group">
                                  <span class="btn-inner--icon">
                                      @if($Mod==0)
                                        <span class="btn-inner--icon">
                                          <a id="btn-agregarHabilidad" class="btn btn-icon btn-2 btn-info btn-lg" role="button" title="Agregar"> Agregar </a>
                                        </span>
                                        @else
                                        <span class="btn-inner--icon">
                                            <a class="btn btn-icon btn-2 btn-info btn-lg" id="btn-modificarHabilidad" role="button" title="Agregar"> Modificar </a>
                                        </span>
                                      @endif
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


@section('js_content')

<script type="text/javascript">

var campos=0;
$("#añadirHabilidad").click(function(){
  var campo_adicional = '<div class="container">'+
                    '<div class="row justify-content-md-start">'+
                    '<div class="col-md-4">'+
                        '<div class="form-group">'+
                            '<input type="nombre" class="form-control" id="cad_nombre" placeholder="Nombre campo">'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                        '<div class="form-group">'+
                            '<input type="nombre" class="form-control" id="cad_contenido" placeholder="Contenido campo">'+
                        '</div>'+
                    '</div>'+
                  '</div>'+
                  '</div>';
  $("#campos_adicionales").append(campo_adicional);
  $("#remove").remove();
  campos=1;
});

$("#btn-modificarHabilidad").click(function(){
  var gru_id= document.getElementById("hab_nombre").dataset.id;
  var hab_nombre = $('#hab_nombre').val();
  var dis_id = $('#dis_id').val();
  var hab_dificultad =  $('#hab_dificultad').val();
  var hab_descripcion =  $('#hab_descripcion').val();
  var han_id_habilidad_anterior = $('#hab_id').val();
  var hab_imagen = document.getElementById("hab_imagen");
  var han_id = document.getElementById("hab_nombre").dataset.id_han;
  var cad_id = document.getElementById("habnombre").dataset.id_cad;
  if ($('#cad_nombre').length){
    var cad_nombre =  $('#cad_nombre').val();
    var cad_contenido =  $('#cad_contenido').val();
  }else {
    var cad_nombre =  '';
    var cad_contenido =  '';
  }
  if(hab_nombre=="" || dis_id=='' || hab_dificultad =='' || hab_descripcion == '' || han_id_habilidad_anterior == ''  || hab_imagen==''  ){
    $("#warning_modal").modal().find('.modal-title').text('Error de registro.');
    $("#warning_modal").modal().find('.message-text').empty();
    $("#warning_modal").modal().find('.message-text').append('Todos los datos deben ser rellenados');
    return false;
  }
    var aDatos = new FormData();
    aDatos.append('hab_id' , hab_id);
    aDatos.append('hab_nombre' , hab_nombre);
    aDatos.append('dis_id' , dis_id);
    aDatos.append('hab_dificultad' , hab_dificultad);
    aDatos.append('hab_descripcion' , hab_descripcion);
    aDatos.append('han_id_habilidad_anterior' , han_id_habilidad_anterior);
    aDatos.append('cad_nombre' , cad_nombre);
    aDatos.append('cad_contenido' , cad_contenido);
    aDatos.append('hab_imagen' , hab_imagen);
    aDatos.append('cad_id' , cad_id);
    aDatos.append('han_id' , han_id);
    $.ajax({
      async: true,
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      type: "POST",
      url: "{{ asset ('api/modificar-habilidad') }}",
      data: aDatos,
      contentType: false,
      processData: false,
      cache: false,
      dataType: "json",
          beforeSend: function (){
            //modal.preloader();
          },
          success: function (result) {
            //modal.close("-preloader");
            console.log(result.estatus===1);
            if(result.estatus === 1){
              console.log("Sacar modal y pasar a habilidades");
              window.location.href = "{{ asset('/Habilidades') }}";
            }else{
              console.log("Sacar modal error y pasar a grupos")
              window.location.href = "{{ asset('/Habilidades') }}";
            }
          },
          complete: function () {
          },
          error: function (result) {
            console.log("errorsin");
          }
        });
});

$("#btn-agregarHabilidad").click(function(){
  var hab_nombre = $('#hab_nombre').val();
  var dis_id = $('#dis_id').val();
  var hab_dificultad =  $('#hab_dificultad').val();
  var hab_descripcion =  $('#hab_descripcion').val();
  var han_id_habilidad_anterior = $('#hab_id').val();
  var hab_imagen = document.getElementById("hab_imagen");
  if (campos == 1){
    var cad_nombre =  $('#cad_nombre').val();
    var cad_contenido =  $('#cad_contenido').val();
  }else {
    var cad_nombre =  '';
    var cad_contenido =  '';
  }
  hab_imagen = hab_imagen.files[0];
  if(hab_nombre == "" || dis_id== null || hab_dificultad == null || hab_descripcion == "" || han_id_habilidad_anterior == null  || hab_imagen ==  null){
    $("#warning_modal").modal().find('.modal-title').text('Error de registro.');
    $("#warning_modal").modal().find('.message-text').empty();
    $("#warning_modal").modal().find('.message-text').append('Todos los datos deben ser rellenados');
    return false;
  }
  var aDatos = new FormData();
  aDatos.append('hab_nombre' , hab_nombre);
  aDatos.append('dis_id' , dis_id);
  aDatos.append('hab_dificultad' , hab_dificultad);
  aDatos.append('hab_descripcion' , hab_descripcion);
  aDatos.append('han_id_habilidad_anterior' , han_id_habilidad_anterior);
  aDatos.append('cad_nombre' , cad_nombre);
  aDatos.append('cad_contenido' , cad_contenido);
  aDatos.append('hab_imagen' , hab_imagen);
  aDatos.append('campos' , campos);
  aDatos.append('_token',   $( "input[name='_token']" ).val());


  $.ajax({
    async: true,
    type: "POST",
    url: "{{ asset('/crear-habilidad') }}",
    data: aDatos,
    contentType: false,
    processData: false,
    cache: false,
    dataType: "json",
        beforeSend: function (){
          //modal.preloader();
        },
        success: function (result) {
          //modal.close("-preloader");
          console.log(result.estatus===1);
          if(result.estatus === 1){
            console.log("Sacar modal y pasar a habilidades");
          }else{
            console.log("Sacar modal error y pasar a grupos")
            window.location.href = "{{ asset('/Habilidades') }}";
          }
        },
        complete: function () {
        },
        error: function (result) {
          console.log("errorsin");
        }
      });
});


</script>

@endsection
