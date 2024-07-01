{{--
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
            <a href="{{url('my_orders')}}" class="fs-2 text-uppercase">Orders <i
                    class="fs-2 bi bi-folder-symlink-fill"></i></a>
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
    </main>

    {{--footer--}}
    @include('layouts.Front.footer')


    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

{{--

</html> --}}

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Fancy Form</title>
    scc
</head>

<body>
    <div id="container">
        <h1 class="logo">Fancy Form</h1>
        <div id="form-box">
            <i id="prev-btn" class="fas fa-arrow-left"></i>
            <i id="next-btn" class="fas fa-arrow-right"></i>
            <div id="input-group">
                <input id="input-field" required>
                <label id="input-label"></label>
                <div id="input-progress"></div>
            </div>
            <div id="progress-bar"></div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>

</html>