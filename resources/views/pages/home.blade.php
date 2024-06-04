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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

{{-- card --}}

<div class="container" style="margin-top: 50px">
    <div class="d-flex" style="justify-content: center;">
        <h2>Một số tiểu thuyết tiêu biểu</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-5 g-4 mb-4">
        @foreach ($cats as $c)
        @php
        $count = 0;
        @endphp
        @foreach ($book as $p)
        @if ($c->id == $p->category_id && $c->id == 5 && $count < 5) <div class="col d-flex">
            <div class="card m-3 d-flex flex-column" style="width: 18rem; height: 100%; position: relative;">
                <!-- Discount div -->
                @php
                // Lấy phần trăm giảm giá tương ứng với thể loại của sách
                $discountPercentage = 0; // Khởi tạo giá trị mặc định
                if ($p->category && $p->category->promotional && $p->category->promotional != null) {
                // Lặp qua danh sách Promotional của Category và lấy giá trị discount
                $discountPercentage = $p->category->promotional->discount;
                // Tính giá sau khi giảm
                $discountedPrice = $p->price - ($p->price * ($discountPercentage / 100));
                }
                else{
                $discountedPrice = $p->price;
                }
                @endphp
                @if($discountPercentage != 0)
                <div class="discount-badge" style="position: absolute; top: 10px; left: 10px; background: red; color: white; padding: 5px; border-radius: 5px;">
                    -{{ $discountPercentage }}%
                </div>
                @endif

                <a href="{{ route('detail.book', $p->id) }}" class="d-flex flex-column align-items-center">
                    <img src="{{ $p->img }}" class="card-img-top" style="width: 70%" alt="..." onerror="this.src='/asset/img/no_image_placeholder.png'">
                </a>
                <div class="card-body-product d-flex flex-column p-2">
                    <a href="{{ route('detail.book', $p->id) }}" class="d-flex flex-column align-items-center">
                        <h5 class="card-title">{{ $p->name }}</h5>
                    </a>
                </div>

                {{--Hiển thị giá sản phẩm--}}
                <div class="price-product " style="text-align: center; top: 20px">
                    <div class="row d-flex" style="align-items: center;">
                        <div class="col" style="color: red; font-size: 1.2em; font-weight: bold;">
                            {{ number_format($discountedPrice, 0, ',', '.') }}đ
                        </div>
                        @if($discountPercentage != 0)
                        <div class="col" style="text-decoration: line-through; color: gray; font-size: 0.9em;">
                            {{ number_format($p->price, 0, ',', '.') }}đ
                        </div>
                        @endif
                    </div>
                </div>

                @if (Auth::check())
                <form action="{{ route('favoritebook.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $p->id }}">
                    <input type="hidden" name="price" value="{{ $p->price }}">

                    <!-- Có thể thay đổi giá trị mặc định cho số lượng -->
                    <button class="btn btn-outline-danger favorite-btn" type="submit" onclick="handleAddToFavorite(event)"><i class="far fa-heart "></i></button>

                </form>
                {{-- Người dùng đã đăng nhập --}}
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $p->id }}">
                    <input type="hidden" name="price" value="{{ $p->price }}">
                    <input type="hidden" name="quantity" value="1">

                    <div class="mt-4 w-4">
                        <button type="submit" class="btn btn-primary custom-btn" onclick="handleAddToCartAdd(event)"> Thêm vào giỏ</button>
                    </div>
                </form>
                @else
                <div class="mt-4 w-4">
                    <button type="submit" onclick="handleAddToLogin(event)" class="btn btn-primary custom-btn">Thêm vào giỏ</button>
                </div>
                <div class="mt-4 w-4">
                    <button class="btn btn-outline-danger favorite-btn" type="submit" onclick="handleAddToLogin(event)"><i class="far fa-heart "></i></button>
                </div>
                @endif

            </div>
            @php
            $count++;
            @endphp
    </div>
    @endif
    @endforeach
    @endforeach
