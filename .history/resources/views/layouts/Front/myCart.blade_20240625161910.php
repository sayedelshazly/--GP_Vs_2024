<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

    {{--Header --}}
    @include('layouts.Front.header')

    <main class="main">
        @include('layouts.Front.hero')


        <?php $value = 0 ?>

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

                @foreach ($cart as $cart )
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <strong>{{$cart->product->title}}</strong>
                        </td>
                        <td>{!!Str::limit($cart->product->description, 30)!!}</td>
                        <td>
                            {{$cart->user->name}}
                        </td>
                        <td>
                            {{$cart->product->price}}
                        </td>
                        <td><span class="badge bg-label-primary">{{$cart->product->category}}</span>
                        </td>
                        <td>
                            <img src="postImages/{{$cart->product->image}}" style="width: 80px;" alt="">
                        </td>
                        <td class="d-flex justify-content-start">
                            <form action="{{'delete_product'}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mx-2">
                                    <i class="bx bx-trash me-1 ">Delete</i>
                                </button>
                            </form>
                        </td>
                
                    </tr>
                </tbody>

            <?php
                $value = $value + $cart->product->price;
            ?>

                @endforeach
            </table>
        </div>

        <div class="mt-5 text-uppercase text-center">
            <p>total value for products : {{$value }}$</p>
        </div>



    </main>

    {{--footer--}}
    @include('layouts.Front.footer')


    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

</html>