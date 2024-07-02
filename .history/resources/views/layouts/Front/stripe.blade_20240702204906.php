<!DOCTYPE html>
<html>

<head>
    @include('layouts.Front.head')
</head>

<body>
    @include('layouts.Front.header')
    @include('layouts.Front.singlePage')

    <div class="container">

        <br><br>
        <h1 class="mt-5 fs-1 text-center">Laravel 9 - Stripe Payment Gateway Integration Example <br /> ItSolutionStuff.com</h1>
        <br><br>
        <div class="row mt-5">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table">
                        <h3 class="panel-title">Payment Details</h3>
                        <h3 class="panel-title">you need to pay ${{$value}}</h3>
                    </div>
                    <div class="panel-body">

                        @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                        @endif

                        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                            @csrf

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> 
                                    <input class='form-control' size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Card Number</label> 
                                    <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> 
                                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try again.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.Front.script')
</body>

</html>