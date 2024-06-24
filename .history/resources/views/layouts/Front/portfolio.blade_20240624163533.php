<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Products</h2> <a href=""></a>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($product as $product)

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$product->title}}</h4>
                        <p>Description</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1"
                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->
                @endforeach

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->