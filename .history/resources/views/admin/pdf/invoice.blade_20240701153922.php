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
                        @if ($order->status == 'in progress')
                        <span class="badge bg-label-primary">{{$order->status}}</span>
                        @elseif($order->status == 'OnTheWay')
                        <span class="badge bg-label-success">{{$order->status}}</span>
                        @else
                        <span class="badge bg-label-danger">{{$order->status}}</span>
                        @endif
                    </td>

                    <td class="d-flex justify-content-start">
                        <button class="btn btn-info">
                            <a class="text-white" href="#">
                                <i class="bx bx-edit-alt me-1"></i>
                            </a>
                        </button>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mx-2">
                                <i class="bx bx-trash me-1 "></i>
                            </button>
                        </form>
                    </td>
                    <td class="">
                        <a class="" href="{{url('status_onWay', $order->id)}}"><i
                                class="text-success fs-2 bi bi-check-square-fill"></i></a>
                        <a class="" href="{{url('status_delivered', $order->id)}}"><i
                                class="text-secondary mx-3 fs-2 bi bi-x-square-fill"></i></a>
                    </td>
                    <td>
                        <a href="{{url('print_pdf', $order->id)}}">Print PDF</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>