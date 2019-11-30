@extends('Instructor.templates.master')
@section('alu-active', 'active')
@section('content')
<!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-primary opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hola, <Strong>Instructor</Strong></h1>
            <p class="text-white mt-0 mb-5">Bienvenido a tu perfil.</p>
            <a href="#!" class="btn btn-default">Guardar Cambios</a>
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
                  Jessica Jones<span class="font-weight-light">, 27</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Instructora
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>Akross de Pole Fitness y Telas Aéreas
                </div>
                <hr class="my-4" />
                <p>Llevo 6 años como instructora de pole fitness y telas aéreas. He practicado pole fitness desde hace 9 años y telas aéreas desde hace 7 años.</p>
                <a href="#">Show more</a>
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
              <form>
                <h6 class="heading-small text-muted mb-4">Información del Usuario</h6>
                <div class="pl-lg-4">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label class="form-control-label" for="input-email">Correo Electrónico</label>
                              <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="ejemplo@ejemplo.com">
                          </div>
                      </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Contraseña</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="ej.ejemplo">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nombre</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Nombre">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Apellido Paterno</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Apellido Paterno">
                      </div>
                    </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Apellido Materno</label>
                              <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Apellido Materno">
                          </div>
                      </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Sobre Mí</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>Sobre Mí</label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">Cuéntanos algo sobre ti....</textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection
