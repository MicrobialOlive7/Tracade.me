@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('alu-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <form action="{{route('evaluacionesDelete', [$habilidad->id, $alumno->id])}}" method="POST">
                    @csrf
                <div class="card shadow">

                    <div class="card-header border-0">

                        <div class="mb-4">
                            <a href="{{route('habilidades-alumno', $alumno->id)}}">
                                <i class="text-pink ti-back-left" style="font-size: 16px"></i>
                                <span class="mb-0 " style="font-size: 16px">{{$alumno->alu_nombre}} {{$alumno->alu_apellido_paterno}}</span>
                            </a>
                        </div>

                        <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="{{asset('storage/habilidades/'.$habilidad['id'].'/'.$habilidad['hab_imagen'])}}">
                            </a>
                            <div class="media-body">
                                <h3 class="mb-0">{{$habilidad->hab_nombre}}</h3><p>Registro de evaluaciones</p>
                            </div>
                        </div>


                        <div class="col text-right">
                            @if(!$evaluaciones->where('hab_id', $habilidad->id)->where('eva_calificacion',3)->count())
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Agregar" href="{{ route('evaluar', [$habilidad->id, $alumno->id]) }}">
                                    <i class="ni ni-fat-add" ></i>
                                </a>
                            </span>
                            @endif
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
                                <th scope="col">Fecha</th>
                                <th scope="col">Calificacion</th>
                                <th scope="col">Comentarios</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>


                              @foreach($evaluaciones as $evaluacion)
                              <tr>
                                  <td><input type="checkbox" name="borrar[]" value="{{$evaluacion->id}}"></td>
                                  <th scope="row">
                                      <span class="mb-0 text-sm">{{$evaluacion['created_at']}}</span>
                                  </th>

                                <th scope="row">
                                    @for($i = 0 ; $i < $evaluacion['eva_calificacion']; $i++)
                                        <i class="text-yellow ti-star"></i>
                                    @endfor
                                </th>
                                <th> {{$evaluacion['eva_comentario']}}</th>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{route('modificar-evaluacion', [$habilidad->id, $alumno->id, $evaluacion->id])}}">Modificar</a>
                                            <a class="dropdown-item" onclick="eliminarEvaluacion('{{$habilidad->id}}', '{{$alumno->id}}', '{{$evaluacion->id}}')" >Eliminar</a>
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
                    {{ $evaluaciones->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Table -->
@endsection

@section('js_content')


<script type="text/javascript">

function  eliminarEvaluacion(hab_id, alu_id, eva_id){

  $("#eliminar_evaluacion").modal().find('.modal-title').text('Eliminar evaluación');
  $("#eliminar_evaluacion").modal().find('.message-text').empty();
  $("#eliminar_evaluacion").modal().find('.message-text').append('¿Estás seguro de eliminar esta evaluación?');
  $("#eliminar_evaluacion").modal().find('#eliminar').val(hab_id);
  $("#eliminar_evaluacion").modal().find('#eliminar').attr("href", "{{asset('evaluacionDelete')}}" + "/" + hab_id +"/"+ alu_id +"/"+ eva_id );

}
</script>

@endsection
