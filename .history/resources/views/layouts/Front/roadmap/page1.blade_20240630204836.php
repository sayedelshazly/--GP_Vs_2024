<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Poppins;
        }

        @font-face {
            font-family: Poppins;
            src: url(./fonts/Poppins-Medium.ttf);
        }

        .main {
            width: 100%;
            height: auto;
            display: grid;
            place-items: center;
            background-color: rgb(245, 245, 245);
        }

        .main .head {
            font-size: 29px;
            color: #37517e;
            position: relative;
            margin-bottom: 100px;
            font-weight: 500;
        }

        .main .head::after {
            content: " ";
            position: absolute;
            width: 50%;
            height: 3px;
            left: 50%;
            bottom: -5px;
            transform: translateX(-50%);
            background-image: linear-gradient(to right, #37517e,#47b2e4);
        }

        /* Container Css Start  */

        .container {
            width: 70%;
            height: auto;
            margin: auto 0;
            position: relative;
        }

        .container ul {
            list-style: none;
        }

        .container ul::after {
            content: " ";
            position: absolute;
            width: 2px;
            height: 100%;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            background-image: linear-gradient(to bottom, #37517e, #47b2e4);
        }

        .container ul li {
            width: 50%;
            height: auto;
            padding: 15px 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.218);
            position: relative;
            margin-bottom: 30px;
            z-index: 99;
        }

        .container ul li:nth-child(4) {
            margin-bottom: 0;
        }

        .container ul li .circle {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #37517e;
            top: 0;
            display: grid;
            place-items: center;
        }

        .circle::after {
            content: ' ';
            width: 12px;
            height: 12px;
            background-color: #47b2e4;
            border-radius: 50%;
        }

        ul li:nth-child(odd) .circle {
            transform: translate(50%, -50%);
            right: -30px;
        }

        ul li:nth-child(even) .circle {
            transform: translate(-50%, -50%);
            left: -30px;
        }

        ul li .date {
            position: absolute;
            width: 130px;
            height: 33px;
            background-image: linear-gradient(to right, #37517e, #47b2e4);
            border-radius: 15px;
            top: -45px;
            display: grid;
            place-items: center;
            color: #fff;
            font-size: 13px;
            box-shadow: 1px 2px 12px rgba(0, 0, 0, 0.318);
        }

        .container ul li:nth-child(odd) {
            float: left;
            clear: right;
            text-align: right;
            transform: translateX(-30px);
        }

        ul li:nth-child(odd) .date {
            right: 20px;
        }

        .container ul li:nth-child(even) {
            float: right;
            clear: left;
            transform: translateX(30px);
        }

        ul li .heading {
            font-size: 17px;
            color: #37517e;
        }

        ul li p {
            font-size: 13px;
            color: #666;
            line-height: 18px;
            margin: 6px 0 4px 0;
        }

        ul li a {
            font-size: 13px;
            text-decoration: none;
            color: #37517e;
            transition: all 0.3s ease;
        }


        @media only screen and (min-width:798px) and (max-width: 1100px) {
            .container {
                width: 80%;
            }
        }

        @media only screen and (max-width: 798px) {
            .container {
                width: 70%;
                transform: translateX(20px);
            }

            .container ul::after {
                left: -40px;
            }

            .container ul li {
                width: 100%;
                float: none;
                clear: none;
                margin-bottom: 80px;
            }

            .container ul li .circle {
                left: -40px;
                transform: translate(-50%, -50%);
            }

            .container ul li .date {
                left: 20px;
            }

            .container ul li:nth-child(odd) {
                transform: translateX(0px);
                text-align: left;
            }

            .container ul li:nth-child(even) {
                transform: translateX(0px);
            }
        }

        @media only screen and (max-width: 550px) {
            .container {
                width: 80%;
            }

            .container ul::after {
                left: -20px;
            }

            .container ul li .circle {
                left: -20px;
            }
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
                        <ul>
                            <li>
                                <h2 class="heading">Node.js</h2>
                                <p>Description: Node.js is a runtime environment that allows you to run JavaScript on the server-side. It's widely used for building scalable network applications.</p>
                                <a href="https://www.youtube.com/watch?v=uVwtVBpw7RQ" target="_blank">Read More ></a>
                                <span class="date">May 2021</span>
                                <span class="circle"></span>
                            </li>
                            <li>
                                <h2 class="heading">Python (Django)</h2>
                                <p>Description: Python with Django is a powerful web framework that encourages rapid development and clean, pragmatic design.</p>
                                <a href="https://www.youtube.com/watch?v=UmljXZIypDc" target="_blank">Read More ></a>
                                <span class="date">June 2021</span>
                                <span class="circle"></span>
                            </li>
                            <li>
                                <h2 class="heading">Ruby on Rails</h2>
                                <p>Description: Ruby on Rails, often simply Rails, is a server-side web application framework written in Ruby under the MIT License.</p>
                                <a href="https://www.youtube.com/watch?v=pPy0GQJLZUM" target="_blank">Read More ></a>
                                <span class="date">July 2021</span>
                                <span class="circle"></span>
                            </li>
                            <li>
                                <h2 class="heading">PHP (Laravel)</h2>
                                <p>Description: PHP with Laravel is a powerful MVC framework for PHP, known for its simplicity, elegance, and readability.</p>
                                <a href="https://www.youtube.com/watch?v=ImtZ5yENzgE" target="_blank">Read More ></a>
                                <span class="date">August 2021</span>
                                <span class="circle"></span>
                            </li>
                            <li>
                                <h2 class="heading">Java (Spring Boot)</h2>
                                <p>Description: Spring Boot makes it easy to create stand-alone, production-grade Spring-based applications that you can "just run".</p>
                                <a href="https://www.youtube.com/watch?v=vtPkZShrvXQ" target="_blank">Read More ></a>
                                <span class="date">September 2021</span>
                                <span class="circle"></span>
                            </li>
                            <li>
                                <h2 class="heading">ASP.NET Core</h2>
                                <p>Description: ASP.NET Core is a cross-platform, high-performance framework for building modern, cloud-based, and internet-connected applications.</p>
                                <a href="https://www.youtube.com/watch?v=C5cnZ-gZy2I" target="_blank">Read More ></a>
                                <span class="date">October 2021</span>
                                <span class="circle"></span>
                            </li>
                        </ul>
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