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

        {{-- <form class="my-5 w-50 mx-auto" action="{{url('confirm_order')}}" method="POST" enctype="multipart/form-data">
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
        </form> --}}
        <section class="p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="card border-light-subtle shadow-sm">
                    <div class="row g-0">
                        <div class="col-12 col-md-6 text-bg-primary">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <div class="col-10 col-xl-8 py-3">
                                    <img class="img-fluid rounded mb-4" loading="lazy" src="./assets/img/bsb-logo-light.svg"
                                        width="245" height="80" alt="BootstrapBrain Logo">
                                    <hr class="border-primary-subtle mb-4">
                                    <h2 class="h1 mb-4">We make digital products that drive you to stand out.</h2>
                                    <p class="lead m-0">We write words, take photos, make videos, and interact with artificial
                                        intelligence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <h2 class="h3">Password Reset</h2>
                                            <h3 class="fs-6 fw-normal text-secondary m-0">Provide the email address associated
                                                with your account to recover your password.</h3>
                                        </div>
                                    </div>
                                </div>
                                <form action="#!">
                                    <div class="row gy-3 gy-md-4 overflow-hidden">
                                        <div class="col-12">
                                            <label for="email" class="form-label">ame <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" name="name" class="form-control" value="{{Auth::user()->name}}" id="email"
                                                placeholder="name@example.com" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">phone <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="name@example.com" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn bsb-btn-xl btn-primary" type="submit">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-12">
                                        <hr class="mt-5 mb-4 border-secondary-subtle">
                                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                            <a href="#!" class="link-secondary text-decoration-none">Login</a>
                                            <a href="#!" class="link-secondary text-decoration-none">Register</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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