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
                    <h1 class="text-center text-uppercase mt-5">All Orders</h1>

                    <div class="row mx-5" style="margin-top: 100px">

                        <div class="card">
                            <h5 class="card-header">Orders</h5>
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <form action="{{url('search_order')}}" method="get">
                                        @csrf
                                        <input type="text" class="form-control border-0 shadow-none" name="search"
                                            placeholder="Search..." aria-label="Search..." />
                                    </form>
                                </div>
                            </div>
                            <!-- /Search -->
                            <div class="table-responsive text-wrap">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Product</th>
                                            <th>User</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                            <th>Post Status</th>
                                        </tr>
                                    </thead>

                                    @foreach ($order as $order)
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>
                                                <strong>{{$order->name}}</strong>
                                            </td>
                                            <td>{!!Str::limit($order->rec_address, 10)!!}</td>
                                            <td>
                                                <strong>{{$order->phone}}</strong>
                                            </td>
                                            <td>
                                                <strong>{{$order->product->title}}</strong>
                                            </td>
                                            <td>
                                                <strong> {{$order->}} </strong>
                                            </td>
                                            <td><span class="badge bg-label-primary">{{$order->status}}</span>
                                            </td>
                                        
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
                                            <td class="">
                                                <a class=""
                                                    href="#"><i class="text-success  fs-2 bi bi-check-square-fill"></i></a>
                                                <a class=""
                                                    href="#"><i class="text-secondary mx-3 fs-2 bi bi-x-square-fill"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
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