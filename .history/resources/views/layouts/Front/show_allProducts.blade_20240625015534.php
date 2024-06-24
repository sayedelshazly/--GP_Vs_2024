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
                @if($product->isEmpty())
                <p>No posts available.</p>
                @endif

                @foreach ($product as $product )

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="productImages/{{$product->image}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$product->title}}</h4>
                                <p>Description</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{url}}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
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