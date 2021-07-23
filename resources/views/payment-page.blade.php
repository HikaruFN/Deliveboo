<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Checkout</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <!-- Additional Styles -->
        <style>
            body {
                margin: 24px 0;
            }
            .spacer {
                margin-bottom: 24px;
            }
            #card-number, #cvv, #expiration-date {
                background: white;
                height: 38px;
                border: 1px solid #CED4DA;
                padding: .375rem .75rem;
                border-radius: .25rem;
            }
        </style>

        <!-- Bootstrap 3 CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        <div id="root">   
            <div class="container display-flex">
                <div class="col-md-6 offset-md-3 margin-top-bottom">
                    <h1 class="title white-txt ">Checkout</h1>

                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Payment Form --}}
                    <form action="{{ route('braintree-checkout') }}" method="POST" id="payment-form" class="checkout-form">
                        @csrf
                        @method('POST')
                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group amount">
                                    
                                    <label for="amount">Importo da pagare <br> <span>&euro; @{{total}}</span> </label>
                                    <input style="display: none;"  type="text" :value="total">                                   
                                </div>
                            </div>
                        </div>                        
    
                        <div class="form-group alignment">
                            <label for="name_on_card"> <i class="fas fa-user-alt"></i>Intestatario carta</label>
                            <input type="text" class="checkout-input" id="name_on_card" name="name_on_card">
                        </div>

                        <div class="form-group alignment">
                            <label for="address"><i class="fas fa-map-marker-alt"></i>Indirizzo</label>
                            <input type="text" class="checkout-input" id="address" name="address">
                        </div>

                        <div class="row">
                            <div class="col-md-6" style="display: none;">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" class="form-control" id="amount" name="amount" :value="total.toFixed(2)">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group alignment">
                                    <label for="postalcode"><i class="fas fa-map-pin"></i>Codice postale</label>
                                    <input type="text" class="checkout-input" id="postalcode" name="postalcode">
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="form-group alignment">
                                    <label for="phone"><i class="fas fa-phone-alt"></i> Telefono</label>
                                    <input type="text" class="checkout-input" id="phone" name="phone">
                                </div>
                            </div>
                        </div>                        

                        <div class="form-group alignment">
                            <label for="email"><i class="fas fa-at"></i>E-mail</label>
                            <input type="email" class="checkout-input" id="email" name="email">
                        </div>
    
                        <div class="row flex-items">
                            <div class="col-md-6 alignment" style="padding-bottom: 25px">
                                <label for="cc_number"><i class="far fa-credit-card"></i>Numero Carta</label>
    
                                <div class="checkout-input" id="card-number" style="border:none; border-bottom: 1px solid #a3a3a3; border-radius:0px;">
                                </div>
                            </div>

                            <div style="display: flex; justify-content: space-between;">
                                <div class="col-md-4 alignment" >
                                    <label for="expiry"> <i class="far fa-calendar-alt"></i>Scadenza Carta</label>
        
                                    <div class="checkout-input" id="expiration-date" style="border:none; border-bottom: 1px solid #a3a3a3; border-radius:0px;">
                                    </div>
                                </div>
        
                                <div class="col-md-3 alignment" style="align-self:center;">
                                    <label for="cvv"> <i class="fas fa-lock"></i>CVV</label>
        
                                    <div class="checkout-input" id="cvv" style="border:none; border-bottom: 1px solid #a3a3a3; border-radius:0px;">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        

                        <div class="spacer"></div>

                        <div id="paypal-button"></div>

                        <div class="spacer"></div>

                        <input id="nonce" name="payment_method_nonce" type="hidden" />
                        <div class="btn-pay">
                            <button type="submit" class="btn-coloured checkout-btn">Concludi pagamento</button>
                        </div>
                    </form>
                    {{-- End Payment Form --}}
                </div>
            </div>
        </div>

        <!-- Braintree Client CDN -->
        <script src="https://js.braintreegateway.com/web/3.38.1/js/client.min.js"></script>
        <!-- Braintree Hosted CDN -->
        <script src="https://js.braintreegateway.com/web/3.38.1/js/hosted-fields.min.js"></script>

        <!-- Load PayPal's checkout.js Library -->
        <script src="https://www.paypalobjects.com/api/checkout.js" data-version-4 log-level="warn"></script>

        <!-- Load the PayPal Checkout component -->
        <script src="https://js.braintreegateway.com/web/3.38.1/js/paypal-checkout.min.js"></script>

        <!-- Hosted Js Script -->
        <script>
            var form = document.querySelector('#payment-form');
            var submit = document.querySelector('input[type="submit"]');
            braintree.client.create({
                authorization: '{{ $token }}'
            }, function (clientErr, clientInstance) {
                if (clientErr) {
                    console.error(clientErr);
                    return;
                }
                // This example shows Hosted Fields, but you can also use this
                // client instance to create additional components here, such as
                // PayPal or Data Collector.
                braintree.hostedFields.create({
                    client: clientInstance,
                    styles: {
                        'input': {
                            'font-size': '14px'
                        },
                        'input.invalid': {
                            'color': 'red'
                        },
                        'input.valid': {
                            'color': 'green'
                        }
                    },
                    fields: {
                        number: {
                            selector: '#card-number',
                            placeholder: '4111 1111 1111 1111',
                            name: 'cc_number'
                        },
                        cvv: {
                            selector: '#cvv',
                            placeholder: '123', 
                            name: 'cvc'
                        },
                        expirationDate: {
                            selector: '#expiration-date',
                            placeholder: '10/2019',
                            name: 'expiry'
                        }
                    }
                }, function (hostedFieldsErr, hostedFieldsInstance) {
                    if (hostedFieldsErr) {
                        console.error(hostedFieldsErr);
                        return;
                    }
                    // submit.removeAttribute('disabled');
                    form.addEventListener('submit', function (event) {
                        event.preventDefault();
                        hostedFieldsInstance.tokenize(function (tokenizeErr, payload) {
                            if (tokenizeErr) {
                                console.error(tokenizeErr);
                                return;
                            }
                            // If this was a real integration, this is where you would
                            // send the nonce to your server.
                            // console.log('Got a nonce: ' + payload.nonce);
                            document.querySelector('#nonce').value = payload.nonce;
                            form.submit();
                        });
                    }, false);
                });
                // Create a PayPal Checkout component.
                braintree.paypalCheckout.create({
                    client: clientInstance
                }, function (paypalCheckoutErr, paypalCheckoutInstance) {
                    // Stop if there was a problem creating PayPal Checkout.
                    // This could happen if there was a network error or if it's incorrectly
                    // configured.
                    if (paypalCheckoutErr) {
                        console.error('Error creating PayPal Checkout:', paypalCheckoutErr);
                        return;
                    }
                    // Set up PayPal with the checkout.js library
                    paypal.Button.render({
                        env: 'sandbox', // or 'production'
                        commit: true,
                        payment: function () {
                            return paypalCheckoutInstance.createPayment({
                                // Your PayPal options here. For available options, see
                                // http://braintree.github.io/braintree-web/current/PayPalCheckout.html#createPayment
                                flow: 'checkout', // Required
                                amount: document.getElementById('amount').value, // Required
                                currency: 'EUR', // Required
                            });
                        },
                        onAuthorize: function (data, actions) {
                            return paypalCheckoutInstance.tokenizePayment(data, function (err, payload) {
                                // Submit `payload.nonce` to your server.
                                document.querySelector('#nonce').value = payload.nonce;
                                form.submit();
                            });
                        },
                        onCancel: function (data) {
                            console.log('checkout.js payment cancelled', JSON.stringify(data, 0, 2));
                        },
                        onError: function (err) {
                            console.error('checkout.js error', err);
                        }
                    }, '#paypal-button').then(function () {
                        // The PayPal button will be rendered in an html element with the id
                        // `paypal-button`. This function will be called when the PayPal button
                        // is set up and ready to be used.
                    });
                });
            });

        </script>
        <script src="{{asset('js/payment.js')}}"></script>
    </body>
</html>
