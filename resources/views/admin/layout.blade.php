<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap&subset=vietnamese"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets\images\favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets\css\bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('assets\css\icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('assets\css\app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset("assets\images\logo.svg")}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset("assets\images\logo-dark.png")}}" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset("assets\images\logo-light.svg")}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset("assets\images\logo-light.png")}}" alt="" height="19">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset("assets\images\users\avatar-1.jpg")}}"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1">Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="bx bx-user font-size-16 align-middle mr-1"></i>Thông tin cá nhân</a>
                            <a class="dropdown-item" href="#"><i
                                    class="bx bx-wallet font-size-16 align-middle mr-1"></i>Đổi mật khẩu</a>
                            <a class="dropdown-item text-danger" href="#"><i
                                    class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>Đăng
                                xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </header> <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar="" class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="{{route('dashboard')}}" class="waves-effect">
                                <span>Dashboards</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-closet"></i>
                                <span>Sản phẩm</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('product.list')}}">Danh sách sản phẩm</a></li>
                                <li><a href="ecommerce-product-detail.html">Thêm sản phẩm</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-file"></i>
                                <span>Danh mục</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="crypto-wallet.html">Danh sách danh mục</a></li>
                                <li><a href="crypto-buy-sell.html">Thêm danh mục</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-home"></i>
                                <span>Nhà cung cấp</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="email-inbox.html">Danh sách nhà cung cấp</a></li>
                                <li><a href="email-read.html">Thêm nhà cung cấp</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-images"></i>
                                <span>Banners</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="invoices-list.html">Danh sách banner</a></li>
                                <li><a href="invoices-detail.html">Thêm banner</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-discount"></i>
                                <span>Khuyến mãi</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="contacts-grid.html">Danh sách khuyến mãi</a></li>
                                <li><a href="contacts-list.html">Thêm khuyến mãi</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-basket"></i>
                                <span>Đơn hàng</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-user"></i>
                                <span>Khách hàng</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-user-voice"></i>
                                <span>Phản hồi khách hàng</span>
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
        @yield('content')
        <!-- end main content-->

    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset("assets\libs\jquery\jquery.min.js") }}"></script>
    <script src="{{ asset("assets\libs\bootstrap\js\bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets\libs\metismenu\metisMenu.min.js") }}"></script>
    <script src="{{ asset("assets\libs\simplebar\simplebar.min.js") }}"></script>
    <script src="{{ asset("assets\libs\node-waves\waves.min.js")}}"></script>

    <!-- apexcharts -->
    <script src="{{ asset("assets\libs\apexcharts\apexcharts.min.js")}}"></script>

    <script src="{{ asset("assets\js\pages\dashboard.init.js")}}"></script>

    <!-- App js -->
    <script src="{{ asset("assets\js\app.js")}}"></script>
</body>

</html>
