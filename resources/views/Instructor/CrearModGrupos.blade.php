@extends('Instructor.templates.master')
@section('gru-active', 'active')
@extends('layouts.modal')
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="nombre" class="form-control" id="gru_nombre" @if($Mod=='1')
                                 value="{{$Grupo['gru_nombre']}}"
                                @else
                                  value=""
                                @endif
                                placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group md-4">
                                    <select type="ap"
                                    @if($Mod=='1')
                                     value="{{$Horario[0]}}"
                                    @else
                                      value=""
                                    @endif
                                     class="form-control" id="gru_dia" >
                                        <option value="" disabled                                     @if($Mod=='0')
                                                                             selected
                                                                            @endif >Día</option>
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
                                    <select type="ap"
                                    @if($Mod=='1')
                                     value="{{$Grupo['dis_id']}}"
                                    @else
                                      value=""
                                    @endif
                                    class="form-control" id="id_disciplina" >
                                        <option value="" disabled                                     @if($Mod=='0')
                                                                             selected
                                                                            @endif >Disciplina</option>
                                        <option value="1"> Telas Aéreas </option>
                                        <option value="2"> Pole </option>
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
                                  <select type="ap"
                                  @if($Mod=='1')
                                   value="{{$Grupo['aul_id']}}"
                                  @else
                                    value=""
                                  @endif
                                  class="form-control" id="id_aula" >
                                      <option value="" disabled                                     @if($Mod=='0')
                                                                           selected
                                                                          @endif >Aula</option>
                                      <option value="1"> Aula01 </option>
                                      <option value="2"> Aula02 </option>
                                  </select>
                              </div>
                          </div>
                      </div>


                        <div class="col-auto">
                            <select type="ap" class="form-control"
                             @if($Mod=='1')
                               value="{{$Horario[1]}}"
                              @else
                                value=""
                              @endif
                              id="gru_hora_de" >
                                <option value="" disabled                                     @if($Mod=='0')
                                                                     selected
                                                                    @endif>Hora</option>
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
                            <input                              @if($Mod=='1')
                                                           value="{{$Horario[2]}}"
                                                          @else
                                                            value=""
                                                          @endif  class="form-control" id="gru_minutos_de" placeholder="Min" type="number" max="59" min="00">
                        </div>
                        <div class="col-auto">
                            <select type="ap" class="form-control"                              @if($Mod=='1')
                                                           value="{{$Horario[3]}}"
                                                          @else
                                                            value=""
                                                          @endif id="gru_hora_a" >
                                <option value="" disabled                                     @if($Mod=='0')
                                                                     selected
                                                                    @endif>Hora</option>
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
                            <input class="form-control"                              @if($Mod=='1')
                                                           value="{{$Horario[4]}}"
                                                          @else
                                                            value=""
                                                          @endif placeholder="Min" id="gru_minutos_a" type="number" max="59" min="00">
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
                                  @if($Mod==0)
                                    <span class="btn-inner--icon">
                                        <a class="btn btn-icon btn-2 btn-info btn-lg" id="btn-agregarGrupo" role="button" title="Agregar"> Agregar </a>
                                    </span>
                                    @else
                                    <span class="btn-inner--icon">
                                        <a class="btn btn-icon btn-2 btn-info btn-lg" id="btn-modificarGrupo" role="button" title="Agregar"> Modificar </a>
                                    </span>
                                  @endif
                                    <span class="btn-inner--icon">
                                         <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ url('Grupos') }}"> Cancelar </a>
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

$("#btn-modificarGrupo").click(function(){
  var gru_nombre = $("#gru_nombre").val().trim();
  var gru_horario = $("#gru_dia").val() + ' ' + $("#gru_hora_de").val()  + ':' +  $("#gru_minutos_de").val() + ' - ' + $("#gru_hora_a").val() + ':' + $("#gru_minutos_a").val();
  var dis_id = $("#id_disciplina").val();
  var aul_id = $("#id_aula").val();
  var gru_id='';

  var aDatos = {
  'gru_id': gru_id,
  'gru_nombre': gru_nombre,
  'gru_horario': gru_horario,
  'dis_id': dis_id,
  'aul_id': aul_id
}

  $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "{{ asset ('api/modificar-grupo') }}",
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
            console.log("Sacar modal y pasar a grupos");
            window.location.href = "{{ asset('/Grupos') }}";

          }else{
            console.log("Sacar modal error y pasar a grupos")
            window.location.href = "{{ asset('/Grupos') }}";
          }
        },
        complete: function () {
        },
        error: function (result) {
          console.log("errorsin");
        }
      });


});

$("#btn-agregarGrupo").click(function (){

  var gru_nombre = $("#gru_nombre").val().trim();
  var gru_horario = $("#gru_dia").val() + ' ' + $("#gru_hora_de").val()  + ':' +  $("#gru_minutos_de").val() + ' - ' + $("#gru_hora_a").val() + ':' + $("#gru_minutos_a").val();
  var dis_id = $("#id_disciplina").val();
  var aul_id = $("#id_aula").val();

  console.log(gru_nombre, gru_horario, dis_id, aul_id)

  var aDatos = {
  'gru_nombre': gru_nombre,
  'gru_horario': gru_horario,
  'dis_id': dis_id,
  'aul_id': aul_id
}


$.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      type: "POST",
      url: "{{ asset ('api/crear-grupo') }}",
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
          console.log("Sacar modal y pasar a grupos");
          window.location.href = "{{ asset('/Grupos') }}";

        }else{
          console.log("Sacar modal error y pasar a grupos")
          window.location.href = "{{ asset('/Grupos') }}";
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
