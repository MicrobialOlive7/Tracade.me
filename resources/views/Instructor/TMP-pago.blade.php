@extends('Instructor.templates.master')
@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Header End -->
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Pago</h3>
            </div>
            <div id="paypal-button"></div>
        </div>
    </div>

    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    var total = 5;

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
                window.location = '{{route('tmp-pago')}}';
            });
        }
    }, '#paypal-button');
</script>
@endsection
