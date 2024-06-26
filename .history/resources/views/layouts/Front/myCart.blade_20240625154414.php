<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

{{--Header --}}
@include('layouts.Front.header')

<main class="main">

    

    
  
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
