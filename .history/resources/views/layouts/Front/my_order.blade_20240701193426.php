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
    <style>
        @import url("https://fonts.googleapis.com/css?family=Pacifico|Roboto");

        body {
            background: #428bca;
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }

        h1.logo {
            color: #fff;
            font-family: 'Pacifico', cursive;
            font-size: 4em;
            margin-bottom: 1em;
        }

        h1.end {
            position: relative;
            color: #fff;
            opacity: 0;
            transition: 0.8s ease-in-out;
        }

        #container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: top;
            align-items: center;
        }

        #form-box {
            background: #fff;
            position: relative;
            width: 600px;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.1), 0 6px 10px 5px rgba(0, 0, 0, 0.1), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
            transition: transform 0.1s ease-in-out;
        }

        #form-box.close {
            width: 0;
            padding: 0;
            overflow: hidden;
            transition: 0.8s ease-in-out;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0);
        }

        #next-btn {
            position: absolute;
            right: 20px;
            bottom: 10px;
            font-size: 40px;
            color: #428bca;
            float: right;
            cursor: pointer;
            z-index: 2;
        }

        #next-btn:hover {
            color: #b9d4ec;
        }

        #prev-btn {
            position: absolute;
            font-size: 18px;
            left: 30px;
            top: 12px;
            z-index: 2;
            color: #9e9e9e;
            float: right;
            cursor: pointer;
        }

        #prev-btn:hover {
            color: #b9d4ec;
        }

        #input-group {
            position: relative;
            padding: 30px 20px 20px 20px;
            margin: 10px 60px 10px 10px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        #input-group input {
            position: relative;
            width: 100%;
            border: none;
            font-size: 20px;
            font-weight: bold;
            outline: 0;
            background: transparent;
            box-shadow: none;
        }

        #input-group #input-label {
            position: absolute;
            pointer-events: none;
            top: 32px;
            left: 20px;
            font-size: 20px;
            font-weight: bold;
            transition: 0.2s ease-in-out;
        }

        #input-group input:valid+#input-label {
            top: 6px;
            left: 42px;
            margin-left: 0 !important;
            font-size: 11px;
            font-weight: normal;
            color: #9e9e9e;
        }

        #input-progress {
            border-bottom: 3px solid #428bca;
            width: 0;
            transition: width 0.6s ease-in-out;
        }

        #progress-bar {
            position: absolute;
            background: #b9d4ec;
            height: 10px;
            width: 0;
            transition: width 0.5s ease-in-out;
        }

        .close #next-btn,
        .close #prev-btn {
            color: #fff;
        }

        .error #input-progress {
            border-color: #ff2d26;
        }

        .error #next-btn {
            color: #ff2d26;
        }

        @media (max-width: 600px) {
            #form-box {
                width: 80%;
            }
        }
    </style>
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
    s
</body>

</html>