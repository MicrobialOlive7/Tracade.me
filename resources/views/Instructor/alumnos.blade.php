@extends('Instructor.templates.master')
@section('alu-active', 'active')
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
                        <form action="{{route('alumnosDelete')}}" method="POST">
                            @csrf
                        <div class="col text-right">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Guardar" href="{{ route('register') }}">
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
                                    <th scope="row"> {{$disciplinas->where('id', $dis_alu->where('alu_id', $alumno->id)->first()['dis_id'] )->first()->dis_nombre}}</th>

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
                                                <a class="dropdown-item" href="{{route('eliminar-alumno', $alumno->id)}}">Eliminar</a>
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
