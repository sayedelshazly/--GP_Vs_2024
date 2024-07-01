<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>

<body>
    <div class="table-responsive text-wrap">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product</th>
                    <th>Product Image</th>
                    <th>User</th>
                    <th>Price</th>
                </tr>
            </thead>


            <strong>{{$order->name}}</strong>

            {{$order->rec_address}}

            <strong>{{$order->phone}}</strong>


            <strong>{{$order->product->title}}</strong>


            <img src="postImages/{{$order->product->image}}" style="width: 80px;" alt="">


            <strong> {{$order->user->name}} </strong>


            <strong> {{$order->product->price}} </strong>



            </tr>
            </tbody>
        </table>
    </div>
</body>

</html>