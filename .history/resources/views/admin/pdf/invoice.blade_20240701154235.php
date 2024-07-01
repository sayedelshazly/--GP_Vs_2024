<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>

<body>
    <div clas


            <strong>{{$order->name}}</strong>

            {{$order->rec_address}}

            <strong>{{$order->phone}}</strong>


            <strong>{{$order->product->title}}</strong>


            <img src="postImages/{{$order->product->image}}" style="width: 80px;" alt="">


            <strong> {{$order->user->name}} </strong>


            <strong> {{$order->product->price}} </strong>



          
    </div>
</body>

</html>