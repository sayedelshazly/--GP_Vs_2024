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

            {{-- @foreach ($posts as $post ) --}}

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
                        <a href="{{url('showOnePost', $post->id)}}">show</a>
                    </div>
                </div>
            </div><!-- End Service Item -->
            <section class="dark">
                <div class="container py-4">
                    <h1 class="h1 text-center" id="pageHeaderTitle">My Cards Dark</h1>

                    <article class="postcard dark blue">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis
                                molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla
                                unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                <li class="tag__item play blue">
                                    <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    
                </div>
            </section>

            <section class="light">
                <div class="container py-2">
                    <div class="h1 text-center text-dark" id="pageHeaderTitle">My Cards Light</div>

                    <article class="postcard light blue">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis
                                molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla
                                unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                <li class="tag__item play blue">
                                    <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
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