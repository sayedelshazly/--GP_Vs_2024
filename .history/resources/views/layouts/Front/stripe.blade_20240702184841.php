ItSolutionStuff.com Logo
LARAVEL 11
ANGULAR 17
PHP
VUE
REACT
CODEIGNITER
👉 Laravel Tutorial
Laravel 9 Stripe Payment Gateway Integration Tutorial
By Hardik Savani November 5, 2023 Category : Laravel
Hi,

Here, I will show you laravel 9 stripe integration. you can understand a concept of stripe payment gateway integration in laravel 9. Here you will learn laravel 9 stripe payment gateway example. I explained simply step by step laravel 9 payment integration stripe example. you will do the following things for stripe integration in laravel 9.

PauseUnmute
Fullscreen
You need to create a stripe developer account and need to get API key and secret from there. Then we will use stripe/stripe-php composer library for the stripe payment gateway in laravel 9. I write step by step integration for the stripe payment gateway.

Stripe is a very popular and secure internet payment gateway company that helps to accept payments worldwide. Stripe provides really nice development interface to start and you don’t have to pay subscription charges to learn it provides a free developer account, before starting to code in your app.

I will give you an example from scratch to implement a stripe payment gateway in the laravel 9 application. You just need to follow a few steps to get a full example to pay.



Step 1: Install Laravel 9

This is optional; however, if you have not created the laravel app, then you may go ahead and execute the below command:

composer create-project laravel/laravel example-app

Step 2: Install stripe-php Package

In this step we need to install stripe-php via the Composer package manager, so one your terminal and fire bellow command:

composer require stripe/stripe-php
Step 3: Set Stripe API Key and SECRET

Now, we need to set stripe key and secret. so first you can go on Stripe website and create development stripe account key and secret and add bellow:

.env

STRIPE_KEY=pk_test_reFxwbsm9cdCKASdTfxAR
STRIPE_SECRET=sk_test_oQMFWteJiPd4wj4AtgApY
Step 4: Create Controller File

in next step, now we have create new controller as StripePaymentController and write both method on it like as bellow, So let's create both controller:

app/Http/Controllers/StripePaymentController.php

<?php
    
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Session;
use Stripe;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
}
If you must need to pass customer name and address with shipping address then you can use bellow method code:

/**

 * success response method.

 *

 * @return \Illuminate\Http\Response

 */

public function stripePost(Request $request)

{

    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

  

    $customer = Stripe\Customer::create(array(

            "address" => [

                    "line1" => "Virani Chowk",

                    "postal_code" => "360001",

                    "city" => "Rajkot",

                    "state" => "GJ",

                    "country" => "IN",

                ],

            "email" => "demo@gmail.com",

            "name" => "Hardik Savani",

            "source" => $request->stripeToken

         ));

  

    Stripe\Charge::create ([

            "amount" => 100 * 100,

            "currency" => "usd",

            "customer" => $customer->id,

            "description" => "Test payment from itsolutionstuff.com.",

            "shipping" => [

              "name" => "Jenny Rosen",

              "address" => [

                "line1" => "510 Townsend St",

                "postal_code" => "98140",

                "city" => "San Francisco",

                "state" => "CA",

                "country" => "US",

              ],

            ]

    ]); 

  

    Session::flash('success', 'Payment successful!');

           

    return back();

}

Step 5: Create Routes

In this step, we will create two routes for get request and another for post request. So, let's add new route on that file.

routes/web.php

<?php
   
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\StripePaymentController;
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
Step 6: Create Blade File

In Last step, let's create stripe.blade.php(resources/views/stripe.blade.php) for layout and write code of jquery to get token from stripe here and put following code:

resources/views/stripe.blade.php

<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 - Stripe Payment Gateway Integration Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    
<div class="container">
    
    <h1>Laravel 9 - Stripe Payment Gateway Integration Example <br/> ItSolutionStuff.com</h1>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                        <h3 class="panel-title" >Payment Details</h3>
                </div>
                <div class="panel-body">
    
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
    
                    <form 
                            role="form" 
                            action="{{ route('stripe.post') }}" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
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
        </div>
    </div>
        
