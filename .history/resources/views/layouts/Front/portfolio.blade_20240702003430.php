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
                <section>
                    <div class="text-center container py-5">

                        <div class="row">
                            

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                        data-mdb-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(17).webp"
                                            class="w-100" />
                                        <a href="#!">
                                            <div class="mask">
                                                <div class="d-flex justify-content-start align-items-end h-100"></div>
                                            </div>
                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <a href="" class="text-reset">
                                            <h5 class="card-title mb-3">Product name</h5>
                                        </a>
                                        <a href="" class="text-reset">
                                            <p>Category</p>
                                        </a>
                                        <h6 class="mb-3">$61.99</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(30).webp"
                                            class="w-100" />
                                        <a href="#!">
                                            <div class="mask">
                                                <div class="d-flex justify-content-start align-items-end h-100">
                                                    <h5>
                                                        <span class="badge bg-primary ms-2">New</span><span
                                                            class="badge bg-success ms-2">Eco</span><span
                                                            class="badge bg-danger ms-2">-10%</span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <a href="" class="text-reset">
                                            <h5 class="card-title mb-3">Product name</h5>
                                        </a>
                                        <a href="" class="text-reset">
                                            <p>Category</p>
                                        </a>
                                        <h6 class="mb-3">
                                            <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- <div class="col-lg-4 col-md-6 isotope-item filter-product">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4 class="mt-2 text-uppercase">{{$product->title}}</h4>
                    </div>
                    <img src="productImages/{{$product->image}}"
                        class="img-fluid w-50 mx-auto border border-5 border-info rounded" alt="">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{url('show_oneProduct', $product->id)}}" title="More Details" class="details-link"><i
                                class="fs-4 bi bi-eye-fill"></i></a>
                        <a href="{{url('add_toChart', $product->id)}}" class="px-5 mx-4"><i
                                class="fs-4 bi bi-bag-plus-fill"></i></a>
                    </div><!-- End Portfolio Item -->
                </div> --}}
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