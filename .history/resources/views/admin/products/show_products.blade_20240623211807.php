<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    @include('admin.head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('admin.asideMenu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @if (session()->has('message'))
                <div class="alert alert-danger d-flex justify-content-between">
                    {{session()->get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                </div>
                @endif
                @if (session()->has('status_accept'))
                <div class="alert alert-success d-flex justify-content-between">
                    {{session()->get('status_accept')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                </div>
                @endif
                @if (session()->has('status_reject'))
                <div class="alert alert-secondary d-flex justify-content-between">
                    {{session()->get('status_reject')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                </div>
                @endif
                
                @include('admin.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                {{-- <div class="content-wrapper"> --}}
                    <!-- Content -->
                    <h1 class="text-center text-uppercase mt-5">All Products</h1>

                    <div class="row mx-5" style="margin-top: 100px">

                        <div class="card">
                            <h5 class="card-header">All Products</h5>
                            <div class="table-responsive text-wrap">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>price</th>
                                            <th>Quantity</th>
                                            <th>Images</th>
                                            <th>category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    @foreach ($product as $product)
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>
                                                <strong>{{$product->title}}</strong>
                                            </td>
                                            <td>{!!Str::$product->description!!}</td>
                                            <td class="badge bg-label-warning">
                                                {{$product->price}}
                                            </td>
                                            <td><span class="badge bg-label-primary">{{$product->quantity}}</span>
                                            </td>
                                            <td>
                                                <img src="productImages/{{$product->image}}" style="width: 80px;" alt="">
                                            </td>
                                            <td class="text-black">{{$product->category}}</td>
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
                                            
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            {{-- {{$product->links()}} --}}
                            <!-- Overlay -->
                            <div class="layout-overlay layout-menu-toggle"></div>
                        </div>
                    </div>

                    <!-- Overlay -->
                    <div class="layout-overlay layout-menu-toggle"></div>
                    {{--
                </div> --}}
            </div>
        </div>
        <!-- / Layout wrapper -->



        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        @include('admin.scripts')
</body>

</html>