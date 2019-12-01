@extends('Alumno.templates.master')
@section('per-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 400px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-indigo opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">Hola, <Strong>{{Auth::user()->alu_nombre}}</Strong></h1>
                    <p class="text-white mt-0 mb-5">Bienvenido a tu perfil.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="../public/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top pt-0 pt-md-9">
                        <div class="text-center">
                            <h3>
                                {{Auth::user()->alu_nombre}} {{Auth::user()->alu_apellido_materno}}<span class="font-weight-light">, {{\Carbon\Carbon::parse(Auth::user()->alu_fecha_nacimiento)->age}}</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Akross
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Disciplina
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Disciplinaa
                            </div>
                            <p>{{Auth::user()->alu_biografia}}</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Mi cuenta</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('perfilAlumnoUpdate')}}">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Información del Usuario</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Correo Electrónico</label>
                                            <input type="email" id="input-email" name="email" class="form-control form-control-alternative" value="{{Auth::user()->email}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Contraseña</label>
                                            <input type="password" id="input-username" name="password" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Nombre</label>
                                            <input type="text" id="input-first-name" name="nombre" value="{{Auth::user()->alu_nombre}}" class="form-control form-control-alternative" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Apellido Paterno</label>
                                            <input type="text" id="input-last-name" class="form-control form-control-alternative" name="apellido_paterno" value="{{Auth::user()->alu_apellido_paterno}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Apellido Materno</label>
                                            <input type="text" id="input-last-name" class="form-control form-control-alternative" name="apellido_materno" value="{{Auth::user()->alu_apellido_materno}}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <!-- Description -->
                            <h6 class="heading-small text-muted mb-4">Sobre Mí</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label>Bio</label>
                                    <textarea rows="4" class="form-control form-control-alternative" name="bio">{{Auth::user()->alu_biografia}}</textarea>
                                </div>

                                <button type="submit" class="btn btn-dribbble">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
