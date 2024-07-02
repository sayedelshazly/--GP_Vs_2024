<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <div class="panel-body my-5">

                @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
                @endif

                <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                    data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class="form-label">Name on Card</label> <input class="form-control" size='4'
                                type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class="form-label">Card Number</label> <input autocomplete='off'
                                class='form-control card-number' size='20' type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class="form-label">CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class="form-label">Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class="form-label">Expiration Year</label> <input
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
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ({{$va}})</button>
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
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        $(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
    </script>

</body>

</html>