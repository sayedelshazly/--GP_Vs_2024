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
        </div>
    </main>

    {{--footer--}}
    @include('layouts.Front.footer')


    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

</html>