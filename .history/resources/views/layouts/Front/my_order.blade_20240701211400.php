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
        <div class="p-5 d-flex justify-content-end fw-bold" style="color: #37517e">
            <a href="{{url('my_orders')}}" class="fs-2 text-uppercase">Orders <i class="fs-2 bi bi-folder-symlink-fill"></i></a>
        </div>

        <div class="table-responsive text-wrap mt-5">
            <table class="table align-middle w-50 mx-auto">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Images</th>
                    </tr>
                </thead>

                @foreach ($order as $order )
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <strong>{{$order->product->title}}</strong>
                        </td>
                        
                        <td>
                            {{$order->product->price}}
                        </td>
                        <td><span class="badge bg-label-primary">{{$order->product->category}}</span>
                        </td>
                        <td>
                            <img src="productImages/{{$order->product->image}}" style="width: 80px;" alt="">
                        </td>
                        
                
                    </tr>
                </tbody>

                @endforeach
            </table>
        </div>

        <div class="container w-75 mx-auto p-5">
            <div class="card shadow-1-strong" style="background-color: #37517e;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Users</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Images</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $cart )

                                <tr>
                                    <td>
                                        <strong>{{$cart->product->title}}</strong>
                                    </td>
                                    <td>{!!Str::limit($cart->product->description, 30)!!}</td>
                                    <td class="text-info fw-bold">
                                        {{$cart->user->name}}
                                    </td>
                                    <td>
                                        {{$cart->product->price}}
                                    </td>
                                    <td>
                                        {{$cart->product->category}}
                                    </td>
                                    <td>
                                        <img src="productImages/{{$cart->product->image}}" style="width: 100px;" alt="">
                                    </td>
                                    <td>
                                        <form action="{{url('delete_fromCart', $cart->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-white mx-2">
                                                <i class="text-danger fw-bold fs-4 bi bi-x-octagon"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                                <?php
                                    $value = $value + $cart->product->price;
                                ?>
                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{--footer--}}
    @include('layouts.Front.footer')


    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

</html>