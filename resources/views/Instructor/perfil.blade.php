@extends('Instructor.templates.master')
@section('per-active', 'active')
@section('content')
  <!-- Header -->
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 400px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-primary opacity-8"></span>
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
                  <img src="{{asset('storage/alumnos/'.Auth::user()->id.'/perfil.png')}}" class="rounded-circle">
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
                <i class="ni location_pin mr-2"></i>{{$academia->aca_nombre}}
              </div>
              <div class="h5 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Plan
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>{{$plan->pla_nombre}}
              </div>

              <hr class="my-4" />
              <p>{{Auth::user()->alu_biografia}}</p>

            </div>
          </div>
        </div>
        <div class="mb-4"></div>
        <div class="card card-profile shadow ">
          <div class="card-body border-top pt-0 pt-md-2">
            <div class="text-center mb-2">
              <h3>
                Estado de cuenta
              </h3>
              <hr class="my-4" />
              @if($pago->created_at->diffInDays($fecha_corte) < 30)
                <div class="h4 text-left text-center">
                  <span class="font-weight-700  text-green">Tu pago esta al corriente</span>
                </div>
                <div class="h4 text-left">
                  <span class="font-weight-700">Paga antes del:</span>
                  <span class="font-weight-300">{{\Carbon\Carbon::parse($fecha_corte)->addMonthsNoOverflow(1)->locale('es_MX')->isoFormat('MMMM Do YYYY')}}</span>
                </div>
                @else

                <div class="h4 text-left text-center">
                  <span class="font-weight-700 text-red">Debes realizar tu pago</span>
                </div>
                <div class="h4 text-left">
                  <span class="font-weight-700">Paga antes del:</span>
                  <span class="font-weight-300
                  @if($fecha_corte->diffInDays(\Carbon\Carbon::now()) < 5)
                    text-danger
                  @else
                    text-green
                  @endif
                    ">{{\Carbon\Carbon::parse($fecha_corte)->locale('es_MX')->isoFormat('MMMM Do YYYY')}}</span>
                </div>
              @endif
              <div class="h4 text-left">
                <span class="font-weight-700">Ultimo pago: </span><span class="font-weight-300">{{\Carbon\Carbon::parse($pago->created_at)->locale('es_MX')->isoFormat('MMMM Do YYYY')}}</span>
              </div>
              @if($pago->created_at->diffInDays($fecha_corte) >= 30)
                <div id="paypal-button"></div>
                @endif
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
            <form method="POST" action="{{route('adminUpdate')}}">
              @csrf
              <h6 class="heading-small text-muted mb-4">Información del Usuario</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Correo Electrónico</label>
                      <input type="email" id="input-email" name="email" class="form-control form-control-alternative" value="{{Auth::user()->email}}">
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
                      <input type="text" id="input-first-name" name="nombre" value="{{Auth::user()->alu_nombre}}" class="form-control form-control-alternative">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">Apellido Paterno</label>
                      <input type="text" id="input-last-name" class="form-control form-control-alternative" name="apellido_paterno" value="{{Auth::user()->alu_apellido_paterno}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">Apellido Materno</label>
                      <input type="text" id="input-last-name" class="form-control form-control-alternative" name="apellido_materno" value="{{Auth::user()->alu_apellido_materno}}">
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

    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
      var total = {{$precio}};

      paypal.Button.render({
        env: 'sandbox', // sandbox | production

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
        client: {
          sandbox:    'AbM9ljm6nbmbfuro_f1_9oC5ViOnOIVMvQSBI4ije_UKdBPMTPdJW6U6Ad2NiVWN5JX53tYcr1IpU8yD',
          production: ''
        },


        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,

        // payment() is called when the button is clicked
        payment: function(data, actions) {

          // Make a call to the REST api to create the payment
          return actions.payment.create({
            payment: {
              transactions: [
                {
                  amount: { total: total.toFixed(2), currency: 'MXN' }//"'"+total.toFixed(2)+"'"
                }
              ]
            }
          });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

          // Make a call to the REST api to execute the payment
          return actions.payment.execute().then(function() {
            window.location = '{{route('planCreate', [$academia,$precio])}}';
          });
        }
      }, '#paypal-button');
    </script>
@endsection
