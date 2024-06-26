<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .timeline {
            border-left: 1px solid hsl(0, 0%, 90%);
            position: relative;
            list-style: none;
        }

        .timeline .timeline-item {
            position: relative;
        }

        .timeline .timeline-item:after {
            position: absolute;
            display: block;
            top: 0;
        }

        .timeline .timeline-item:after {
            background-color: hsl(0, 0%, 90%);
            left: -38px;
            border-radius: 50%;
            height: 11px;
            width: 11px;
            content: "";
        }
    </style>

    <!------ Include the above in your HEAD tag ---------->
</head>

<body class="index-page">

    {{--Header --}}
    @include('layouts.Front.header')

    <main class="main">

        <!-- Hero Section -->
        @include('layouts.Front.roadmap_info')

        <div class="m-top">
            <!-- Section: Timeline -->
            <section class="py-5">
                <ul class="timeline">
                    <li class="timeline-item mb-5">
                        <h5 class="fw-bold">Our company starts its operations</h5>
                        <p class="text-muted mb-2 fw-bold">11 March 2020</p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
                            necessitatibus adipisci, ad alias, voluptate pariatur officia
                            repellendus repellat inventore fugit perferendis totam dolor
                            voluptas et corrupti distinctio maxime corporis optio?
                        </p>
                    </li>

                    <li class="timeline-item mb-5">
                        <h5 class="fw-bold">First customer</h5>
                        <p class="text-muted mb-2 fw-bold">19 March 2020</p>
                        <p class="text-muted">
                            Quisque ornare dui nibh, sagittis egestas nisi luctus nec. Sed
                            aliquet laoreet sapien, eget pulvinar lectus maximus vel.
                            Phasellus suscipit porta mattis.
                        </p>
                    </li>

                    <li class="timeline-item mb-5">
                        <h5 class="fw-bold">Our team exceeds 10 people</h5>
                        <p class="text-muted mb-2 fw-bold">24 June 2020</p>
                        <p class="text-muted">
                            Orci varius natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Nulla ullamcorper arcu lacus, maximus
                            facilisis erat pellentesque nec. Duis et dui maximus dui aliquam
                            convallis. Quisque consectetur purus erat, et ullamcorper sapien
                            tincidunt vitae.
                        </p>
                    </li>

                    <li class="timeline-item mb-5">
                        <h5 class="fw-bold">Earned the first million $!</h5>
                        <p class="text-muted mb-2 fw-bold">15 October 2020</p>
                        <p class="text-muted">
                            Nulla ac tellus convallis, pulvinar nulla ac, fermentum diam. Sed
                            et urna sit amet massa dapibus tristique non finibus ligula. Nam
                            pharetra libero nibh, id feugiat tortor rhoncus vitae. Ut suscipit
                            vulputate mattis.
                        </p>
                    </li>
                </ul>
            </section>
            <!-- Section: Timeline -->
        </div>

        <!-- Contact Section -->
        @include('layouts.Front.contact')

    </main>

    {{--footer--}}
    @include('layouts.Front.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    {{--javascribt--}}
    @include('layouts.Front.script')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>