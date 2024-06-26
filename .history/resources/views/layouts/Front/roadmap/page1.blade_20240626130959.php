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

        .m-top {
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
            Previous DemoBest jQueryCodelab
            Timeline Style : Demo 139
            2021
            Web Designing
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum
            neque commodo Integer males uada tellus lorem, et condimentum neque commodo

            2020
            Web Development
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum
            neque commodo Integer males uada tellus lorem, et condimentum neque commodo

            2019
            Java Script
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum
            neque commodo Integer males uada tellus lorem, et condimentum neque commodo

            2018
            Web Designing
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum
            neque commodo Integer males uada tellus lorem, et condimentum neque commodo


            HTML (Icons : Fontawesome & CSS Framwork: Bootstrap)
            1
            2
            3
            4
            5
            6
            7
            8
            9
            10
            11
            12
            13
            14
            15
            16
            17
            18
            19
            20
            21
            22
            23
            24
            25
            26
            27
            28
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
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
            CSS (Fonts required: Poppins.)
            1
            2
            3
            4
            5
            6
            7
            8
            9
            10
            11
            12
            13
            14
            15
            16
            17
            18
            19
            20
            21
            22
            23
            24
            25
            26
            27
            28
            29
            30
            31
            32
            33
            34
            35
            36
            37
            38
            39
            40
            41
            42
            43
            44
            45
            46
            47
            48
            49
            50
            51
            52
            53
            54
            55
            56
            57
            58
            59
            60
            61
            62
            63
            64
            65
            66
            67
            68
            69
            70
            71
            72
            73
            74
            75
            76
            77
            78
            79
            80
            81
            82
            83
            84
            85
            86
            87
            88
            89
            90
            91
            92
            93
            94
            95
            96
            97
            98
            99
            100
            101
            102
            103
            104
            105
            106
            107
            108
            109
            110
            111
            112
            113
            114
            115
            116
            117
            118
            119
            120
            121
            122
            123
            .main-timeline{ font-family: 'Poppins', sans-serif; }
            .main-timeline:after{
            content: '';
            display: block;
            clear: both;
            }
            .main-timeline .timeline{
            width: calc(50% + 200px);
            margin: 0 0 25px 5px;
            float: right;
            }
            .main-timeline .timeline-content{
            color: #555;
            background: #fff;
            padding: 15px 15px 15px 290px;
            border-radius: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            display: block;
            position: relative;
            }
            .main-timeline .timeline-content:hover{ text-decoration: none; }
            .main-timeline .timeline-content:before{
            content: '';
            background-color: #00A7FB;
            height: 100%;
            width: 120px;
            position: absolute;
            left: 140px;
            top: 0;
            }
            .main-timeline .timeline-year{
            color: #00A7FB;
            font-size: 40px;
            font-weight: 700;
            line-height: 43px;
            transform: translateY(-50%);
            position: absolute;
            left: 22px;
            top: 50%;
            }
            .main-timeline .timeline-icon{
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
            .main-timeline .title{
            font-size: 23px;
            font-weight: 500;
            text-transform: capitalize;
            margin: 0 0 7px;
            }
            .main-timeline .description{
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 0;
            }
            .main-timeline .timeline:nth-child(even){
            margin: 0 5px 25px 0;
            float: left;
            }
            .main-timeline .timeline:nth-child(even) .timeline-content{ padding: 15px 280px 15px 20px; }
            .main-timeline .timeline:nth-child(even) .timeline-content:before{
            left: auto;
            right: 139px;
            }
            .main-timeline .timeline:nth-child(even) .timeline-year{
            left: auto;
            right: 19px;
            }
            .main-timeline .timeline:nth-child(even) .timeline-icon{
            left: auto;
            right: 139px;
            }
            .main-timeline .timeline:nth-child(4n+2) .timeline-content:before{ background-color: #FF3E7D; }
            .main-timeline .timeline:nth-child(4n+2) .timeline-year{ color: #FF3E7D; }
            .main-timeline .timeline:nth-child(4n+3) .timeline-content:before{ background-color: #7338BA; }
            .main-timeline .timeline:nth-child(4n+3) .timeline-year{ color: #7338BA; }
            .main-timeline .timeline:nth-child(4n+4) .timeline-content:before{ background-color: #FF9800; }
            .main-timeline .timeline:nth-child(4n+4) .timeline-year{ color: #FF9800; }
            @media screen and (max-width:767px){
            .main-timeline .timeline,
            .main-timeline .timeline:nth-child(even){
            width: 100%;
            margin: 0 0 30px;
            }
            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(even) .timeline-content{
            text-align: center;
            padding: 200px 15px 15px 15px;
            }
            .main-timeline .timeline-content:before,
            .main-timeline .timeline:nth-child(even) .timeline-content:before{
            width: 100%;
            height: 100px;
            transform: translateX(-50%) translateY(0);
            left: 50%;
            right: auto;
            top: 80px;
            }
            .main-timeline .timeline-year,
            .main-timeline .timeline:nth-child(even) .timeline-year{
            transform: translateY(0) translateX(-50%);
            left: 50%;
            right: auto;
            top: 20px;
            }
            .main-timeline .timeline-icon,
            .main-timeline .timeline:nth-child(even) .timeline-icon{
            width: auto;
            transform: translateY(0) translateX(-50%);
            left: 50%;
            right: auto;
            top: 105px;
            }
            }
            License Terms

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