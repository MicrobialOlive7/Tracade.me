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
            <form >
                <div class="container">
                    <div class="row justify-content-md-start">
                        <!-- Inicia Seccion Nombre, disciplina, dificultad-->

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="nombre" class="form-control" id="hab_nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select type="ap" class="form-control" id="dis_id" >
                                    <option value="" disabled selected>Disciplina</option>
                                    <option value="1" > Pole Fitness </option>
                                    <option value="2" > Telas Aereas </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select type="ap" class="form-control" id="hab_dificultad" >
                                    <option value="" disabled selected>Dificultad</option>
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
                                <textarea class="form-control" id="hab_descripcion" rows="3" placeholder="Descripción ..."></textarea>
                            </div>
                        </div>
                        <!-- Inicia Seccion Habilidades requeridas -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <select type="ap" class="form-control" id="hab_id" >
                                    <option value="" disabled selected>Habilidad Requerida</option>
                                    @foreach($Habilidades as $key => $value)
                                    <option value="{{$value['hab_id']}}" > {{$value['hab_nombre']}} </option>
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
                                            <input value="{{$values['cad_nombre']}}" type="nombre" class="form-control" id="cad_nombre" placeholder="Nombre campo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="nombre" value="{{$values['cad_contenido']}}" class="form-control" id="cad_contenido" placeholder="Contenido campo">
                                        </div>
                                    </div>
                                  </div>
                                  </div>
                  @endforeach
                  @endif
                </div>
                <!-- Termina contariner de campos adicionales -->
                <!-- Boton para añadir campos adicionales -->
                <div class="container row">
                  <div class="col-md-12 text-left">

                      <span class="btn-inner--icon">
                          <a class="btn btn-icon btn-2 btn-outline-info btn-LG" id="añadirHabilidad" role="button" title="AnadirCampo" >
                              <i class="ni ni-fat-add" ></i>
                          </a>
                      </span>
                      <label  > Agregar Campo Adicional</label>



                  </div>

                </div>
                <!-- Termianr botón para añadir campos adicionales -->


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


if({{$Mod=='1'}}){
  var nombre = '{{$Habilidad[0]['hab_nombre']}}';
  var disciplina = '{{$Habilidad[0]['dis_id']}}';
  var dificultad = '{{$Habilidad[0]['hab_dificultad']}}';
  var descripcion = '{{$Habilidad[0]['hab_descripcion']}}';
  var habreq = '{{$HabReq[0]['hab_ant_id']}}';



  $("#hab_nombre").val(nombre);
  $("#dis_id").val(disciplina);
  $("#hab_dificultad").val(dificultad);
  $("#hab_descripcion").val(descripcion);
  $("#hab_id").val(habreq);


}

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
                            '<input type="nombre" class="form-control" id=cad_contenido" placeholder="Contenido campo">'+
                        '</div>'+
                    '</div>'+
                  '</div>'+
                  '</div>';
  $("#campos_adicionales").append(campo_adicional);
});

$("#btn-agregarHabilidad").click(function(){
  var hab_nombre = $('#hab_nombre').val();
  var dis_id = $('#dis_id').val();
  var hab_dificultad =  $('#hab_dificultad').val();
  var hab_descripcion =  $('#hab_descripcion').val();
  var han_id_habilidad_anterior = $('#hab_id').val();
  var campos = [];

  $('#campos_adicionales').children().each(function(){
    var campo = [];
    $(this).find('input').each(function(){
      campo.push($(this).val());
    });
    campos.push(campo);
  });

  var aDatos = {
    'hab_nombre' : hab_nombre,
    'dis_id' : dis_id ,
    'hab_dificultad' :  hab_dificultad,
    'hab_descripcion' :  hab_descripcion,
    'han_id_habilidad_anterior' : han_id_habilidad_anterior,
    'campos' : campos
  };

  $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "{{ asset ('api/crear-habilidad') }}",
        data: aDatos,
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



</script>

@endsection
