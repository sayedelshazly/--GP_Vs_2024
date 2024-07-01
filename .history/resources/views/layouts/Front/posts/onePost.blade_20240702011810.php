<!DOCTYPE html>
<html lang="en">

<head>
    

    @include('layouts.Front.head')
</head>

<body class="service-details-page">

    @include('layouts.Front.header')

    <main class="main">

        @include('layouts.Front.singlePage')
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Post Details</li>
                    </ol>
                </nav>
                <h1>Post Details</h1>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                            <h3>Product Information</h3>
                            <ul>
                                <li><span>Price</span> : </li>
                                <li><span>Category</span> : </li>
                                <li><span>Quantity</span> : </li>
                                <li><span>Created </span>: </li>
                            </ul>
                        </div><br>

                        <h4>Enim qui eos rerum in delectus</h4>
                        <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut
                            non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime
                            modi rerum.</p>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <img src="/postImages/{{$post->image}}" alt="" class="img-fluid services-img">
                        <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas
                        </h3>
                        <p>
                            Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et
                            doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis
                            fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt
                                    voluptatibus.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span>
                            </li>
                        </ul>
                        <p>
                            Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam
                            sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                        </p>
                        <p>
                            Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae
                            mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio
                            ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil.
                            Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum
                            in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque
                            nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>

    @include('layouts.Front.footer')


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('layouts.Front.script')

</body>

</html>