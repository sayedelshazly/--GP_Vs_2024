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
                    <h1 class="text-center text-uppercase mt-5">Create new post</h1>

                    <div class="row w-75 mx-auto">
                        <!-- Basic Layout -->
                            <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">New Post</h5>
                                    <small class="text-muted float-end">Default label</small>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-name"
                                                    placeholder="John Doe" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"
                                                for="basic-default-company">Company</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-company"
                                                    placeholder="ACME Inc." />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"
                                                for="basic-default-email">Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <input type="text" id="basic-default-email" class="form-control"
                                                        placeholder="john.doe" aria-label="john.doe"
                                                        aria-describedby="basic-default-email2" />
                                                    <span class="input-group-text"
                                                        id="basic-default-email2">@example.com</span>
                                                </div>
                                                <div class="form-text">You can use letters, numbers & periods</div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone
                                                No</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="basic-default-phone"
                                                    class="form-control phone-mask" placeholder="658 799 8941"
                                                    aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"
                                                for="basic-default-message">Message</label>
                                            <div class="col-sm-10">
                                                <textarea id="basic-default-message" class="form-control"
                                                    placeholder="Hi, Do you have a moment to talk Joe?"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"></textarea>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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