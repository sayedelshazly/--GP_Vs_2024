<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    {{-- <base href="/public"> //----solve problem of assets. --}}
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
                    <h1 class="text-center text-uppercase mt-5">Edit Post</h1>

                    <div class="row w-75 mx-auto">
                        <!-- Basic Layout -->
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Edit Post</h5>
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form action="{{url('update_post', $posts->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name" name="title">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$posts->title}}" class="form-control" id="basic-default-name"/>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label"
                                            for="basic-default-message">Description</label>
                                        <div class="col-sm-10">
                                            <textarea id="basic-default-message" rows="10" cols="30" class="form-control" name="description">
                                                {{$posts->description}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-file">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" id="basic-default-file"/>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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