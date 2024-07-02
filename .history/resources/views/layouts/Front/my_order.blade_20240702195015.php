<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

    {{--Header --}}
    @include('layouts.Front.header')

    <main class="main">
        @include('layouts.Front.singlePage')

        <div class="container w-50 mx-auto p-2 my-5">
            <div class="card shadow-1-strong" style="background-color: #37517e;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Images</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $order )
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>
                                        <strong>{{$order->product->title}}</strong>
                                    </td>
                                    <td>
                                        {{$order->product->price}}
                                    </td>
                                    <td>
                                        {{$order->product->category}}
                                    </td>
                                    <td>
                                        <img src="productImages/{{$order->product->image}}" style="width: 80px;" alt="">
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="panel-body mx-5">

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
                            <label class='control-label'>Name on Card</label> <input class='form-control'
                                size='4' type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label> <input autocomplete='off'
                                class='form-control card-number' size='20' type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
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
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>

    {{--footer--}}
    @include('layouts.Front.footer')


    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

</html>