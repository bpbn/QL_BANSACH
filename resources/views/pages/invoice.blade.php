@extends('layouts.app')

@section('title', 'Trang chủ')
@php
use App\Models\Book;
use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;
@endphp
@section('navbar')
@parent

<form method="POST" action="{{ route('invoice.store') }}">
    @csrf
    <div class="container invoice mt-5">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3" style="margin-top: 20px;">Địa chỉ thanh toán</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <?php
                            $user = Auth::user();

                            // Lấy tên người dùng
                            $name = $user->name;
                            
                            // Tách tên thành first name và last name
                            $name_parts = explode(' ', $name);
                            $first_name = $name_parts[0];
                            $last_name = end($name_parts);
                            
                        ?>

                        <div class="col-md-6 mb-3">
                            <label for="firstName">Họ</label>
                            <input type="text" name="firstName" class="form-control" id="firstName"
                                placeholder="Họ" value="<?php echo $first_name; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Tên</label>
                            <input type="text" name="user_lastName" class="form-control" id="lastName"
                                placeholder="Tên" value="<?php echo $last_name; ?>" required>
                            </div>
                        </div>


                    </div>
                    <div class="mb-3">
                        <label for="username">Tên tài khoản(*)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" name="name" class="form-control" id="username"
                                placeholder="Tên tài khoản!" value="{{ Auth::user()->name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email(*) <span class="text-muted"></span></label>
                        <input type="email" name="user_email" class="form-control" id="email"
                            placeholder="Vui lòng nhập email!" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Địa chỉ nhà(*)</label>
                        <input type="text" name="ShippingAddress" class="form-control" id="address"
                            placeholder="Vui lòng nhập địa chỉ!" value="{{ Auth::user()->address }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Số điện thoại(*) <span class="text-muted"></span></label>
                        <input type="text" name="ShippingPhone" class="form-control" id="phone" placeholder="---" value="{{ Auth::user()->phone }}">
                    </div>

                    Thông Tin Chi Tiết
                    <br>
                    <table id="cart" class="table table-hover table-condensed">

                        <thead>
                            <tr>
                                <th style="width:45%">Tên sản phẩm</th>
                                <th style="width:12%">Giá</th>
                                <th style="width:12%">Số lượng</th>
                                <th style="width:22%" class="text-center">Thành tiền</th>
                                <th style="width:14%"> </th>
                            </tr>


                        </thead>
                        <?php
                        $userId = auth()->user()->id;
                        $book = Book::orderBy('name', 'ASC')->get();
                        $cartItems = Cart::where('user_id', $userId)->get();
                        ?>
                        <tbody>
                            @php
                            $total = 0; // Khởi tạo biến tổng tiền
                            @endphp
                            @foreach ($cartItems as $ca)
                            @foreach ($book as $p)
                            @if ($ca->book_id == $p->id)
                            <tr data-id="{{ $ca->book_id }}">
                                <td data-th="Product">
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <h5 class="nomargin" style="margin-left: 20px;">{{ $p->name }}
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">{{ number_format($ca->price, 0, ',', '.') }} VND</td>
                                <td data-th="Quantity">
                                    <h5 class="nomargin" style="margin-left: 20px;">{{ $ca->quantity }}</h5>


                                </td>
                                <td data-th="Subtotal" class="text-center">
                                    <h5 class="nomargin" style="margin-left: 20px;">{{
                                        number_format($ca->price * $ca->quantity, 0, ',', '.') }}</h5>

                                </td>

                                @php
                                $total += $ca->price * $ca->quantity; // Cộng giá trị thành tiền vào tổng tiền
                                @endphp
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>

                    <a class="mb-3">Tổng tiền: {{ number_format($total, 0, ',', '.') }}VNĐ</a>

                    <hr class="mb-4">
                    <h4 class="mb-3">Thanh toán</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="invoiceMethod" type="radio"
                                class="custom-control-input" checked required>
                            <label class="custom-control-label" for="credit">Thanh toán khi nhận
                                hàng</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="invoiceMethod" type="radio" class="custom-control-input"
                                required>
                            <label class="custom-control-label" for="debit">Thanh toán qua ngân hàng</label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button onclick="handleAddToInvoice(event)"
                        class="btn btn-primary btn-lg btn-block mb-2" type="submit">Tiếp tục thanh
                        toán</button>
                    {{-- <input type="hidden" name="addressSelect" id="addressSelect"> --}}
                </form>
            </div>
        </div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('defaultAddress').addEventListener('change', toggleAddressInput);
        document.getElementById('otherAddress').addEventListener('change', toggleAddressInput);
    });

    function toggleAddressInput() {
        const addressInput = document.getElementById('addressInput');
        if (document.getElementById('otherAddress').checked) {
            addressInput.style.display = 'block';
        } else {
            addressInput.style.display = 'none';
        }
    }

    function handleAddToInvoice(event) {
        event.preventDefault();
        // Kiểm tra thông tin
        let firstName = document.getElementById('firstName').value;
        let lastName = document.getElementById('lastName').value;
        let username = document.getElementById('username').value;
        let email = document.getElementById('email').value;
        let address = document.getElementById('address').value;
        // let otherAddressChecked = document.getElementById('otherAddress').checked;

        if (firstName === '' || lastName === '' || username === '' || email === '' || address === '') {
            // Nếu thông tin chưa đầy đủ, hiển thị thông báo lỗi
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'Vui lòng nhập đầy đủ thông tin !',
                showConfirmButton: false,
                timer: 2000
            });
        } else {
            // Nếu thông tin đã đầy đủ, tiếp tục thanh toán và hiển thị thông báo thành công
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Đặt hàng thành công',
                showConfirmButton: false,
                timer: 5000
            });
            event.target.closest('form').submit(); // Gửi biểu mẫu
        }
    }
</script>
@endsection