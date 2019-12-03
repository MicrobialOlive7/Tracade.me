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
                <form action="{{route('habilidadesDelete')}}" class="card shadow" method="POST">
                    @csrf
                    <div class="card-header border-0">
                        <h3 class="mb-0">Habilidades</h3>

                        <div class="col text-right">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Agregar" href="{{ route('crear-habilidad') }}">
                                    <i class="ni ni-fat-add" ></i>
                                </a>
                            </span>
                            <span class="btn-inner--icon">
                                <button type="submit" class="btn btn-icon btn-2 btn-danger btn-sm">
                                    <i class="ni ni-fat-remove" ></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">

                            <tr>
                                <th scope="col"> <input type="checkbox" id="borrarTodo" name="borrarTodo"></th>
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
                                  <td><input type="checkbox" name="borrar[]" value="{{$value->id}}"></td>
                                  <th scope="row">
                                      <div class="media align-items-center">
                                          <a href="#" class="avatar rounded-circle mr-3">
                                              <img alt="Image placeholder" src="{{asset('storage/habilidades/'.$value['id'].'/'.$value['hab_imagen'])}}">
                                          </a>
                                          <div class="media-body">
                                              <a href="{{route('detalle-Habilidad', $value['id'])}}">
                                                <span class="mb-0 text-sm">{{$value['hab_nombre']}}</span>
                                              </a>
                                          </div>
                                      </div>
                                  </th>
                                <th scope="row">
                                    @if($value['hab_dificultad'] == 1)
                                        Principiante
                                    @elseif($value['hab_dificultad'] == 2)
                                        Intermedio
                                    @else
                                        Avanzado
                                    @endif
                                </th>
                                <th scope="row"> {{$disciplinas->where('id',$value['dis_id'])->first()->dis_nombre}} </th>
                                <th></th>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ route('modificar-habilidad', $value['id']) }}">Modificar</a>
                                            <a class="dropdown-item" href="#" onclick="eliminarHabilidad('{{$value['hab_nombre']}}','{{$value['id']}}')" >Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                              </tr>

                              @endforeach

                            </tbody>
                        </table>
                    </div>
                    </form>
                    <div class="card-header border-0">
                        {{ $habilidades->links() }}
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
  $("#delete_modal").modal().find('#borrar').attr("href", "{{asset('habilidadDelete')}}" + '/' + hab_id );

}
</script>

@endsection
