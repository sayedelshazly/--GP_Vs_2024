<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">


    {{--Header --}}
    @include('layouts.Front.header')
    @include('layouts.Front.singlePage')
    <section id="#" class="services section">
        @if (Session::has('success'))
        <div class="alert alert-success text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('success') }}</p>
        </div>
        @endif
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Create New Course</h2>
            <p>Read about the most important programming and web development topics</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 w-75 mx-auto">

                <!-- Basic Layout -->
                <div class="card">
                    <div class="card-body">
                        <p>{{$course->title}}</p><br>
                        <p>{{$course->description}}</p><br>
                        <p>{{$course->file}}</p><br>
                        <p><a href="#">Download</a></p><br>
                        <p><a href="{{url('dowload_course')}}"></a></p><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--footer--}}
    @include('layouts.Front.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

</html>