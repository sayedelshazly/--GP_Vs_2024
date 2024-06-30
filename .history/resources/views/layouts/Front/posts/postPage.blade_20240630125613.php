<section id="posts" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Programming Topics</h2>
        <p>Read about the most important programming and web development topics</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            @if($posts->isEmpty())
            <p class="text-center">No posts available.</p>
            @endif

            @foreach ($posts as $post )

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img class="card-img-top" src="postImages/{{$post->image}}" alt="Card image cap" />
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <a class="mx-3" href="{{url('showOnePost', $post->id)}}"><i class="fs-3 bi bi-eye-fill"></i></a>

                    </div>
                    <div class="p-2">
                        <small class="px-2 badge text-bg-primary">{{$post->name}}</small>
                    </div>

                </div>
            </div><!-- End Service Item -->

            @endforeach

            <div class="d-flex justify-content-center align-items-center">
                More <a href="{{url('showAllPosts')}}" class=" mt-4"><i class="fs-4 bi bi-chevron-double-right"></i><i
                        class="fs-4 bi bi-chevron-double-right"></i></a>
            </div>
        </div>
    </div>

</section><!-- /Services Section -->