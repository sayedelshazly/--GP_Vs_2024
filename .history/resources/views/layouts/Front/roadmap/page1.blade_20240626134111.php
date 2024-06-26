<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .main-timeline {
            font-family: 'Poppins', sans-serif;
        }

        .main-timeline:after {
            content: '';
            display: block;
            clear: both;
        }

        .main-timeline .timeline {
            width: calc(50% + 200px);
            margin: 0 0 25px 5px;
            float: right;
        }

        .main-timeline .timeline-content {
            color: #555;
            background: #fff;
            padding: 15px 15px 15px 290px;
            border-radius: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            display: block;
            position: relative;
        }

        .main-timeline .timeline-content:hover {
            text-decoration: none;
        }

        .main-timeline .timeline-content:before {
            content: '';
            background-color: #37517e;
            height: 100%;
            width: 120px;
            position: absolute;
            left: 140px;
            top: 0;
        }

        .main-timeline .timeline-year {
            color: #37517e;
            font-size: 40px;
            font-weight: 700;
            line-height: 43px;
            transform: translateY(-50%);
            position: absolute;
            left: 22px;
            top: 50%;
        }

        .main-timeline .timeline-icon {
            color: #fff;
            font-size: 50px;
            font-weight: 600;
            text-align: center;
            line-height: 50px;
            width: 120px;
            transform: translateY(-50%);
            position: absolute;
            left: 140px;
            top: 50%;
        }

        .main-timeline .title {
            font-size: 23px;
            font-weight: 500;
            text-transform: capitalize;
            margin: 0 0 7px;
        }

        .main-timeline .description {
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 0;
        }

        .main-timeline .timeline:nth-child(even) {
            margin: 0 5px 25px 0;
            float: left;
        }

        .main-timeline .timeline:nth-child(even) .timeline-content {
            padding: 15px 280px 15px 20px;
        }

        .main-timeline .timeline:nth-child(even) .timeline-content:before {
            left: auto;
            right: 139px;
        }

        .main-timeline .timeline:nth-child(even) .timeline-year {
            left: auto;
            right: 19px;
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon {
            left: auto;
            right: 139px;
        }

        .main-timeline .timeline:nth-child(4n+2) .timeline-content:before {
            background-color: #eea9c0;
        }

        .main-timeline .timeline:nth-child(4n+2) .timeline-year {
            color: #eea9c0;
        }

        .main-timeline .timeline:nth-child(4n+3) .timeline-content:before {
            background-color: #9f83c3;
        }

        .main-timeline .timeline:nth-child(4n+3) .timeline-year {
            color: #9f83c3;
        }

        .main-timeline .timeline:nth-child(4n+4) .timeline-content:before {
            background-color: #d5b380;
        }

        .main-timeline .timeline:nth-child(4n+4) .timeline-year {
            color: #d5b380;
        }

        @media screen and (max-width:767px) {

            .main-timeline .timeline,
            .main-timeline .timeline:nth-child(even) {
                width: 100%;
                margin: 0 0 30px;
            }

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(even) .timeline-content {
                text-align: center;
                padding: 200px 15px 15px 15px;
            }

            .main-timeline .timeline-content:before,
            .main-timeline .timeline:nth-child(even) .timeline-content:before {
                width: 100%;
                height: 100px;
                transform: translateX(-50%) translateY(0);
                left: 50%;
                right: auto;
                top: 80px;
            }

            .main-timeline .timeline-year,
            .main-timeline .timeline:nth-child(even) .timeline-year {
                transform: translateY(0) translateX(-50%);
                left: 50%;
                right: auto;
                top: 20px;
            }

            .main-timeline .timeline-icon,
            .main-timeline .timeline:nth-child(even) .timeline-icon {
                width: auto;
                transform: translateY(0) translateX(-50%);
                left: 50%;
                right: auto;
                top: 105px;
            }
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-year">2021</div>
                                    <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                                    <h3 class="title">HTML</h3>
                                    <p class="description">
                                        لبدأ حياتك في مجال ال Web يجب عليك تعلم لغة تصميم الصفحات والتي لا يمكن الإستغناء عنها سواء كنت Designer أو Developer وهي لغة Html وسوف تجد الدورة التعليمية ومعها جميع المراجع التي تحتاجها ومعها تمارين وأفكار كثيرة
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-year">2020</div>
                                    <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                                    <h3 class="title">Web Development</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada
                                        tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et
                                        condimentum neque commodo
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-year">2021</div>
                                    <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                                    <h3 class="title">Web Designing</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada
                                        tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et
                                        condimentum neque commodo
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-year">2020</div>
                                    <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                                    <h3 class="title">Web Development</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada
                                        tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et
                                        condimentum neque commodo
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-year">2021</div>
                                    <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                                    <h3 class="title">Web Designing</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada
                                        tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et
                                        condimentum neque commodo
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-year">2020</div>
                                    <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                                    <h3 class="title">Web Development</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada
                                        tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et
                                        condimentum neque commodo
                                    </p>
                                </a>
                            </div>
                        </div>
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