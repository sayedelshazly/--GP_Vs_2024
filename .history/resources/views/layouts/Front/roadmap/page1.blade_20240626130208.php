<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .timeline {
            position: relative;
            padding: 20px 0;
            list-style: none;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #dee2e6;
            left: 50%;
            margin-left: -2px;
        }

        .timeline>li {
            position: relative;
            min-height: 50px;
            margin-bottom: 50px;
        }

        .timeline>li::before,
        .timeline>li::after {
            content: " ";
            display: table;
        }

        .timeline>li::after {
            clear: both;
        }

        .timeline>li .timeline-panel {
            width: 45%;
            float: left;
            padding: 0 20px 20px;
            position: relative;
            text-align: right;
        }

        .timeline>li .timeline-panel::before {
            content: '';
            position: absolute;
            top: 20px;
            right: -15px;
            display: inline-block;
            border-top: 15px solid transparent;
            border-left: 15px solid #dee2e6;
            border-right: 0 solid #dee2e6;
            border-bottom: 15px solid transparent;
        }

        .timeline>li .timeline-image {
            position: absolute;
            z-index: 100;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            border: 5px solid #dee2e6;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            text-align: center;
            line-height: 90px;
            font-size: 18px;
            color: #495057;
        }

        .timeline>li.timeline-inverted .timeline-panel {
            float: right;
            text-align: left;
        }

        .timeline>li.timeline-inverted .timeline-panel::before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
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
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <h4>Step 1</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">First Event</h4>
                            </div>
                            <div class="timeline-body">
                                <p>Description of the first event.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Step 2</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Second Event</h4>
                            </div>
                            <div class="timeline-body">
                                <p>Description of the second event.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <h4>Step 3</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Third Event</h4>
                            </div>
                            <div class="timeline-body">
                                <p>Description of the third event.</p>
                            </div>
                        </div>
                    </li>
                    <!-- Add more events here -->
                </ul>
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