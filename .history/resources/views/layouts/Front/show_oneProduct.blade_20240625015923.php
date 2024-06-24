<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('layouts.Front.head')
</head>

<body class="index-page">

    {{--Header --}}
    @include('layouts.Front.header')
    @include('layouts.Front.singlePage')

    <section id="#" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Programming Topics</h2>
            <p>{{$product->title}}</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row ">
            

                <div class="col-md-3"></div>
                <div class=" col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img class="card-img-top" src="productImages/{{$product->image}}"/>
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                        </div>
                        <div class="card-footer">
                            
                            <small class="text-muted">{{$product->price}}</small>
                            <small class="text-muted">{{$product->name}}</small>
                            <small class="text-muted">{{$product->name}}</small>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-md-3"></div>


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