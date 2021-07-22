<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Checkout</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                    <div class="spacer"></div>
    
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    
                                    <label for="amount">Il totale del tuo ordine è: <br> &euro; @{{total}}</label>
                                    <input style="display: none;"  type="text" :value="total">                                   
                                </div>
                            </div>
                        </div>

                        <div class="form-group alignment">
                            <div><i class="fas fa-at"></i></div>
                            <label for="email"> <i class="fas fa-at"></i> Indirizzo E-mail</label>
                            
                            <input type="email" class="form-control checkout-input" id="email" name="email">
                        </div>
    
                        <div class="form-group alignment">
                            <label for="name_on_card">Intestatario carta</label>
                            <input type="text" class="form-control checkout-input" id="name_on_card" name="name_on_card">
                        </div>
    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group alignment">
                                    <label for="address">Indirizzo</label>
                                    <input type="text" class="form-control checkout-input" id="address" name="address">
                                </div>
                            </div>
    
                        </div>
    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group alignment">
                                    <label for="postalcode">Codice postale</label>
                                    <input type="text" class="form-control checkout-input" id="postalcode" name="postalcode">
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="form-group alignment">
                                    <label for="phone">Telefono</label>
                                    <input type="text" class="form-control checkout-input" id="phone" name="phone">
                                </div>
                            </div>
    
                        </div>
    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group alignment">
                                    <label for="cc_number">Numero Carta</label>
                                    <input type="text" class="form-control checkout-input" id="cc_number" name="cc_number">
                                </div>
                            </div>
    
                            <div class="col-md-3">
                                <div class="form-group alignment">
                                    <label for="expiry">Scadenza Carta</label>
                                    <input type="text" class="form-control checkout-input" id="expiry" name="expiry">
                                </div>
                            </div>
    
                            <div class="col-md-3">
                                <div class="form-group alignment">
                                    <label for="cvc">CVV</label>
                                    <input type="text" class="form-control checkout-input" id="cvc" name="cvc">
                                </div>
                            </div>
    
                        </div>
    
                        <div class="row ">
                            <div class="col-md-6 alignment">
                                <label for="cc_number">Numero Carta</label>
    
                                <div class="form-group" id="card-number">
    
                                </div>
                            </div>
    
                            <div class="col-md-3 alignment">
                                <label for="expiry">Scadenza Carta</label>
    
                                <div class="form-group" id="expiration-date">
    
                                </div>
                            </div>
    
                            <div class="col-md-3 alignment">
                                <label for="cvv">CVV</label>
    
                                <div class="form-group" id="cvv">
    
                                </div>
                            </div>
    
                        </div>
    
                        <div class="spacer"></div>
    
                        <div id="paypal-button"></div>
    
                        <div class="spacer"></div>
    
                        <input id="nonce" name="payment_method_nonce" type="hidden" />
                        <button type="submit" class="btn-coloured checkout-btn">Concludi pagamento</button>
                    </form>
                    {{-- End Payment Form --}}
                </div>
            </div>
        </div>
 
    <script src="https://js.braintreegateway.com/web/3.38.1/js/client.min.js"></script>
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
                        placeholder: '4111 1111 1111 1111'
                    },
                    cvv: {
                        selector: '#cvv',
                        placeholder: '123'
                    },
                    expirationDate: {
                        selector: '#expiration-date',
                        placeholder: '10/2019'
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
