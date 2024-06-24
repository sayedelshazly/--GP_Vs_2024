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
                {{-- @include('admin.navbar') --}}

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    {{-- @if (session('message')) --}}
                    @if (session()->has('message'))
                    <div class="alert alert-success d-flex justify-content-between">
                        {{session()->get('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                    </div>
                    @endif
                    <h1 class="text-center text-uppercase mt-5">Create new Category</h1>

                    <div class="row w-75 mx-auto">
                        <!-- Basic Layout -->
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">New Category</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{url('add_category')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="category_name" class="form-control"
                                                id="basic-default-name" />
                                        </div>
                                    </div>
                            
                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                            <h5 class="card-header">All Categories</h5>
                            <div class="table-responsive text-wrap">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>Categories</th>
                                            <th>Actions</th>
                                    
                                        </tr>
                                    </thead>

                                    @foreach ($cat as $cat)
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>
                                                <strong>{{$cat->category_name}}</strong>
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
                </div>
            </div>
        </div>
        <!-- / Layout wrapper -->



        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        @include('admin.scripts')
</body>

</html>