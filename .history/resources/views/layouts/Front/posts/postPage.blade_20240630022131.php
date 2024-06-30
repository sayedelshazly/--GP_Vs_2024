<section id="services" class="services section">

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

            <section class="light">
                <div class="container py-2">
                    <article class="postcard light blue">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="postImages/{{$post->image}}" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title blue"><a href="#">{{$post->title}}</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">{{$post->description}}</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Post by : {{$post->name}}</li>
                                <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                <li class="tag__item play blue">
                                    <a href="{{url('showOnePost', $post->id)}}">show</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    
                </div>
            </section>
            @endforeach

            <div class="d-flex justify-content-center align-items-center">
                <a href="{{url('showAllPosts')}}" class=" mb-4"><i class="fs-1 bi bi-chevron-double-right"></i><i
                        class="fs-1 bi bi-chevron-double-right"></i></a>
            </div>
        </div>
    </div>

</section><!-- /Services Section -->