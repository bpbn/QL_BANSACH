@extends('layouts.app')

@section('title', 'Trang chủ')

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
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Họ</label>
                                <input type="text" name="firstName" class="form-control" id="firstName" placeholder value required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Tên</label>
                                <input type="text" name="user_firstName" class="form-control" id="lastName" placeholder value required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username">Tên tài khoản(*) </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" name="name" class="form-control" id="username" placeholder="Tên tài khoản!" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email(*) <span class="text-muted"></span></label>
                            <input type="email" name="user_email" class="form-control" id="email" placeholder=" Vui lòng nhập email! ">
                            <div class="invalid-feedback">
                                Please enter a valid email address shipping updates.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone">Số điện thoại(*) <span class="text-muted"></span></label>
                            <input type="text" name="ShippingPhone" class="form-control" id="phone" placeholder="---">
                        </div>

                        <div class="mb-3">
                            <label>Địa chỉ(*)</label>
                            <div class="custom-control custom-radio">
                                <input id="defaultAddress" name="addressOption" type="radio" class="custom-control-input" value="default" checked required>
                                <label class="custom-control-label" for="defaultAddress">Địa chỉ mặc định</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="otherAddress" name="addressOption" type="radio" class="custom-control-input" value="other" required>
                                <label class="custom-control-label" for="otherAddress">Địa chỉ khác</label>
                            </div>
                        </div>
                        <div class="mb-3" id="addressInput" style="display: none;">
                            <label for="address">Địa chỉ nhà(*)</label>
                            <input type="text" name="ShippingAddress" class="form-control" id="address" placeholder="Vui lòng nhập địa chỉ!">
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <a class="mb-3">Tổng tiền: {{ number_format($total, 0, ',', '.') }}VNĐ</a>

                        <hr class="mb-4">
                        <h4 class="mb-3">Thanh toán</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="invoiceMethod" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="credit">Thanh toán khi nhận hàng</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="invoiceMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Thanh toán qua ngân hàng</label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button onclick="handleAddToInvoice(event)" class="btn btn-primary btn-lg btn-block mb-2" type="submit">Tiếp tục thanh toán</button>
                        <input type="hidden" name="addressSelect" id="addressSelect">
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
            let otherAddressChecked = document.getElementById('otherAddress').checked;

            if (firstName === '' || lastName === '' || username === '' || email === '' || (otherAddressChecked && address === '')) {
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
