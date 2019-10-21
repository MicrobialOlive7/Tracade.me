@extends('Instructor.templates.master')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Alumnos</h3>
                    </div>
                        <form >
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" id="customCheck1" type="checkbox">
                                        <label class="custom-control-label" for="customCheck1">Pole Fitness</label>
                                    </div>
                                </div>
                                    <div class="col-md-2">
                                        <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input" id="customCheck2" type="checkbox">
                                        <label class="custom-control-label" for="customCheck2">Telas Aéreas</label>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="nombre" class="form-control" id="alu_nombre" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="ap" class="form-control" id="alu_app" placeholder="Apellido Paterno">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="am" class="form-control" id="alu_apm" placeholder="Apellido Materno">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" id="alu_email" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" id="alu_password" placeholder="Contraseña" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" id="alu_fecha" placeholder="Seleccionar Fecha" type="text" value="Fecha de Nacimiento">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-md-center">
                                    <div class="col-auto">
                                        <div  class="col-md-offset-right-1">
                                            <div class="form-group">
                                    <span class="btn-inner--icon">
                                        <a id="crearAlumno" href="#" class="btn btn-icon btn-2 btn-info btn-lg" role="button" title="Agregar" > Agregar </a>
                                    </span>
                                                <span class="btn-inner--icon">
                                         <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ url('Alumnos') }}"> Cancelar </a>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
    </div>
@endsection

@section('js_content')

<script type="text/javascript">


$("#crearAlumno").click(function (){
  
  var alu_nombre = $("#alu_nombre").val().trim();
  var alu_apellido_paterno = $("#alu_app").val().trim();
  var alu_apellido_materno = $("#alu_apm").val().trim();
  var alu_correo_electronico = $("#alu_email").val().trim();
  var alu_password = $("#alu_password").val().trim();
  var alu_fecha_nacimiento = $("#alu_fecha").val();


  var aDatos = {
  'name': 'valeria',
  'ap_pat': 'de leon',
  'ap_mat': 'ochoa',
  'email': 'vaale-ochoa@gmail.com',
  'fecha': '12/09/1998',
  'password': 'password',
  'bio': 'lalalalalalal'
}


  $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "{{ asset ('register') }}",
        data: aDatos,
        cache: false,
        dataType: "json",
        beforeSend: function (){
          //modal.preloader();
        },
        success: function (result) {
          //modal.close("-preloader");
          console.log(result);
          if(result.estatus === 1){

          }else{

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
