@extends('layouts.app')


@section('title', 'Trang chủ')

@section('navbar')
@parent
<div class="container" style="margin-top: 50px">
    <div class="row row-cols-1 row-cols-md-5 g-4 mb-4" id="favorite">
        @foreach ($favoritebookItems as $fa)

        @foreach ($book as $p)

        @if ($fa->book_id == $p->id)

        @php
        $discountPercentage = 0;
        if($p->category && $p->category->promotional && $p->category->promotional != null){
        $discountPercentage = $p->category->promotional->discount;
        $discountedPrice = $p->price - ($p->price * ($discountPercentage / 100));
        }
        else
        {
        $discountedPrice = $p->price;
        }
        @endphp
        <div class="col d-flex">
            <div class="card m-3 d-flex flex-column" style="width: 18rem; height: 100%; position: relative;">
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

                <form action="{{ route('favoritebook.destroy', ['id' => $p->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <!-- Có thể thay đổi giá trị mặc định cho số lượng -->
                    <button class="btn btn-outline-danger favorite-btn" type="submit"><i class="fa fa-trash-o"></i></button>

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
            </div>
        </div>
        @endif
        @endforeach
        @endforeach
    </div>
    <a href="{{ route('index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
</div>
@endsection