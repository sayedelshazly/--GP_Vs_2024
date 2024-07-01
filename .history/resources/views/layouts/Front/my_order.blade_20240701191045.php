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
            <table class="table align-middle w-75 mx-auto">
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

                @foreach ($order as $order )
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <strong>{{$order->product->title}}</strong>
                        </td>
                        <td>{!!Str::limit($order->product->description, 30)!!}</td>
                        <td>
                            {{$order->user->name}}
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
    </main>

    {{--footer--}}
    @include('layouts.Front.footer')


    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

</html>