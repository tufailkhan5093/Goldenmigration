<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Golden Migration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="images/logo-black.png">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body data-sidebar="dark">

<!-- Loader -->
{{-- <div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div> --}}

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="20">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="images/logo-black.png" alt="" height="20">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="d-none d-sm-block ms-2">
                    <h4 class="page-title font-size-18">Dashboard</h4>
                </div>

            </div>

            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input form-control" placeholder="Search" />
                    <a href="#" class="close-search toggle-search" data-bs-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>

            <div class="d-flex">

                <div class="dropdown d-none d-lg-inline-block">
                    <button type="button" class="btn header-item toggle-search noti-icon waves-effect"
                        data-bs-target="#search-wrap">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                </div>

                <div class="dropdown d-none d-md-block ms-2">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="me-2" src="assets/images/flags/us_flag.jpg" alt="Header Language" height="16"> English
                        <span class="mdi mdi-chevron-down"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/germany_flag.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> German </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/italy_flag.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> Italian </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/french_flag.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> French </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/spain_flag.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> Spanish </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/russia_flag.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> Russian </span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ion ion-md-notifications"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="" class="text-reset notification-item">
                                <div class="media d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="media d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-warning rounded-circle font-size-16">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="media d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-info rounded-circle font-size-16">
                                            <i class="mdi mdi-glass-cocktail"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It is a long established fact that a reader will</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="p-2 border-top text-center">
                            <a class="btn btn-sm btn-link font-size-14 w-100" href="javascript:void(0)">
                                View all
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block ms-2">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                            alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle me-2"></i>
                            Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet font-size-16 align-middle me-2"></i> My
                            Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">5</span><i
                                class="dripicons-gear font-size-16 align-middle me-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock font-size-16 align-middle me-2"></i> Lock
                            screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('login')}}"><i class="dripicons-exit font-size-16 align-middle me-2"></i>
                            Logout</a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-spin mdi-cog"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Main</li>

                    <li>
                        <a href="{{route('website-home')}}" class="waves-effect">
                            <i class="dripicons-device-desktop"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('website-aboutus')}}" class="waves-effect">
                            <i class="dripicons-device-desktop"></i>
                            <span>About Us</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-mail"></i>
                            <span> Services </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('web-partnervisa')}}">Partner Visa</a></li>
                            <li><a href="{{route('web-parentvisa')}}">Parent Visa</a></li>
                            <li><a href="{{route('web-childvisa')}}">Child Visa</a></li>
                            <li><a href="{{route('web-carervisa')}}">Carer Visa</a></li>
                            <li><a href="{{route('web-skilledvisa')}}">Skilled Visa</a></li>
                            <li><a href="{{route('web-workvisa')}}">Work Visa</a></li>
                            <li><a href="{{route('web-businessvisa')}}">Business Visa</a></li>
                            <li><a href="{{route('web-studentvisa')}}">Student Visa</a></li>
                            <li><a href="{{route('web-visitorvisa')}}">Visitor Visa</a></li>
                            <li><a href="{{route('web-residentreturnvisa')}}">Resident Return Visa</a></li>
                            <li><a href="{{route('web-appeals')}}">Appeals</a></li>
                            <li><a href="{{route('web-australiancitizenship')}}">Australian Citizenship</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('website-contactus')}}" class="waves-effect">
                            <i class="dripicons-device-desktop"></i>
                            <span>Contact Us</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        
        @yield('content')


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        ©
                        <script>document.write(new Date().getFullYear())</script> Fonik<span class="d-none d-sm-inline-block"> -
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Demo</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!--Morris Chart-->
<script src="assets/libs/morris.js/morris.min.js"></script>
<script src="assets/libs/raphael/raphael.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<!--tinymce js-->
<script src="assets/libs/tinymce/tinymce.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/form-editor.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>