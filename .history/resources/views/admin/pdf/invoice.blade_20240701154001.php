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
                    <th>Status</th>
                    <th>Actions</th>
                    <th>Post Status</th>
                    <th>Print PDF</th>
                </tr>
            </thead>

            @foreach ($order as $order)
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>
                        <strong>{{$order->name}}</strong>
                    </td>
                    <td>{!!Str::limit($order->rec_address, 10)!!}</td>
                    <td>
                        <strong>{{$order->phone}}</strong>
                    </td>
                    <td>
                        <strong>{{$order->product->title}}</strong>
                    </td>
                    <td>
                        <img src="postImages/{{$order->product->image}}" style="width: 80px;" alt="">
                    </td>
                    <td>
                        <strong> {{$order->user->name}} </strong>
                    </td>
                    <td>
                        <strong> {{$order->product->price}} </strong>
                    </td>


                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>