<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="d-flex justify-content-center w-50 mx-auto">

        <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Insight</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{url('/')}}" class="">Home</a></li>
                <li class="dropdown"><a href="#"><span>Posts</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{url('showAllPosts')}}">All Posts</a></li>
                        <li><a href="{{url('create_post')}}">Create Post</a></li>
                        <li><a href="{{url('user_allPosts')}}">My Posts</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Roadmap</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="/roadmap/page1">Roadmap 1</a></li>
                <li><a href="/roadmap/page2">Roadmap 2</a></li>
                <li><a href="/roadmap/page3">Roadmap 3</a></li>
                <li><a href="/roadmap/page4">Roadmap 4</a></li>
                <li><a href="/roadmap/page5">Roadmap 5</a></li>
            </ul>
        </li>
                @if (Route::has('login'))
                @auth
                <li>
                    <x-app-layout>
                    </x-app-layout>
                    

                </li>
                <a class="" href="{{url('myCart')}}"><i class="bi bi-bag-heart-fill fs-4"></i></a>


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
                        </a>
                </li>
                @endif
                @endauth
                @endif
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>


    </div>
</header>