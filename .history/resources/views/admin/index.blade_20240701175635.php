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
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  {{-- users count --}}
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="AdminTemplate/assets/img/icons/unicons/chart-success.png" alt="chart success"
                              class="rounded" />
                          </div>
                        
                        </div>
                        <span class="fw-semibold d-block mb-1">Users</span>
                        <h3 class="card-title mb-2">{{$users}}</h3>
                      </div>
                    </div>
                    
                  </div> 
                  {{-- posts count --}}
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-center justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="AdminTemplate/assets/img/icons/unicons/chart-success.png" alt="chart success"
                              class="rounded" />
                          </div>
                          <span class="fw-semibold d-block mb-1">Posts</span>
                          <h3 class="card-title fs-5 mt-3">{{$posts}}</h3>
                        </div>
                      </div>
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