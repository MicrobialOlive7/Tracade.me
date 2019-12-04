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
                                <div class="deep-black text-uppercase"> Plan {{$plan->pla_nombre}}</div>
                            </div>
                        </div>
                        <!-- //header-pricing -->
                        <div class="pricing-plan-list  pt35 pb40">
                            <ul class="landy-pricing-content-desc">
                                {{$plan->pla_descripcion}}
                            </ul>
                        </div>
                        <p><a style="color:deeppink;" href="{{route('precios')}}"><strong>CAMBIAR EL PLAN</strong></a></p>
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
                        <h4 class="text-gray"><Strong>Subtotal:</Strong> ${{$plan->pla_precio}} Pesos.</h4>
                        <br>
                        <h4 style="color: black;"><Strong>Total:</Strong> ${{$plan->pla_precio}} Pesos.</h4>
                        <br>
                        </div>
                    </div>
                </section>
                <br>
                <div class="text-right">
                    <div class="submit-btn">
                        <div id="paypal-button"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
</section>
<!-- End of contact section
    ============================================= -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    var total = {{$plan->pla_precio}};

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
                window.location = '{{route('plan-contratado', [$plan->id, Auth::user()->aca_id])}}';
            });
        }
    }, '#paypal-button');
</script>
@endsection
