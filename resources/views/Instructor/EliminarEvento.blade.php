@extends('Instructor.templates.master')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Eventos</h3>
            </div>
            <!-- Inicia Form -->
            <form method="POST" action="{{route('eventoDelete')}}">
                @csrf
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <select onchange="" type="ap" class="form-control" id="exampleFormControlInput1" name="id" required>
                                    <option value="" disabled selected>Evento a Eliminar</option>
                                    @foreach($eventos as $evento)
                                        <option value="{{$evento -> id}}">{{$evento -> eve_nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


        <!-- Inician Botones de Guardado -->
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-auto">
                    <div  class="col-md-offset-right-1">
                        <div class="form-group">
                            <span class="btn-inner--icon">
                                <button type="submit" class="btn btn-icon btn-2 btn-info btn-lg">
                                    {{ __('Eliminar') }}
                                </button>
                            </span>
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-danger btn-lg" role="button" title="Cancelar" href="{{ route('calendario') }}">
                                    {{ __('Cancelar') }}
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Terminan Botones de Guardado -->
        </form>
        <!-- Termina Form -->
    </div>
    </div>
@endsection
