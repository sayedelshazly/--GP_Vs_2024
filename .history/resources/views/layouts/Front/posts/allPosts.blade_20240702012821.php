<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

    {{--Header --}}
    @include('layouts.Front.header')
    @include('layouts.Front.singlePage')

    <section id="#" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Programming Topics</h2>
            <p>Read about the most important programming and web development topics</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                @if($posts->isEmpty())
                <p class="text-center badge text-bg-danger w-auto mx-auto">No posts available.</p>
                @endif

                @foreach ($posts as $post )

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img class="card-img-top" src="postImages/{{$post->image}}" alt="Card image cap" />
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <a class="mx-3" href="{{url('showOnePost', $post->id)}}"><i class="fs-3 bi bi-eye-fill"></i></a>
    
                        </div>
                        <div class="p-2">
                            @if (Auth::user)
                                
                            <small class="px-2 badge text-bg-primary">{{$post->name}}</small>
                            @else
                                
                            @endif
                            <small class="px-2 text-primary text-bold "> {{ $post->created_at->diffForHumans() }}</small>    
                        </div>
                    </div>
                </div><!-- End Service Item -->
                @endforeach

            </div>
        </div>
    </section>
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