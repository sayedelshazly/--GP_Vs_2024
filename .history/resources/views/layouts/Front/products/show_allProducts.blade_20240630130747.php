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
            <p>Products Added To Cart = {{$count}}</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                @if($product->isEmpty())
                <p class="text-center">No posts available.</p>
                @endif
                @foreach ($product as $product)

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="productImages/{{$product->image}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$product->title}}</h4>
                        <a href="{{url('show_oneProduct', $product->id)}}" title="More Details" class="details-link"><i
                                class="bi bi-eye-fill"></i></a>
                        <a href="{{url('add_toChart', $product->id)}}" class="details-link px-5"><i
                                class="fs-4 bi bi-bag-plus-fill"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->
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