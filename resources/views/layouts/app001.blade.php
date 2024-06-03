<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" href="csslogin/images/logo.png" type="image/x-icon">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="description" content="Mô tả nội dung trang">
    <meta name="keywords" content="Từ khóa, từ khóa, từ khóa">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://www.example.com/">

    <!-- Favicon -->
    <link href="/backend-admin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/backend-admin/css/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="/backend-admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/backend-admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/./backend-admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/./backend-admin/css/style.css" rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    <script src="https://kit.fontawesome.com/2d2645b0e1.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{ route('dashboard') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>BookStore</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/asset/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Trang
                        chủ</a>
                    <a href="{{ route('users.index') }}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Quản
                        lý tài
                        khoản</a>
                    <a href="{{ route('books.index') }}" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Quản
                        lý sản phẩm</a>
                    <a href="{{ route('invoices.index') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Quản lý hóa đơn</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-2" src="/asset/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="/" class="dropdown-item">Trang chủ</a>
                            <form class="dropdown-item" method="post" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" value="Đăng xuất">
                            </form>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->

            <div class="container">
                @yield('content')
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">

            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg bscripttn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="/backend-admin/js/jquery-3.4.1.min.js"></script>
    <script src="/backend-admin/js/bootstrap.bundle.min.js"></script>
    <script src="/backend-admin/lib/chart/chart.min.js"></script>
    <script src="/backend-admin/lib/easing/easing.min.js"></script>
    <script src="/backend-admin/lib/waypoints/waypoints.min.js"></script>
    <script src="/backend-admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/backend-admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/backend-admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/backend-admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/backend-admin/js/main.js"></script>
    @stack('JS_REGION')
</body>

</html>