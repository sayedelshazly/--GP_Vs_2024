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
            <h2>All </h2>
            <p>Read about the most important programming and web development topics</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">

                @foreach ($posts as $post )

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img class="card-img-top" src="postImages/{{$post->image}}" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Post by : {{$post->name}}</small>
                        </div>
                        <div class="card-footer">
                            <a href="#">Show</a>
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