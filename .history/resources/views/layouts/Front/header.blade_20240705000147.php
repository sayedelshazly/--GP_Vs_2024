<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">ThinkTank</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li class=""><a href="{{url('/')}}" class=""><i class="fs-2 bi bi-house-door-fill"></i></a></li>
                {{-- <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#pricing">Pricing</a></li> --}}
                <li class="dropdown"><a href="#"><span>Posts</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{url('showAllPosts')}}">All Posts</a></li>
                        <li><a href="{{url('create_post')}}">Create Post</a></li>
                        <li><a href="{{url('user_allPosts')}}">My Posts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('my_books')}}">Books</a>
                </li>
                <li class="dropdown"><a href="#" class=""><span class=" ">Roadmap</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/roadmap/page">Basics of Programming</a></li>
                        <li><a href="/roadmap/page1">Backend Development</a></li>
                        <li><a href="/roadmap/page2">Frontend Development</a></li>
                        <li><a href="/roadmap/page3">WordPress</a></li>
                        <li><a href="/roadmap/page4">Mobile Development</a></li>
                        <li><a href="/roadmap/page5">FullStack Development</a></li>
                    </ul>
                </li>
                {{-- <li><a href="#contact">Contact</a></li> --}}
                @if (Route::has('login'))
                @auth
                <a class="" href="{{url('myCart')}}"><i class="bi bi-cart-fill fs-4" style="color: #ffffff"></i></a>
                <a href="#"><i class="bi bi-star-fill fs-4" style="color: #fafafa"></i></a>
                <a href="#"><i class="bi bi-bell-fill fs-4"></i></a>
                <li>
                    <x-app-layout>
                    </x-app-layout>
                </li>
                
                @else
                <li>
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <i class="bi bi-box-arrow-in-left fs-4"></i></a>
                </li>
                
                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        SignUp</a>
                </li>
                @endif
                @endauth
                @endif
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        {{-- <a class="btn-getstarted" href="#about">Get Started</a>     --}}

    </div>
</header>