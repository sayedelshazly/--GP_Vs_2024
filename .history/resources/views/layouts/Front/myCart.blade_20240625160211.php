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
                    <td class="">
                        <a class="btn btn-success"
                            href="{{url('accept_user_post', $post->id)}}">Accept</a>
                        <a class="btn btn-secondary"
                            href="{{url('reject_user_post', $post->id)}}">Reject</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>


    @endforeach


</main>

{{--footer--}}
@include('layouts.Front.footer')


{{--javascribt--}}
@include('layouts.Front.script')

</body>

</html>
