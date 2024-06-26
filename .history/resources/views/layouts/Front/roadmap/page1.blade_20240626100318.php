<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .circle {
            padding: 13px 20px;
            border-radius: 50%;
            background-color: #ED8D8D;
            color: #fff;
            max-height: 50px;
            z-index: 2;
        }

        .how-it-works.row .col-2 {
            align-self: stretch;
        }

        .how-it-works.row .col-2::after {
            content: "";
            position: absolute;
            border-left: 3px solid #ED8D8D;
            z-index: 1;
        }

        .how-it-works.row .col-2.bottom::after {
            height: 50%;
            left: 50%;
            top: 50%;
        }

        .how-it-works.row .col-2.full::after {
            height: 100%;
            left: calc(50% - 3px);
        }

        .how-it-works.row .col-2.top::after {
            height: 50%;
            left: 50%;
            top: 0;
        }


        .timeline div {
            padding: 0;
            height: 40px;
        }

        .timeline hr {
            border-top: 3px solid #ED8D8D;
            margin: 0;
            top: 17px;
            position: relative;
        }

        .timeline .col-2 {
            display: flex;
            overflow: hidden;
        }

        .timeline .corner {
            border: 3px solid #ED8D8D;
            width: 100%;
            position: relative;
            border-radius: 15px;
        }

        .timeline .top-right {
            left: 50%;
            top: -50%;
        }

        .timeline .left-bottom {
            left: -50%;
            top: calc(50% - 3px);
        }

        .timeline .top-left {
            left: -50%;
            top: -50%;
        }

        .timeline .right-bottom {
            left: 50%;
            top: calc(50% - 3px);
        }
        .m-top{
            margin-top: 200px;
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
            <div class="container">
                <!--first section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1</div>
                    </div>
                    <div class="col-6">
                        <h5>Fully Responsive</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi
                            orci urna, iaculis in ligula et, posuere interdum lectus.</p>
                    </div>
                </div>
                <!--path between 1-2-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr />
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>
                <!--second section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-right">
                        <h5>Using Bootstrap</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi
                            orci urna, iaculis in ligula et, posuere interdum lectus.</p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">2</div>
                    </div>
                </div>
                <!--path between 2-3-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr />
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>
                <!--third section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">3</div>
                    </div>
                    <div class="col-6">
                        <h5>Now with Pug and Sass</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi
                            orci urna, iaculis in ligula et, posuere interdum lectus.</p>
                    </div>
                </div>
                 <!--forth section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">3</div>
                    </div>
                    <div class="col-6">
                        <h5>Now with Pug and Sass</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi
                            orci urna, iaculis in ligula et, posuere interdum lectus.</p>
                    </div>
                </div>
            </div>
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