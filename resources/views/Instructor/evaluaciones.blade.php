@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('hab-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Evaluaciones</strong></h3>
                        <div class="col text-right">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Agregar" href="{{ url('AgregarHabilidades') }}">
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
                                <th scope="col">Calificacion</th>
                                <th scope="col">Comentarios</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>


                              @foreach($evaluaciones as $evaluacion)
                              <tr>
                                <td> <input type="checkbox"></td>
                                  <th scope="row">
                                      <div class="media align-items-center">
                                          <a href="#" class="avatar rounded-circle mr-3">
                                              <img alt="Image placeholder" src="">
                                          </a>
                                          <div class="media-body">

                                          </div>
                                      </div>
                                  </th>
                                <th scope="row">
                                    @for($i = 0;$i < $evaluacion->eva_calificacion;$i++)
                                        <i class="text-yellow ti-star"></i>
                                        @endfor
                                </th>
                                <th scope="row"> {{$evaluacion->eva_comentario}} </th>

                              </tr>

                              @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-header border-0">

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Table -->
@endsection

@section('js_content')


<script type="text/javascript">

function  eliminarHabilidad(hab_nombre, hab_id){

  $("#delete_modal").modal().find('.modal-title').text('Eliminar habilidad');
  $("#delete_modal").modal().find('.message-text').empty();
  $("#delete_modal").modal().find('.message-text').append('¿Estás seguro de eliminar la habilidad ' + hab_nombre + '?');
  $("#delete_modal").modal().find('#borrar').val(hab_id);
  $("#delete_modal").modal().find('#borrar').attr("href", "{{asset('borrar-habilidad')}}" + '/' + hab_id );

}
</script>

@endsection