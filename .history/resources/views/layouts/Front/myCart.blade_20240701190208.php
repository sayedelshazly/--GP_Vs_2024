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
        <div class="p-5 d-flex justify-content-end fw-bold" style="color: ">
            <a href="#" class="fs-2 text-uppercase">Orders <i class="fs-2 bi bi-folder-symlink-fill"></i></a>
        </div>

        <form class="my-5 w-50 mx-auto" action="{{url('confirm_order')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" id="basic-default-name" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" id="basic-default-name" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Address</label>
                <div class="col-sm-10">
                    <textarea id="basic-default-message" rows="5" cols="10" class="form-control"
                        name="address"></textarea>
                </div>
            </div>
            
            <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>

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
                            <img src="productImages/{{$cart->product->image}}" style="width: 80px;" alt="">
                        </td>
                        <td class="d-flex justify-content-start">
                            <form action="{{url('delete_fromCart', $cart->id)}}" method="POST">
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