@extends('layouts.app')

@section('title', 'Danh sách')

@section('navbar')
    @parent
    <div class="container row-align">
        <div class="row row-align">
            <div class="col-md-3 mb-2 col-align">
                <h5>Danh mục sản phẩm</h5>
                <ul class="nav nav-pills flex-column">
                    @foreach ($cats as $cat)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $cat->id }}">{{ $cat->name }}</a>
                    </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">Trang chủ</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card-deck mb-2">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        @foreach ($book as $p)
                            <div class="col">

                                <div class="card mt-3 size-card" >
                                    <a href="{{ route('detail.book', $p->id) }}" style="text-decoration: none !important;">
                                    <img src=" {{ $p->img }}" class="card-img-top size-img" alt="..." onerror="this.src='/asset/img/no_image_placeholder.png';">
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
                                                    <button type="submit"
                                                        class="btn btn-primary custom-btn bi bi-cart-check"
                                                        onclick="alert('Đã thêm thành công')"> Thêm vào giỏ</button>
                                                </form>
                                            @else
                                                {{-- Người dùng chưa đăng nhập --}}
                                                <button type="submit" onclick="alert('Vui lòng đăng nhập tài khoản')"
                                                    class="btn btn-primary custom-btn bi bi-cart-check"> Thêm vào
                                                    giỏ</button>
                                            @endif
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