</div>
    
</body>
    
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
</html>
Run Laravel App:

All the required steps have been done, now you have to type the given below command and hit enter to run the Laravel app:

php artisan serve

Now, Go to your web browser, type the given URL and view the app output:

http://localhost:8000/stripe

Output:



Now you can check with following card details:

Read Also: Laravel 9 Google Recaptcha V3 Example Tutorial
Name: Test

Number: 4242 4242 4242 4242

CSV: 123

Expiration Month: 12

Expiration Year: 2028

I hope it can help you...

 Like 7  0
Enjoyed it? Help us by sharing...

Tags :
Laravel
Laravel 9
Previous
Laravel - Class "App\Http\Controllers\Validator" not found - Solved
Next 
Laravel - Class "App\Http\Controllers\DB" not found - Solved
Hardik Savani - Author
Hardik Savani
I'm a full-stack developer, entrepreneur and owner of ItSolutionstuff.com. I live in India and I love to write tutorials and tips that can help to other artisan. I am a big fan of PHP, Laravel, Angular, Vue, Node, Javascript, JQuery, Codeigniter and Bootstrap from the early stage. I believe in Hardworking and Consistency.

Follow Me:
We are Recommending you
Laravel 9 Fullcalendar Ajax Tutorial Example
Laravel 9 One to Many Eloquent Relationship Tutorial
Laravel 9 QR Code Generator Example
Laravel 9 Google Charts Tutorial Example
Laravel 9 Socialite Login with Twitter Account Example
Laravel 9 Resize Image Before Upload Example
Laravel 9 Scout Full Text Search Tutorial
Laravel 9 Drag and Drop File Upload with Dropzone JS
Laravel 9 Autocomplete Search from Database Example
Laravel 9 Yajra Datatables Example Tutorial
Laravel 9 Markdown | Laravel 9 Send Email using Markdown Mailables
Laravel 9 Eloquent Mutators and Accessors Example

Popular Posts
Laravel Google Chart Example Tutorial
How to Get File Extension from Path in Laravel?
How to use Login Throttle in Laravel?
Laravel 8 QR Code Generate Example
Laravel Eloquent Sum Multiple Columns Example
Laravel 8 Inertia JS CRUD with Jetstream & Tailwind CSS
Laravel Follow Unfollow System Example Tutorial
Laravel 7 Pagination Tutorial
Laravel Eloquent Inner Join with Multiple Conditions Example
Laravel Unique Validation With Soft Delete Example
Laravel Carbon addHours() | Laravel Carbon Add Hours Example
How to Change Column Position in Laravel Migration?
How to Get Table Name from Model in Laravel?
Upload Files to MySQL Database in Laravel Tutorial
Laravel Cashier Stripe Subscription Example Tutorial
Categories
Laravel
Angular
PHP
Python
jQuery
Ubuntu
Bootstrap
MySql
Guest Post
Javascript
Node JS
Ajax
Codeigniter
Vue.JS
React JS
HTML
Git
Server
JSON
Installation
CSS
.htaccess
Axios
Google API
Typeahead JS
Google Map
Socket.io
SQL
Highcharts
Facebook API
Latest Posts
Angular 18 RxJS Observable with Httpclient Example
How to Define Global Variables in Angular 18?
Laravel 11 Real-Time Notifications using Pusher Example
Laravel 11 Socialite Login with Facebook Account Example
Laravel 11 Socialite Login with Gitlab Account Example
Subscribe to the Email Newsletter
Enter Your Email Address....
Follow Laravel News on
Facebook Twitter LinkedIn Github

Home
List Of Categories
List of Tags
Disclaimer
Latest Posts
Contact US
About US
Advertisement
© 2016-2024 All Rights Reserved • www.itsolutionstuff.com

Shares 



