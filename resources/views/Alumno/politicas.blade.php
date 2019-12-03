@extends('Alumno.templates.master')
@extends('layouts.modal')
@section('content')
    <!--<nav class="navbar navbar-top navbar-expand-md navbard-dark" id="navbar-main">
    <div class="container-fluid">
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"> Inicio </a>
    </div>
</nav> -->
    <div class="header bg-gradient-indigo pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 center">
                        <div class="card card-stats mb-4 mb-xl-10">
                            <div  class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="mt-3 mb-0  text-sm text-center">
                                        <span class="h2 font-weight-bold mb-0">  REGLAMENTO DE AKROSS ACROBACIA & FITNESS </span>
                                        </p>
                                        <p class="mt-3 mb-0 text-muted text-md text-center">
                                            <span class="text-gray-dark"> El siguiente reglamento esta pensado para el mejor uso, convivencia y disfrute de las instalaciones y clases en Akross Acrobacia & Fitness.</span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row mb-5">
            <div class="col-xl-6 col-lg-6 ">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  POLITICAS DE CANCELACION DE CLASES </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark"> Todas las clases podrán ser canceladas a través de whatsapp siempre que se cancelen con más de una hora de antelación.</span></p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">Si la alumna no cancela su clase, y no asiste a la misma, perderá dicha clase, y no podrá reponerla.</span></p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">Si la clase reservada por la alumna tiene menos de 3 alumnas, se cancelará la clase, y la alumna podrá reponerla más adelante. </span>
                                </p>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  POLITICA DE REPOSICION DE CLASES. </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark"> Las clases se podrán reponer en cualquier otra clase.</span></p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">Las clases a reponer, deberán ser consumidas en el mismo mes en el que se contrato la clase.</span></p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">En los días feriados de carácter obligatorio Akross permanecerá cerrado y las clases de esos días se podrán reponer en un día diferente.</span>
                                </p>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  VESTIMENTA PARA POLE FITNESS. </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark"> La ropa para Pole Fitness deberá ser licra o short corto y camiseta de tirantes o top.</span></p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">Deberá ser ropa especialmente diseñada para la práctica del pole dance, no siendo permitido el uso de bikinis, o ropa de corte de ropa interior.</span></p>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  VESTIMENTA PARA TELAS AÉREAS </span>
                                </p>
                                <p class="mt-3 mb-xl-6 text-muted text-md text-center">
                                    <span class="text-gray-dark"> La ropa para Telas Aéreas debe consistir de leggins y camisetas de manga corta o larga.</span></p>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  EN LA CLASE. </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark"> Las alumnas se comprometen a llegar de manera puntual. El tiempo limite de ingreso es de 10 minutos después de la hora oficial del comienzo de la clase.</span></p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">Las alumnas se abstendrán de usar cremas hidratantes los días de clase de pole fitness, ya que esto evitaría que se adhirieran al tubo, y dejarían el tubo impracticable para las siguientes usuarias.</span></p>
                                <p class="mt-3 mb-5 text-muted text-md text-center">
                                    <span class="text-gray-dark">Las alumnas se abstendrán de traer a otras personas a clase. Si vienen con hijos, estos deberán permanecer en la recepción, esto para evitar accidentes y garantizar que la instructora y alumnas puedan tener el ambiente idóneo para dar y recibir las clases.</span>
                                </p>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  SEGURIDAD Y RESPONSABILIDAD. </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">Las alumnas se comprometen a seguir en todo momento las indicaciones de la instructora, con el fin de evitar posibles lesiones tanto en ellas mismas como en otras personas. Las alumnas obedecerán en todo momento las directrices de la instructora, limitándose a hacer los ejercicios en su presencia o bajo su dirección. Las alumnas son responsables en todo momento de su propia integridad física.</span></p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">Las alumnas se comprometen al cuidado de las instalaciones de Akross Acrobacia & Fitness, evitando el uso de anillos, pulseras, piercings o cualquier objeto que pueda rayar los tubos.</span></p>
                                <p class="mt-3 mb-3 text-muted text-md text-center">
                                    <span class="text-gray-dark">Akross no se hace responsable de los objetos personales de las alumnas.</span>
                                </p>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  POLITICA DE PAGOS. </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">Los pagos de las clases impartidas se harán de manera mensual, del 1 al 8 de cada mes, bien en las instalaciones o por transferencia bancaria.</span></p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">Cada día fuera de la fecha de pago tiene un recargo de $85 pesos.</span></p>
                                <p class="mt-3 mb-3 text-muted text-md text-center">
                                    <span class="text-gray-dark">En caso de que el pago se haga por medio de transferencia, se deberá mandar foto de comprobante por whatsapp.</span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-sm text-center">
                                    <container>
                                    <img class="img-responsive " src="{{asset('../public/img/akrosslogo.jpg')}}" alt="logo">
                                    </container>
                                </p>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="card card-stats mb-4 mb-xl-10">
                    <div  class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  TARIFAS DE CLASE. </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-sm text-center">
                                    <img src="{{asset('../public/img/pagos.jpg')}}" alt="costos">
                                </p>
                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
