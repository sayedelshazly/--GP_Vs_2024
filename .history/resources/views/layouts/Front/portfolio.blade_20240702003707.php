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


                <div class="col-lg-4 col-md-6 isotope-item filter-product">



                    <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(1).webp"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                        <div class="d-flex justify-content-start align-items-start h-100">
                                            <h5><span
                                                    class="badge bg-body-tertiary pt-2 ms-3 mt-3 text-dark">$123</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

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