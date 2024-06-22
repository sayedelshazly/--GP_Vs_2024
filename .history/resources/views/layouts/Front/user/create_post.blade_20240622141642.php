<h1 class="text-center text-uppercase mt-5">Create new post</h1>

<div class="row w-75 mx-auto">
    <!-- Basic Layout -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">New Post</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="basic-default-name" />
                    </div>
                </div>


                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                    <div class="col-sm-10">
                        <textarea id="basic-default-message" rows="10" cols="30" class="form-control"
                            name="description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-file">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="basic-default-file" />
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Programming Topics</h2>
            <p>Read about the most important programming and web development topics</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                @if($posts->isEmpty())
                <p>No posts available.</p>
                @endif

                @foreach ($posts as $post )

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img class="card-img-top" src="postImages/{{$post->image}}" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Post by : {{$post->name}}</small>
                        </div>
                        <div class="card-footer">
                            <a href="{{url('showOnePost', $post->id)}}">Show</a>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                @endforeach

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