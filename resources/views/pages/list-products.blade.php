@extends('layouts.app')

@section('title', 'Tất cả sản phẩm')

@section('navbar')
@parent
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-2 d-flex" style="align-items: center; flex-direction: column">
            <h5>Thể loại</h5>
            <ul class="list-group list-group-flush d-flex" style="align-items: center;">
                @foreach($cats as $item)
                <li class="list-group-item">
                    <a href="{{$item->slug }}"><button class="btn">{{$item->name}}</button></a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-10">
            <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">
                @foreach ($books as $p)
                <div class="col d-flex">
                    <div class="card m-3 d-flex flex-column" style="width: 18rem; height: 100%; position: relative;">
                        <!-- Discount div -->
                        <div class="discount-badge" style="position: absolute; top: 10px; left: 10px; background: red; color: white; padding: 5px; border-radius: 5px;">
                            @php
                            // Lấy phần trăm giảm giá tương ứng với thể loại của sách
                            $discountPercentage = 0; // Khởi tạo giá trị mặc định
                            if ($p->category->promotional->isNotEmpty()) {
                            // Lặp qua danh sách Promotional của Category và lấy giá trị discount
                            foreach ($p->category->promotional as $promotional) {
                            $discountPercentage = $promotional->discount;
                            break; // Dừng sau khi lấy giá trị discount đầu tiên
                            }
                            }
                            @endphp
                            -{{ $discountPercentage }}%
                        </div>



                        <a href="{{ route('detail.book', $p->id) }}" class="d-flex flex-column align-items-center" style="flex-grow: 1;">
                            <img src="{{ $p->img }}" class="card-img-top" style="width: 70%;" alt="..." onerror="this.src='/asset/img/no_image_placeholder.png'">
                        </a>
                        <div class="card-body d-flex flex-column" style="flex-grow: 1;">
                            <a href="{{ route('detail.book', $p->id) }}" class="d-flex flex-column align-items-center" style="flex-grow: 1;">
                                <h5 class="card-title">{{ $p->name }}</h5>
                            </a>
                        </div>

                        @if (Auth::check())
                        <form action="{{ route('favoritebook.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $p->id }}">
                            <input type="hidden" name="price" value="{{ $p->price }}">

                            <!-- Có thể thay đổi giá trị mặc định cho số lượng -->
                            <button class="btn btn-outline-success favorite-btn" type="submit" onclick="alert('Đã thêm thành công')"><i class="far fa-heart "></i></button>

                        </form>
                        {{-- Người dùng đã đăng nhập --}}
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $p->id }}">
                            <input type="hidden" name="price" value="{{ $p->price }}">
                            <input type="hidden" name="quantity" value="1">

                            <div class="mt-4 w-4">
                                <button type="submit" class="btn btn-primary custom-btn" onclick="alert('Đã thêm thành công!')"> Thêm vào giỏ</button>
                            </div>
                        </form>
                        @else
                        <div class="mt-4 w-4">
                            <button type="submit" onclick="alert('Vui lòng đăng nhập vào tài khoản')" class="btn btn-primary custom-btn">Thêm vào giỏ</button>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection