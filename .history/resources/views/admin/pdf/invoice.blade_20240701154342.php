<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>

<body>
    <div class="table-responsive text-wrap text-center">

        <br>
        <strong>{{$order->name}}</strong>
        <br>

        {{$order->rec_address}}
        <br>

        <strong>{{$order->phone}}</strong>
        <br>


        <strong>{{$order->product->title}}</strong>
        <br><br>


        <img src="postImages/{{$order->product->image}}" style="width: 80px;" alt="">
        <br>


        <strong> {{$order->user->name}} </strong>
        <br><br>


        <strong> {{$order->product->price}} </strong>




    </div>
</body>

</html>