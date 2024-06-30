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
            <h2>Post about : {{$post->title}}</h2>
            <p>Read about the most important programming and web development topics</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row">

                <div class="col-md-3"></div>

                <div class=" col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img class="card-img-top" src="postImages/{{$post->image}}" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                        </div>
                        <div class="p-2 d-flex justify-content-between align-items-center">
                            <div class="p-2">
                                <small class="px-2 badge text-bg-primary">{{$post->name}}</small>
                                <small class="px-2 text-primary text-bold "> {{ $post->created_at->diffForHumans()
                                    }}</small>
                            </div>
                            <div class="p-2 d-flex justify-content-between align-items-center">
                                <form action="{{url('delete_user_post', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                                <a href="{{url('edit_user_post', $post->id)}}" class="btn btn-gray">Edit</a>
                            </div>
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