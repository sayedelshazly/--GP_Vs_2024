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
    
                <div class="col-xl-3 col-md-6 d-flex bg-body-secondary p-4 rounded my-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img class="card-img-top" src="" alt="Card image cap" />
                        
                    </div>
                    <div class="card-body mx-3">
                        <h2 class="card-title mx-3 text-uppercase mt-5">{{$book->title_book}}</h2>
                        <h6 class="card-title mx-3 mt-2">By : {{$book->author_name}}</h6>
                        {{-- <a class="mx-3" href="{{url('showOnePost', $post->id)}}"><i class="fs-3 bi bi-eye-fill"></i></a> --}}
                        <div class="p-2">
                            <small class="px-2 badge text-bg-primary">${{$book->price}}</small>
                            <small class="px-2 badge text-bg-primary">{{$book->quantity}}</small>
                            <br><br>
                            <small class="px-2 text-primary text-bold "> {{ $book->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <section style="background-color: #eee;">
                    <div class="container py-5">
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-6 col-xl-10">
                                <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                    <img src="bookImages/{{$book->book_img}}"
                                                        class="w-100" />
                                                    <a href="#!">
                                                        <div class="hover-overlay">
                                                            <div class="mask"
                                                                style="background-color: rgba(253, 253, 253, 0.15);">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6 col-lg-6 col-xl-6">
                                                <h5>Quant trident shirts</h5>
                                                <div class="d-flex flex-row">
                                                    <div class="text-danger mb-1 me-2">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <span>310</span>
                                                </div>
                                                <div class="mt-1 mb-0 text-muted small">
                                                    <span>100% cotton</span>
                                                    <span class="text-primary"> • </span>
                                                    <span>Light weight</span>
                                                    <span class="text-primary"> • </span>
                                                    <span>Best finish<br /></span>
                                                </div>
                                                <div class="mb-2 text-muted small">
                                                    <span>Unique design</span>
                                                    <span class="text-primary"> • </span>
                                                    <span>For men</span>
                                                    <span class="text-primary"> • </span>
                                                    <span>Casual<br /></span>
                                                </div>
                                                <p class="text-truncate mb-4 mb-md-0">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the
                                                    majority have suffered alteration in some form, by injected humour,
                                                    or
                                                    randomised words which don't look even slightly believable.
                                                </p>
                                            </div> --}}
                                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                <h6 class="text-success">Free shipping</h6>
                                                <div class="d-flex flex-row align-items-center mb-1">
                                                    <h4 class="mb-1 me-1">$13.99</h4>
                                                    <span class="text-danger"><s>$20.99</s></span>
                                                </div>
                                                <div class="d-flex flex-column mt-4">
                                                    <button data-mdb-button-init data-mdb-ripple-init
                                                        class="btn btn-primary btn-sm" type="button">Details</button>
                                                    <button data-mdb-button-init data-mdb-ripple-init
                                                        class="btn btn-outline-primary btn-sm mt-2" type="button">
                                                        Add to wishlist
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </section>
    
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
