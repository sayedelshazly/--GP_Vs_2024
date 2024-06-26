<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Insight</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{url('/')}}" class="">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li class="dropdown"><a href="#"><span>Posts</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{url('showAllPosts')}}">All Posts</a></li>
                        <li><a href="{{url('create_post')}}">Create Post</a></li>
                        <li><a href="{{url('user_allPosts')}}">My Posts</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Roadmap</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{url('showAllPosts')}}">Roadmap 1</a></li>
                <li><a href="{{url('create_post')}}">Roadmap 2</a></li>
                <li><a href="{{url('user_allPosts')}}">Roadmap 3</a></li>
                <li><a href="{{url('user_allPosts')}}">Roadmap 3</a></li>
                <li><a href="{{url('user_allPosts')}}">Roadmap 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
            </ul>
        </li>
                <li><a href="#contact">Contact</a></li>
                @if (Route::has('login'))
                @auth
                <li>
                    <x-app-layout>
                    </x-app-layout>

                </li>
                <a class="btn-getstarted" href="{{url('myCart')}}">Cart</a>


                @else
                <li>
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>
                </li>

                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                </li>
                @endif
                @endauth
                @endif
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>


    </div>
</header>