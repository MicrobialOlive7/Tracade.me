@extends('Instructor.templates.master')
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
                        <div class="col text-right">
                            <button class="btn btn-icon btn-2 btn-info btn-sm" type="button">
                                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                            </button>
                            <button class="btn btn-icon btn-2 btn-danger btn-sm" type="button">
                                <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                            </button>

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">

                            <tr>
                                <th scope="col"> <input type="checkbox"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Disciplina</th>
                                <th scope="col">Grupos</th>
                                <th scope="col">Habilidades</th>
                                <th scope="col">Última Habilidad Aprendida</th>
                                <th scope="col">Próxima Habilidad</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> <input type="checkbox"></td>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../public/img/theme/team-2-800x800.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="mb-0 text-sm">Romina Hadid</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row"> Pole fitness </th>
                                <th scope="row" > <a href="{{ url('grupos') }}"> L78M </a>  </th>
                                <th scope="row"> 10 </th>
                                <th scope="row"> <a href="#">Dangerous Brian </a> </th>
                                <th scope="row"> <a href="#"> Fallen Marley </a></th>
                                <th class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Modificar</a>
                                            <a class="dropdown-item" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </th>
                            </tr>
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
        <!-- End of Table -->
@endsection

