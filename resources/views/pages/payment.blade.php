@extends('layouts.app')


@section('title', 'Trang chủ')

@section('navbar')
    @parent
    <div class="container payment">
        <div class="row ">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Đặt hàng</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Họ</label>
                            <input type="text" class="form-control" id="firstName" placeholder value required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Tên</label>
                            <input type="text" class="form-control" id="lastName" placeholder value required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>
                        <div class="mb-3">
                        <label for="username">Tên tài khoản </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="{{  Auth::user()->name }}" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                        </div>
                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Tùy chọn)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="{{  Auth::user()->email }}">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Địa chỉ nhà</label>
                        <input type="text" class="form-control" id="address" placeholder="{{  Auth::user()->address }}" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address2">Địa chỉ 2 <span class="text-muted">(Tùy chọn)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Không bắt buộc">
                    </div>

                    {{-- <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Địa chỉ giao hàng giống với địa chỉ thanh
                            toán của tôi</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Lưu thông tin này cho lần sau</label>
                    </div> --}}
                    <hr class="mb-4">
                    <h4 class="mb-3">Thanh toán</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                checked required>
                            <label class="custom-control-label" for="credit">Thanh toán khi nhận hàng</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                required>
                            <label class="custom-control-label" for="debit">Thanh toán qua ngân hàng</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Tên trên thẻ</label>
                            <input type="text" class="form-control" id="cc-name" placeholder required>
                            <small class="text-muted">Tên đầy đủ như hiển thị trên thẻ</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Số thẻ tín dụng</label>
                            <input type="text" class="form-control" id="cc-number" placeholder required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                        <hr class="mb-4">

                        <button class="btn btn-primary btn-lg btn-block mb-2" onclick="alert('Đặt hàng thành công')" type="submit">Tiếp tục thanh toán</button>
                </form>
            </div>
        </div>
    </div>
@endsection