</div>

<div class="d-flex" style="justify-content: center; margin-top: 50px">
    <h2>Một số sản phẩm khác</h2>
</div>
<div class="row row-cols-1 row-cols-md-5 g-4 mb-4">
    @php
    $totalBooks = $book->count();
    $displayBooks = $book->slice($totalBooks - 5, 5); // Lấy 5 sản phẩm cuối cùng từ danh sách
    @endphp
    @foreach ($displayBooks as $p)
    <div class="col d-flex">
        <div class="card m-3 d-flex flex-column" style="width: 18rem; height: 100%; position: relative;">
            @php
            $discountPercentage = 0; // Khởi tạo giá trị mặc định
            if ($p->category && $p->category->promotional && $p->category->promotional != null) {
            $discountPercentage = $p->category->promotional->discount;
            $discountedPrice = $p->price - ($p->price * ($discountPercentage / 100));
            } else {
            $discountedPrice = $p->price;
            }
            @endphp
            @if($discountPercentage != 0)
            <div class="discount-badge" style="position: absolute; top: 10px; left: 10px; background: red; color: white; padding: 5px; border-radius: 5px;">
                -{{ $discountPercentage }}%
            </div>
            @endif

            <a href="{{ route('detail.book', $p->id) }}" class="d-flex flex-column align-items-center">
                <img src="{{ $p->img }}" class="card-img-top" style="width: 70%" alt="..." onerror="this.src='/asset/img/no_image_placeholder.png'">
            </a>
            <div class="card-body-product d-flex flex-column p-2">
                <a href="{{ route('detail.book', $p->id) }}" class="d-flex flex-column align-items-center">
                    <h5 class="card-title">{{ strlen($p->name) > 15 ? substr($p->name, 0, 15) . '...' : $p->name }}</h5>
                </a>
            </div>

            <div class="price-product" style="text-align: center; top: 20px">
                <div class="row d-flex" style="align-items: center;">
                    <div class="col" style="color: red; font-size: 1.2em; font-weight: bold;">
                        {{ number_format($discountedPrice, 0, ',', '.') }}đ
                    </div>
                    @if($discountPercentage != 0)
                    <div class="col" style="text-decoration: line-through; color: gray; font-size: 0.9em;">
                        {{ number_format($p->price, 0, ',', '.') }}đ
                    </div>
                    @endif
                </div>
            </div>

            @if (Auth::check())
            <form action="{{ route('favoritebook.add') }}" method="POST">
                @csrf
                <input type="hidden" name="book_id" value="{{ $p->id }}">
                <input type="hidden" name="price" value="{{ $p->price }}">
                <button class="btn btn-outline-danger favorite-btn" type="submit" onclick="handleAddToFavorite(event)"><i class="far fa-heart"></i></button>
            </form>
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="book_id" value="{{ $p->id }}">
                <input type="hidden" name="price" value="{{ $discountedPrice }}">
                <input type="hidden" name="quantity" value="1">
                <div class="mt-4 w-4">
                    <button type="submit" class="btn btn-primary custom-btn" onclick="handleAddToCartAdd(event)"> Thêm vào giỏ</button>
                </div>
            </form>
            @else
            <div class="mt-4 w-4">
                <button type="submit" onclick="handleAddToLogin(event)" class="btn btn-primary custom-btn">Thêm vào giỏ</button>
            </div>
            <div class="mt-4 w-4">
                <button class="btn btn-outline-danger favorite-btn" type="submit" onclick="handleAddToLogin(event)"><i class="far fa-heart"></i></button>
            </div>
            @endif

        </div>
    </div>
    @endforeach
</div>

<div class="button-show d-flex m-5" style="justify-content: center">
    <a class="btn btn-outline-success" href="{{ route('list-products') }}" style="border-radius: 20px; width: 200px;">Xem thêm</a>
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