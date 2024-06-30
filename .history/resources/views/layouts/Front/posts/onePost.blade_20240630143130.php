<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
            <p>{{$post->title}}</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row ">


                <div class="col-md-3"></div>
                <div class=" col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img class="card-img-top" src="postImages/{{$post->image}}" />
                        <div class="card-body">
                            <div class="portfolio-info d-flex justify-content-between align-items-center p-2 bg-body-secondary">
                            <h4>{{$product->title}}</h4>
                            <a href="{{url('add_toChart', $product->id)}}" class="px-5 mx-4"><i
                                    class="fs-4 bi bi-bag-plus-fill"></i></a>
                            <a href="{{url('show_oneProduct', $product->id)}}" title="More Details"
                                class="details-link"><i class="fs-4 bi bi-eye-fill"></i></a>
                        </div>
                        </div>
                        
                    </div>
                </div><!-- End Service Item -->
                <div class="col-md-3"></div>


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