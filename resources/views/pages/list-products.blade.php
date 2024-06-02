@extends('layouts.app')

@section('title', 'Tất cả sản phẩm')

@section('navbar')
@parent
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-2 d-flex" style="align-items: center; flex-direction: column;">
            <div class="p-2" style="border: 1px solid gray; border-radius: 10px">
                <div style="background-color: #efe5f9; border-radius: 10px" class="px-5 py-2">
                    <h5>Thể loại</h5>
                </div>
                <ul class="list-group list-group-flush d-flex" style="align-items: center;">
                    @foreach($cats as $item)
                    <li class="list-group-item">
                        <a href="{{route('detail.category', $item->slug) }}" class=""><button class="btn">{{$item->name}}</button></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-10">
            <div class="d-flex justify-content-end">
                {{ $books->links('vendor.pagination.bootstrap-4') }}
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">
                @foreach ($books as $p)
                <div class="col d-flex">
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

                        @if (Auth::check())
                        <form action="{{ route('favoritebook.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $p->id }}">
                            <input type="hidden" name="price" value="{{ $p->price }}">

                            <!-- Có thể thay đổi giá trị mặc định cho số lượng -->
                            <button class="btn btn-outline-danger favorite-btn" type="submit" onclick="alert('Đã thêm thành công')"><i class="far fa-heart "></i></button>

                        </form>
                        {{-- Người dùng đã đăng nhập --}}
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $p->id }}">
                            <input type="hidden" name="price" value="{{ $discountedPrice }}">
                            <input type="hidden" name="quantity" value="1">

                            <div class="mt-4 w-4">
                                <button type="submit" class="btn btn-primary custom-btn" onclick="alert('Đã thêm thành công!')"> Thêm vào giỏ</button>
                            </div>
                        </form>
                        @else
                        <div class="mt-4 w-4">
                            <button type="submit" onclick="alert('Vui lòng đăng nhập vào tài khoản!')" class="btn btn-primary custom-btn">Thêm vào giỏ</button>
                        </div>
                        <div class="mt-4 w-4">
                            <button class="btn btn-outline-danger favorite-btn" type="submit" onclick="alert('Vui lòng đăng nhập vào tài khoản!')"><i class="far fa-heart "></i></button>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $books->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection