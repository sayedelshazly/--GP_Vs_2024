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
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container mt-5">
            <div class="row">
              {{-- users count --}}
              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-center justify-content-between">
                      <i class="fs-1 bi bi-people-fill"></i>
                      <span class="fw-semibold d-block mb-1">Users</span>
                      <h3 class="card-title fs-3 mt-2">{{$users}}</h3>
                    </div>
                  </div>
                </div>

              </div>
              {{-- posts count --}}
              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-center justify-content-between">
                      <i class="fs-1 bi bi-postcard-fill"></i>
                      <span class="fw-semibold d-block mb-1">Posts</span>
                      <h3 class="card-title fs-3 mt-2">{{$posts}}</h3>
                    </div>
                  </div>
                </div>
              </div>
              {{-- posts_status active count --}}
              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-center justify-content-between">
                      <i class="fs-1 bi bi-postcard-fill"></i>
                      <span class="fw-semibold d-block mb-1">Active Posts</span>
                      <h3 class="card-title fs-3 mt-2">{{$posts_active}}</h3>
                    </div>
                  </div>
                </div>

              </div>
              {{-- posts_status active count --}}
              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-center justify-content-between">
                      <i class="fs-1 bi bi-postcard-fill"></i>
                      <span class="fw-semibold d-block mb-1">Pending Posts</span>
                      <h3 class="card-title fs-3 mt-2">{{$post_pending}}</h3>
                    </div>
                  </div>
                </div>

              </div>
              {{-- products count --}}
              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-center justify-content-between">
                      <i class="fs-1 bi bi-bag-fill"></i>
                      <span class="fw-semibold d-block mb-1">Products</span>
                      <h3 class="card-title fs-3 mt-2">{{$products}}</h3>
                    </div>
                  </div>
                </div>

              </div>
              {{-- categories count --}}
              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-center justify-content-between">
                      <i class="fs-1 bi bi-tag-fill"></i>
                      <span class="fw-semibold d-block mb-1">Categories</span>
                      <h3 class="card-title fs-3 mt-2">{{$cat}}</h3>
                    </div>
                  </div>
                </div>

              </div>
              {{-- orders count --}}
              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-center justify-content-between">
                      <i class="fs-1 bi bi-bag-check-fill"></i>
                      <span class="fw-semibold d-block mb-1">Orders</span>
                      <h3 class="card-title fs-3 mt-2">{{$order}}</h3>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- / Content -->



            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
  </div>
  </div>
  <!-- / Layout wrapper -->



  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  @include('admin.scripts')
</body>

</html>