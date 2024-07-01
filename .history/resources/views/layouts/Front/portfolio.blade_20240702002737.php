<section id="products" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Products</h2>
        <p>Watch Courses and Learn More</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">


            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                @if($product->isEmpty())
                <p class="text-center badge text-bg-danger w-auto mx-auto">No products available.</p>
                @endif
                @foreach ($product as $product)

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="productImages/{{$product->image}}"
                        class="img-fluid w-50 mx-auto border border-5 border-info rounded" alt="">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4 class="mt-2 text-uppercase">{{$product->title}}</h4>
                    </div>
                    <div class="col-le-4 d-flex justify-content-center">
                        <a href="{{url('show_oneProduct', $product->id)}}" title="More Details" class="details-link"><i
                                class="bi bi-eye-fill"></i></a>
                        <a href="{{url('add_toChart', $product->id)}}" class="px-5 mx-4"><i
                                class="fs-4 bi bi-bag-plus-fill"></i></a>
                </div><!-- End Portfolio Item -->
                </div>
                @endforeach


            </div><!-- End Portfolio Container -->
            <br><br>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <a href="{{url('show_allProducts')}}" class=" text-primary ">More
                    <i class=" bi bi-chevron-double-right"></i>
                    <i class="bi bi-chevron-double-right"></i>
                    <i class="bi bi-chevron-double-right"></i>
                </a>
            </div>

        </div>

    </div>

</section><!-- /Portfolio Section -->