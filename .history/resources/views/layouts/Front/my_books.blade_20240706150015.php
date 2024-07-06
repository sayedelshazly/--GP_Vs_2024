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
    
                @foreach ($book as $book )
    
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img class="card-img-top" src="bookImages/{{$book->book_img}}" alt="Card image cap" />
                        
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title mx">{{$book->title_book}}</h5>
                        {{-- <a class="mx-3" href="{{url('showOnePost', $post->id)}}"><i class="fs-3 bi bi-eye-fill"></i></a> --}}
                        <div class="p-2 d-flex justify-content-between align-items-center ">
                            <small class="px-2 badge text-bg-primary">${{$book->price}}</small>
                            <small class="px-2 badge text-bg-primary">{{$book->quantity}}</small>
                            <small class="px-2 text-primary text-bold "> {{ $book->created_at->diffForHumans() }}</small>
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
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

{{--javascribt--}}
@include('layouts.Front.script')

</body>

</html>
