<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

{{--Header --}}
@include('layouts.Front.header')

<main class="main">

    <div class="table-responsive text-wrap">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author Name</th>
                    <th>Description</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>Images</th>
                    <th>Actions</th>
                    <th>Book Status</th>
                </tr>
            </thead>

            @foreach ($book as $book)
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>
                        <strong>{{$book->title_book}}</strong>
                    </td>
                    <td>
                        <strong>{{$book->author_name}}</strong>
                    </td>
                    <td>{!!Str::limit($book->description_book, 30)!!}</td>
                    <td>
                        {{$book->price}}
                    </td>
                    <td>
                        {{$book->quantity}}
                    </td>
                    {{-- <td>
                        @if ($post->post_status == 'active')
                        <span class="badge bg-label-primary">{{$post->post_status}}</span>
                        @else
                        <span class="badge bg-label-danger">{{$post->post_status}}</span>
                        @endif
                    </td> --}}
                    <td>
                        <img src="bookImages/{{$book->book_img}}" style="width: 80px;" alt="">
                    </td>
                    <td class="d-flex justify-content-start">
                        <button class="btn btn-info">
                            <a class="text-white" href="{{url('edit_book', $book->id)}}">
                                <i class="bx bx-edit-alt me-1"></i>
                            </a>
                        </button>
                        <form action="{{url('delete_book', $book->id)}}" method="POST">
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


</main>

{{--footer--}}
@include('layouts.Front.footer')
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

{{--javascribt--}}
@include('layouts.Front.script')

</body>

</html>
