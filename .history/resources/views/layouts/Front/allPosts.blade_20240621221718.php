@include('layouts.Front.head')
@include('layouts.Front.header')

<section id="services" class="services section">

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
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div><!-- End Service Item -->
            @endforeach

        </div>
    </div>

</section><!-- /Services Section -->
<hr>
@include()