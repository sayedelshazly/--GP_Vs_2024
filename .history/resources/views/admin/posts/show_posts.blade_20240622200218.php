<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <base href="/public">
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
                
                @include('admin.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                {{-- <div class="content-wrapper"> --}}
                    <!-- Content -->
                    <h1 class="text-center text-uppercase mt-5">All Posts</h1>

                    <div class="row mx-5" style="margin-top: 100px">

                        <div class="card">
                            <h5 class="card-header">All Posts</h5>
                            <div class="table-responsive text-wrap">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            {{-- <th>Description</th> --}}
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
                                            {{-- <td>{{$post->description}}</td> --}}
                                            <td>
                                                {{$post->name}}
                                            </td>
                                            <td><span class="badge bg-label-primary">{{$post->post_status}}</span>
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
                                            <td>
                                                <button>
                                                    <a class="btn btn-success" href="{{url('accept_user_post', $post->id)}}"><i class="bi bi-x-circle-fill"></i></a>
                                                </button>
                                                <a class="btn btn-secondary" href="{{url('reject_user_post', $post->id)}}">Reject</a>
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