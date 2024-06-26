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
    @include('layouts.Front.skills')

    <!-- Services Section -->
    @include('layouts.Front.service')

    <!-- Call To Action Section -->
    @include('layouts.Front.callto')

    <!-- Portfolio Section -->
    @include('layouts.Front.portfolio')

    <!-- Team Section -->
    @include('layouts.Front.team')

    <!-- Pricing Section -->
    @include('layouts.Front.price')

   

</main>

{{--footer--}}
@include('layouts.Front.footer')


{{--javascribt--}}
@include('layouts.Front.script')

</body>

</html>
