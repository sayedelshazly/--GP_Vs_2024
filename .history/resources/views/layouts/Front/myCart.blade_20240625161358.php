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
                    <th>Post Status</th>
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
                        <button class="btn btn-info">
                            <a class="text-white" href="#">
                                <i class="bx bx-edit-alt me-1">Edit</i>
                            </a>
                        </button>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mx-2">
                                <i class="bx bx-trash me-1 ">Delete</i>
                            </button>
                        </form>
                    </td>
                    <td class="">
                        <a class="btn btn-success"
                            href="#">Accept</a>
                        <a class="btn btn-secondary"
                            href="#">Reject</a>
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
