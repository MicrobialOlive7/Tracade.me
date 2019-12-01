@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('gru-active', 'active')
@section('content')

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Grupo: <strong>{{$grupo->gru_nombre}}</strong></h3>
                        <div class="col text-right">

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">

                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Disciplina</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alumnosGrupo as $alumnoGrupo)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../img/theme/team-2-800x800.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{$alumnos->find($alumnoGrupo->alu_id)->alu_nombre}} {{$alumnos->find($alumnoGrupo->alu_id)->alu_apellido_paterno}} {{$alumnos->find($alumnoGrupo->alu_id)->alu_apellido_materno}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="row"> {{$disciplinas->where('id', $dis_alu->where('alu_id', $alumnos->find($alumnoGrupo->alu_id)->id)->first()['dis_id'] )->first()->dis_nombre}}</th>

                                    <th class="text-right">
                                        <a class="btn btn-icon btn-2 btn-danger btn-sm" role="button" title="Guardar" href="#"  onclick="eliminarAlumno('{{$alumnoGrupo->id}}', '{{$grupo->id}}', '{{$alumnos->find($alumnoGrupo->alu_id)->alu_nombre}}')">
                                            <i class="ni ni-fat-remove" ></i>
                                        </a>

                                    </th>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Alumnos disponibles</h3>
                        <div class="col text-right">

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">

                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Disciplina</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alumnosNuevos as $alumno)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../img/theme/team-2-800x800.jpg">
                                            </a>
                                            <div class="media-body">

                                                <span class="mb-0 text-sm">{{$alumno->alu_nombre}} {{$alumno->alu_apellido_paterno}} {{$alumno->alu_apellido_materno}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="row"> {{$disciplinas->where('id', $dis_alu->where('alu_id', $alumno->id)->first()['dis_id'] )->first()->dis_nombre}}</th>
                                    <th class="text-right">
                                        <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Guardar" onclick="agregarAlumno('{{$id}}', '{{$alumno->id}}', '{{$alumno->alu_nombre}}')">
                                            <i class="ni ni-fat-add" ></i>
                                        </a>
                                    </th>
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

function agregarAlumno(gru_id, alu_id, alu_nombre){
  $("#warning_modal").modal().find('.modal-title').text('Agregar alumno a grupo');
  $("#warning_modal").modal().find('.message-text').empty();
  $("#warning_modal").modal().find('.message-text').append('¿Estás seguro de agregar al alumno ' + alu_nombre + ' al grupo?');
  $("#warning_modal").modal().find('#agregar').val(gru_id);
  $("#warning_modal").modal().find('#agregar').attr("href", "{{asset('addAlumno')}}" + '/' + gru_id + '/' + alu_id  );
}

function eliminarAlumno(alug_id, gru_id, alu_nombre){
  $("#eliminar_degrupo").modal().find('.modal-title').text('Eliminar a alumno de grupo');
  $("#eliminar_degrupo").modal().find('.message-text').empty();
  $("#eliminar_degrupo").modal().find('.message-text').append('¿Estás seguro de eliminar al alumno ' + alu_nombre + ' del grupo?');
  $("#eliminar_degrupo").modal().find('#eliminar').val(gru_id);
  $("#eliminar_degrupo").modal().find('#eliminar').attr("href", "{{asset('deleteAlumno')}}" + '/' + alug_id + '/' + gru_id  );

}

</script>

@endsection
