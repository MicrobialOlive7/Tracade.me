@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Grupos</h3>
                        <div class="col text-right">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Agregar" href="{{ route('crear-grupo') }}">
                                    <i class="ni ni-fat-add" ></i>
                                </a>
                            </span>
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-danger btn-sm" role="button" title="Eliminación Masiva" href="{{ url('') }}">
                                    <i class="ni ni-fat-remove" ></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">

                            <tr>
                                <th scope="col"> <input type="checkbox"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Día</th>
                                <th scope="col">Horario</th>
                                <th scope="col">Alumnos</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($Grupos as $grupo)
                              <tr>
                                <td> <input type="checkbox"></td>
                                <th scope="row"> {{$grupo->gru_nombre}}  </th>
                                <th scope="row"> {{$grupo->gr_dia}}  </th>
                                <th scope="row"> {{$grupo->gru_hora}} </th>
                                <td>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../public/img/theme/team-1-800x800.jpg" class="rounded-circle">
                                        </a>
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../public/img/theme/team-2-800x800.jpg" class="rounded-circle">
                                        </a>
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../public/img/theme/team-3-800x800.jpg" class="rounded-circle">
                                        </a>
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../public/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ route('modificar-grupo', $grupo->id) }}">Modificar</a>
                                            <a class="dropdown-item" href="{{route('eliminar-grupo', $grupo->id)}}">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                              </tr>
                              @endforeach

                         </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End of Table -->
@endsection

@section('js_content')


<script type="text/javascript">

function  eliminarGrupo(gru_nombre, gru_id){

  $("#delete_modal").modal().find('.modal-title').text('Eliminar grupo');
  $("#delete_modal").modal().find('.message-text').empty();
  $("#delete_modal").modal().find('.message-text').append('¿Estás seguro de eliminar el grupo ' + gru_nombre + '?');
  $("#delete_modal").modal().find('#borrar').val( gru_id);
}

$("#borrar").click(function(){
    var gru_id = $("#borrar").val();

    var aDatos={
      'gru_id' : gru_id
    };

    $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          type: "POST",
          url: "{{ asset ('api/borrar-grupo') }}",
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
})
</script>
@endsection
