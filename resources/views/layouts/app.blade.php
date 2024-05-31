<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Mô tả nội dung trang">
    <meta name="keywords" content="Từ khóa, từ khóa, từ khóa">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://www.example.com/">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2d2645b0e1.js" crossorigin="anonymous"></script>

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>


</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

    </div>
    @section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light mt-0" style="background-color: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 1);">
        <div class="container-fluid">

            <a class="navbar-brand " href="/"><img src="{{ asset('asset/img/logo.png') }}" style="width: 70px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: flex; flex-direction: row; justify-content: flex-end;">
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Trang chủ</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Thể loại
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($cats as $cat)
                                <li><a class="dropdown-item" href="{{route('detail.category', $cat->id) }}">{{ $cat->name }}</a></li>
                    @endforeach
                </ul>
                </li> --}}
                </ul> -->
                <div class="sticky-top">
                    <ul class="nav justify-content-center">
                        <li class="item">
                            <button class="btn"><a href="{{ route('list-products') }}" style="color: black;">Tất cả sản phẩm</a></button>
                        </li>
                        <li class="item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Thể loại
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    @foreach ($cats as $cat)
                                    <li><a class="dropdown-item" href="{{route('detail.category', $cat->slug) }}">{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- <form action="" class="d-flex">
                        <input class="form-control me-2" name="key" type="search" placeholder="Tìm kiếm"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>

                    </form> --}}

                <form action="" class="d-flex">
                    <input class="form-control me-2" name="key" type="search" placeholder="Tìm kiếm" aria-label="Search" value="{{ request()->key }}">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>

                <ul class="navbar-nav mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Trang chủ</a>
                    </li> -->
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Thể loại
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($cats as $cat)
                                <li><a class="dropdown-item" href="{{route('detail.category', $cat->id) }}">{{ $cat->name }}</a></li>
                    @endforeach
                </ul>
                </li> --}}
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link fa-solid fa-cart-shopping" href="{{ route('cart.index') }}"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bi bi-heart-fill" href="{{ route('favoritebook.index') }}"></a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link fa-solid fa-cart-shopping" onclick="alert('Vui lòng đăng nhập tài khoản')" href="#"></a>

                    </li>
                    @endif
                </ul>

                <ul class="navbar-nav  mb-2 mb-lg-0 mr-auto">
                    @if (Auth::check())
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('asset/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            @can('role')
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Quản trị viên</a>
                            @endcan
                            <a href="{{ route('detail.index', Auth::user()->id) }}" class="dropdown-item">Thông
                                tin
                                cá nhân</a>
                            <a href="#" class="dropdown-item">Cài đặt</a>
                            <form class="dropdown-item" method="post" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" value="Đăng xuất">
                            </form>
                        </div>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Đăng ký</a>
                        </li>
                        @endif

                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <div class="sticky-top" style="box-shadow: inset 8px 8px 8px rgb(203, 206, 209, 0.5), inset -8px -8px 8px rgb(255, 255, 255, 0.5); background-color: #FAF3F0">
        <ul class="nav justify-content-center">
            <li class="item">
                <button class="btn"><a href="#" style="color: black;">Tất cả sản phẩm</a></button>
            </li>
            <li class="item">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Thể loại
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @foreach ($cats as $cat)
                        <li><a class="dropdown-item" href="{{route('detail.category', $cat->id) }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </li>
        </ul>
    </div> -->
    @show


    @section('footer')

    <div class="container-fluid mt-auto" style="margin-top: 50px;font-family: Verdana,Arial,Helvetica,sans-serif;background-color: #e3f2fd; ">
        <footer class="row row-cols-5 py-5 my-0 border-top" style="margin-bottom: 0px;">
            <div class="col">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <h5 class="ms-auto">Hỗ trợ khánh hàng</h5>
                <p>Email: 0306211076@caothang.edu.vn</p>
                <p>Hotline: <b style="color: rgb(18, 91, 193)">0344312253</b></p>
                {{-- <p class="text-muted">&copy; 2021</p> --}}
            </div>

            <div class="col">

            </div>

            <div class="col">
                <h5>Giới thiệu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Trang chủ</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Đặc trưng</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Định giá</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Câu hỏi thường
                            gặp</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Thông tin liên hệ</a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <h5>Tài khoản</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Quên mật khẩu</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('login') }}" class="nav-link p-0 text-muted">
                            Đăng nhập</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>Hướng dẫn</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hướng dẫn mua
                            hàng</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Phương thức thanh
                            toán</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Câu hỏi thường
                            gặp</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chính sách vận
                            chuyển</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chính sách bảo mật
                            thông tin</a></li>
                </ul>
            </div>

        </footer>

        <div class="clear"></div>
        <div style="text-align: center;padding-top: 0.5px;">
            <div class="block " id="content_FooterAddress">
                <div class="blockcontent">
                    <div style="text-align: center;">
                        Copyright &copy; 2014 bookstore.vn
                    </div>
                    <div style="text-align: center;">
                        &nbsp;
                    </div>
                    <div style="text-align: center;">
                        Địa chỉ: 1926, Võ Văn Kiệt P. 16, Quận 8, TP. Hồ Chí Minh </div>
                    <div style="text-align: center;">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
    @show
    </div>
    @show
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const targetDiv = document.querySelector('#navbarSupportedContent');

            navbarToggler.addEventListener('click', function() {
                const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
                if (isExpanded) {
                    targetDiv.style.display = 'none';
                } else {
                    targetDiv.style.display = 'block';
                }
            });
        });
    </script>
</body>

</html>