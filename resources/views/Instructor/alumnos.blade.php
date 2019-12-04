@extends('Instructor.templates.master')
@section('alu-active', 'active')
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
                        <h3 class="mb-0">Alumnos</h3>
                        @if(Session::has('flash_message'))
                        <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                        @elseif(Session::has('error_message'))
                        <div class="alert alert-success">{{Session::get('error_message')}}</div>
                        @elseif(Session::has('success_delete_msg'))
                        <div class="alert alert-success">{{Session::get('success_delete_msg')}}</div>
                        @elseif(Session::has('error_delete_msg'))
                        <div class="alert alert-danger">{{Session::get('error_delete_msg')}}</div>
                        @elseif($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <strong>Ups!</strong> Ha habido un error, inténtalo más tarde.
                        </div>
                        @elseif(Session::has('select_error'))
                        <div class="alert alert-danger">{{Session::get('select_error')}}</div>
                        @elseif(Session::has('select_success'))
                        <div class="alert alert-success">{{Session::get('select_success')}}</div>
                        @endif
                        <form action="{{route('alumnosDelete')}}" method="POST" id="masivo" >
                            @csrf
                        <div class="col text-right">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Guardar" href="{{ route('register') }}">
                                    <i class="ni ni-fat-add" ></i>
                                </a>
                            </span>
                            <span class="btn-inner--icon">
                                <a role="button" onclick="eliminarAlumnos()" class="btn btn-icon btn-2 btn-danger btn-sm">
                                    <i class="ni ni-fat-remove" ></i>
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">

                            <tr>
                                <th scope="col"> <input type="checkbox" id="borrarTodo" name="borrarTodo"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Disciplina</th>
                                <th scope="col">Grupos</th>
                                <th scope="col">Habilidades</th>
                                <th scope="col">Última Habilidad Aprendida</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alumnos as $alumno)
                                <tr>
                                    <td><input type="checkbox" name="borrar[]" value="{{$alumno->id}}"></td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="{{route('habilidades-alumno', $alumno['id'])}}" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="{{asset('storage/alumnos/'.$alumno->id.'/perfil.png')}}">
                                            </a>
                                            <div class="media-body">
                                                <a href="{{route('habilidades-alumno', $alumno['id'])}}">
                                                    <span class="mb-0 text-sm">{{$alumno->alu_nombre}} {{$alumno->alu_apellido_paterno}} {{$alumno->alu_apellido_materno}}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="row"> @if($disciplinas->where('id', $dis_alu->where('alu_id', $alumno->id)->first()['dis_id'] )->first() == null)
                                      -
                                     @else
                                    {{$disciplinas->where('id', $dis_alu->where('alu_id', $alumno->id)->first()['dis_id'] )->first()->dis_nombre}}
                                    @endif</th>

                                    <th scope="row" > <a href="{{ route('agregar-alumnos', intval($grupos->where('id', $gru_alu->where('alu_id', $alumno->id)->first()['gru_id'])->first()['id'])) }}"> {{$grupos->where('id', $gru_alu->where('alu_id', $alumno->id)->first()['gru_id'])->first()['gru_nombre']}} </a>  </th>
                                    <th scope="row"> {{ $habilidadesT->where('alu_id', $alumno->id)->count()}} </th>
                                    @if($habilidadesT->where('alu_id', $alumno->id)->count() != 0)
                                        <th scope="row"><a href="#"> {{($habilidades->where('id',$habilidadesT->where('alu_id', $alumno->id)->last()->hab_id)->last()->hab_nombre)}}</a> </th>
                                    @else
                                        <th></th>
                                    @endif
                                        <th class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('modificar-alumno-vista', $alumno->id) }}">Modificar</a>
                                                <a class="dropdown-item" onclick="eliminarAlumno('{{$alumno->alu_nombre}}','{{$alumno->id}}')">Eliminar</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    </form>
                    <div class="card-header border-0">
                            {{ $alumnos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Table -->

@endsection
@section('js_content')


<script type="text/javascript">

function  eliminarAlumno(alu_nombre, alu_id){

  $("#delete_modal").modal().find('.modal-title').text('Eliminar alumno');
  $("#delete_modal").modal().find('.message-text').empty();
  $("#delete_modal").modal().find('.message-text').append('¿Estás seguro de eliminar al alumno ' + alu_nombre + '?');
  $("#delete_modal").modal().find('#borrar').val(alu_id);
  $("#delete_modal").modal().find('#borrar').attr("href", "{{asset('eliminar-alumno')}}" + '/' + alu_id );

}

function eliminarAlumnos(){
  $("#delete_masivo_modal").modal().find('.modal-title').text('Eliminar alumnos');
  $("#delete_masivo_modal").modal().find('.message-text').empty();
  $("#delete_masivo_modal").modal().find('.message-text').append('¿Estás seguro de eliminar los alumnos seleccionados?');
  $("#delete_masivo_modal").modal().find('#borrar').val();
  $("#delete_masivo_modal").modal().find('#borrar').attr("onclick", "$('#masivo').submit()" );
}

</script>

@endsection
