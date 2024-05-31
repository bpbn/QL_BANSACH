@extends('layouts.app')


@section('title', 'Trang chủ')

@section('navbar')
    @parent
    {{-- slide --}}
    <div class="container" style="margin-top:100px">
        <div id="carouselExampleControls" class="carousel slide my-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('asset/img/book-01.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/book-02.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/book-03.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- card --}}

    <div class="container ">
        <div class="row">
            <!-- <div class="col-md-3 mb-2 mt-3 ">
                <h5 style="padding: 10px;background-color: #efe5f9">Danh mục sản phẩm
                </h5>
                <ul class="nav nav-pills flex-column">
                    @foreach ($cats as $cat)
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('detail.category', $cat->slug) }}">{{ $cat->name }}</a>
                        </li>
                    @endforeach

                </ul>
            </div> -->
            <div class="col-md-9">
                @foreach ($cats as $c)
                    
                    <h3>Danh mục {{ $c->name }}</h3>
                    <div class="card-deck mb-2">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                            @foreach ($book as $p)
                                @if ($c->id == $p->category_id)
                                    <div class="col">
                                        <div class="card mt-3 size-card">
                                            <a href="{{ route('detail.book', $p->id) }}">
                                                <img src=" {{ asset($p->img) }}" class="card-img-top size-img"
                                                    onerror="this.src='asset/img/no_image_placeholder.png';" alt="...">
                                                    <p></p>
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $p->name }}</h5>
                                                    <p class="card-text hide-less">{{ $p->description }}</p>
                                            </a>
                                            @if (Auth::check())
                                                {{-- Người dùng đã đăng nhập --}}
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="book_id" value="{{ $p->id }}">
                                                    <input type="hidden" name="price" value="{{ $p->price }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <!-- Có thể thay đổi giá trị mặc định cho số lượng -->

                                                    <button onclick="handleAddToCartAdd(event)" type="submit"
                                                        class="btn btn-primary custom-btn bi bi-cart-check"> Thêm vào
                                                        giỏ</button>
                                                </form>
                                                <form action="{{ route('favoritebook.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="book_id" value="{{ $p->id }}">
                                                    <input type="hidden" name="price" value="{{ $p->price }}">

                                                    <!-- Có thể thay đổi giá trị mặc định cho số lượng -->
                                                    <button onclick="handleAddToFavorite(event)"
                                                        class="btn btn-outline-success favorite-btn" type="submit"><i
                                                            class="far fa-heart "></i></button>


                                                </form>
                                            @else
                                                {{-- Người dùng chưa đăng nhập --}}
                                                <button type="submit" onclick="handleAddToLogin(event)"
                                                    class="btn btn-primary custom-btn bi bi-cart-check"> Thêm vào
                                                    giỏ</button>
                                            @endif

                                        </div>
                                    </div>
                                    </a>
                        </div>
                @endif
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    </div>
    <script>
        function handleAddToFavorite(event) {
            Swal.fire({
                position: "top",
                icon: "success",
                title: "Thêm thành công vào yêu thích",
                showConfirmButton: false,
                timer: 500000
            });
        }
    </script>
    <script>
        function handleAddToCartAdd(event) {
            Swal.fire({
                position: "top",
                icon: "success",
                title: "Thêm thành công vào giỏ hàng",
                showConfirmButton: false,
                timer: 500000
            });

            // Điều chỉnh vị trí hiển thị
            var toast = Swal.getToasts();
            if (toast) {
                toast.style.setProperty("top", "50px");
            }
        }
    </script>
    <script>
        function handleAddToLogin(event) {
            Swal.fire({
            position: "top",
            title: "Vui lòng đăng nhập vào tài khoản!",

            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ok"
            }).then((result) => {
            // if (result.isConfirmed) {
            //     Swal.fire({
            //     title: "Deleted!",
            //     text: "Your file has been deleted.",
            //     icon: "success"
            //     });
            // }
        });
        }
    </script>

    </div>
@endsection
