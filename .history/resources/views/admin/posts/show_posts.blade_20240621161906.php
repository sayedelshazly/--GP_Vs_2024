<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    @include('admin.head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('admin.asideMenu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('admin.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                {{-- <div class="content-wrapper"> --}}
                    <!-- Content -->
                    <h1 class="text-center text-uppercase mt-5">All Posts</h1>
                    
                {{-- </div> --}}
            </div>
        </div>
        <!-- / Layout wrapper -->



        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        @include('admin.scripts')
</body>

</html>