<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

    {{--Header --}}
    @include('layouts.Front.header')
    @include('layouts.Front.singlePage')

    <main class="main">



        <!-- Section Title -->
        <div class="container section-title mt-5" data-aos="fade-up">
            <h2>Books</h2>
            <p>Read about the most important programming and web development topics</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                @if($book->isEmpty())
                <p class="text-center badge text-bg-danger w-auto mx-auto">No Books available.</p>
                @endif


                @if (session()->has('success'))
                <div class="alert alert-danger d-flex justify-content-between">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                </div>
                @endif

                @foreach ($book as $book )

                <div class="col-xl-3 col-md-12 d-flex rounded my-5" data-aos="fade-up" style="width: 300px"
                    data-aos-delay="100">
                    <div class="card">
                        <img class="card-img-top" src="bookImages/{{$book->book_img}}" alt="Card image cap" />

                        <div class="card-body">
                            <h2 class="card-title mx-3 text-uppercase">{{$book->title_book}}</h2>
                            <div class="d-flex justify-content-between align-content-center">
                                <span class=" mx-3 badge badge-t">By : {{$book->author_name}}</span>
                                <a class="mx-3" href="{{url('borrow_book', $book->id)}}"><i class="fs-4 fw-medium bi bi-bookmark-plus"></i></a>
                            </div>
                            <div class="p-2">
                                <small class="px-2 badge text-bg-primary">${{$book->price}}</small>
                                <small class="px-2 badge text-bg-primary">{{$book->quantity}}</small>
                                <small class="px-2 text-primary text-bold "> {{ $book->created_at->diffForHumans()
                                    }}</small>
                            </div>
                        </div>
                    </div>
                </div><!-- End Service Item -->


                @endforeach

                {{-- <div class="d-flex justify-content-center align-items-center mt-5">
                    <a href="{{url('showAllPosts')}}" class=" text-primary ">More
                        <i class=" bi bi-chevron-double-right"></i>
                        <i class="bi bi-chevron-double-right"></i>
                        <i class="bi bi-chevron-double-right"></i>
                    </a>
                </div> --}}
            </div>
        </div>



    </main>

    {{--footer--}}
    @include('layouts.Front.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

</html>