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
            <p class="px-2 badge text-bg-primary">Products Added To Cart = {{$count}}</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                @if($product->isEmpty())
                <p class="text-center badge text-bg-danger">No products available.</p>
                @endif
                @foreach ($product as $product)

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="productImages/{{$product->image}}" class="img-fluid" alt="">
                    <div class="portfolio-info d-flex justify-content-between align-items-center p-2 bg-body-secondary">
                        <h4>{{$product->title}}</h4>
                        <a href="{{url('add_toChart', $product->id)}}" class="px-5 mx-4"><i
                                class="fs-4 bi bi-bag-plus-fill"></i></a>
                        <a href="{{url('show_oneProduct', $product->id)}}" title="More Details" class="details-link"><i
                                class="fs-4 bi bi-eye-fill"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->
                @endforeach


            </div><!-- End Portfolio Container -->
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