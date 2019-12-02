@extends('Corporativa.templates.master')
@section('content')

<!-- Start of download
    ============================================= -->
<section id="download-area" class="download-section">
    <div class="container">
        <div class="row section-content">
            <div class="download-area-content  text-center">
                <div class="download-now pb40">
                    <h3><strong>Resumen de Compra</strong></h3>
                </div>
                <div class="download-area-text  pb20">
                    <span></span>
                </div>
            </div>
        </div><!--  /row -->
    </div><!--  /container -->
</section>
<!-- End of  download
    ============================================= -->
<!-- Start of contact section
    ============================================= -->
<section id="contact" class="contact-section text-center">
    <div class="row section-content">
        <!-- //section-title -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4 text-center">
                <div class="pricing-plan">
                    <div class="landy-pricing text-center ul-li">
                        <div class="header-pricing">
                            <div class="pricing-price">
                            </div>
                            <div class="content-title mt10">
                                <div class="deep-black text-uppercase"> PLAN SUPREMO</div>
                            </div>
                        </div>
                        <!-- //header-pricing -->
                        <div class="pricing-plan-list  pt35 pb40">
                            <ul class="landy-pricing-content-desc">
                                <li>Capacidad de hasta 100 alumnos. </li>
                                <li>Capacitación a director de academia. </li>
                                <li>Capacitación de hasta 5 instructores. </li>
                                <li>Soporte técnico de por vida.</li>
                            </ul>
                        </div>
                        <p><a style="color:deeppink;" href="https://www.w3schools.com/html/"><strong>CAMBIAR EL PLAN</strong></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <section id="about" class="about-section text-center">
                    <br>
                    <h4 class="text-gray">El pago se cobrará cada mes durante los próximos 6 meses. Después de ese tiempo puede renovar o cancelar el plan</h4>
                    <hr class="five-star-line">
                    <div class="container-fluid">
                        <div class="text-right">
                        <h4 class="text-gray"><Strong>Subtotal:</Strong> $2 Peso.</h4>
                        <br>
                        <h4 style="color: black;"><Strong>Total:</Strong> $3 Peso.</h4>
                        <br>
                        </div>
                    </div>
                </section>
                <br>
                <div class="text-right">
                    <div class="submit-btn">
                        <button type="submit" value="Submit">Boton Paypal</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
</section>
<!-- End of contact section
    ============================================= -->
@endsection
