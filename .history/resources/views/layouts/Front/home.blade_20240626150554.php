<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

{{--Header --}}
@include('layouts.Front.header')

<main class="main">

    <!-- Hero Section -->
    @include('layouts.Front.hero')

    <!-- Clients Section -->
    @include('layouts.Front.client')

    <!-- About Section -->
    @include('layouts.Front.about')

    
    <!-- Why Us Section -->
    @include('layouts.Front.whyus')
    
    @include('layouts.Front.posts.postPage')
    
    <!-- Skills Section -->
    @include('layouts.Front.portfolio')
    
    <!-- Services Section -->
    <!-- Portfolio Section -->
    @include('layouts.Front.service')
    
    <!-- Call To Action Section -->
    @include('layouts.Front.callto')
    
    @include('layouts.Front.skills')

    <!-- Team Section -->
    @include('layouts.Front.team')

    <!-- Pricing Section -->
    @include('layouts.Front.price')

    <!-- Testimonials Section -->
    @include('layouts.Front.testimonials')

    <!-- Faq 2 Section -->
    @include('layouts.Front.faq')

    <!-- Contact Section -->
    @include('layouts.Front.contact')

</main>

{{--footer--}}
@include('layouts.Front.footer')
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

{{--javascribt--}}
@include('layouts.Front.script')

</body>

</html>
