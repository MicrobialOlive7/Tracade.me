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
                        <h3 class="mb-0">Habilidades realizadas por <strong>{{$alumno->alu_nombre}}</strong></h3>

                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">

                            <tr>
                                <th scope="col"> <input type="checkbox"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Calificacion</th>
                                <th scope="col">Comentarios</th>

                            </tr>
                            </thead>
                            <tbody>


                              @foreach($hab_apr as $key => $value)
                              <tr>
                                <td> <input type="checkbox"></td>
                                  <th scope="row">
                                      <div class="media align-items-center">
                                          <a class="avatar rounded-circle mr-3">
                                              <img alt="Image placeholder" src="{{asset('storage/habilidades/'.$value['id'].'/'.$value['hab_imagen'])}}">
                                          </a>
                                          <div class="media-body">
                                              @if($evaluaciones->where('hab_id', $value['id'])->first()->eva_calificacion != 3)
                                              <a href="{{route('evaluaciones', [$value['id'], $alumno['id']])}}">
                                                <span class="mb-0 text-sm">{{$value['hab_nombre']}}</span>
                                              </a>
                                                  @else
                                                  <span class="mb-0 text-sm">{{$value['hab_nombre']}}</span>
                                              @endif
                                          </div>
                                      </div>
                                  </th>
                                <th scope="row">

                                        @for($i = 0 ; $i < $evaluaciones->where('hab_id', $value['id'])->first()->eva_calificacion; $i++)
                                            <i class="text-yellow ti-star"></i>
                                        @endfor


                                </th>
                                <th scope="row"> {{$evaluaciones->where('hab_id', $value['id'])->first()->eva_comentario}}</th>

                              </tr>

                              @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-header border-0">
                        {{ $hab_apr->links() }}
                    </div>
                </div>
                <br>
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Habilidades por realizar</h3>

                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">

                            <tr>
                                <th scope="col"> <input type="checkbox"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Disciplina</th>

                            </tr>
                            </thead>
                            <tbody>


                            @foreach($habilidades as $key => $value)
                                <tr>
                                    <td> <input type="checkbox"></td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="{{asset('storage/habilidades/'.$value['id'].'/'.$value['hab_imagen'])}}">
                                            </a>

                                            <a href="{{route('evaluaciones', [$value['id'], $alumno['id']])}}">
                                                <span class="mb-0 text-sm">{{$value['hab_nombre']}}</span>
                                            </a>
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

                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
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
  $("#delete_modal").modal().find('#borrar').attr("href", "{{asset('borrar-habilidad')}}" + '/' + hab_id );

}
</script>

@endsection
