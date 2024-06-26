<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

{{--Header --}}
@include('layouts.Front.header')

<main class="main">
    @include('layouts.Front.hero')

    @foreach ($cart as $cart )
        {{$cart->user_id}}
        {{$cart->product_id}}
        {{$cart->product->title}}
        {{$cart->product->title}}
    @endforeach


</main>

{{--footer--}}
@include('layouts.Front.footer')


{{--javascribt--}}
@include('layouts.Front.script')

</body>

</html>
