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
                    <h1 class="text-center text-uppercase mt-5">All Posts</h1>

                    <div class="row mx-5" style="margin-top: 100px">

                        <div class="card">
                            <h5 class="card-header">All Posts</h5>
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <form action="{{url('search_posts')}}" method="get">
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
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Users</th>
                                            <th>Status</th>
                                            <th>Images</th>
                                            <th>Actions</th>
                                            <th>Post Status</th>
                                        </tr>
                                    </thead>

                                    @foreach ($posts as $post)
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>
                                                <strong>{{$post->title}}</strong>
                                            </td>
                                            <td>{!!Str::limit($post->description, 30)!!}</td>
                                            <td>
                                                {{$post->name}}
                                            </td>
                                            <td>
                                                @if ($post->post_status == '')
                                                <span class="badge bg-label-primary">{{$post->post_status}}</span>
                                                @else
                                                <span class="badge bg-label-danger">{{$post->post_status}}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <img src="postImages/{{$post->image}}" style="width: 80px;" alt="">
                                            </td>
                                            <td class="d-flex justify-content-start">
                                                <button class="btn btn-info">
                                                    <a class="text-white" href="{{url('edit_post', $post->id)}}">
                                                        <i class="bx bx-edit-alt me-1"></i>
                                                    </a>
                                                </button>
                                                <form action="{{url('delete_post', $post->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mx-2">
                                                        <i class="bx bx-trash me-1 "></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="">
                                                <a class=""
                                                    href="{{url('accept_user_post', $post->id)}}"><i class="text-success  fs-2 bi bi-check-square-fill"></i></a>
                                                <a class=""
                                                    href="{{url('reject_user_post', $post->id)}}"><i class="text-secondary mx-3 fs-2 bi bi-x-square-fill"></i></a>
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