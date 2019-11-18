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
                        <h3 class="mb-0">Habilidades</h3>
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
                                <th scope="col">Dificultad</th>
                                <th scope="col">Disciplina</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>


                              @foreach($habilidades as $key => $value)
                              <tr>
                                <td> <input type="checkbox"></td>
                                <th scope="row"> {{$value->hab_nombre}}  </th>
                                <th scope="row"> @if($value->hab_dificultad==1)
                                                    Principiante
                                                 @elseif($value->hab_dificultad==2)
                                                    Intermedio
                                                 @elseif($value->hab_dificultad==3)
                                                    Avanzado
                                                 @endif
                              </th>
                                <th scope="row"> {{$disciplinas->where('id', $value->id)->first()['dis_nombre']}} </th>
                                <th></th>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ url('ModificarHabilidades/'. $value->id) }}">Modificar</a>
                                            <a class="dropdown-item" href="#" onclick="eliminarHabilidad('{{$value->hab_nombre}}','{{$value->id}}')" >Eliminar</a>
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

function  eliminarHabilidad(hab_nombre, hab_id){

  $("#delete_modal").modal().find('.modal-title').text('Eliminar habilidad');
  $("#delete_modal").modal().find('.message-text').empty();
  $("#delete_modal").modal().find('.message-text').append('¿Estás seguro de eliminar la habilidad ' + hab_nombre + '?');
  $("#delete_modal").modal().find('#borrar').val(hab_id);
  $("#delete_modal").modal().find('#borrar').attr("href", "{{route('borrar-habilidad', '". hab_id ."')}}");
}


</script>

@endsection
