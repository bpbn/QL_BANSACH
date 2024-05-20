@extends('layouts.app')


@section('title', 'Trang chủ')

@section('navbar')
    @parent
    <div class="container">

        <div class="col-lg-5" style="margin-top: 100px;">
            <div class="order-summary">
                <h3>CHI TIẾT HÓA ĐƠN</h3>

                <table class="table table-mini-cart">
                    <thead>
                        <tr>
                            <th colspan="2">Sản phẩm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-col">
                                <h3 class="product-title">
                                    Circled Ultimate 3D Speaker ×
                                    <span class="product-qty">4</span>
                                </h3>
                            </td>

                            <td class="price-col">
                                <span>$1,040.00</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="product-col">
                                <h3 class="product-title">
                                    Fashion Computer Bag ×
                                    <span class="product-qty">2</span>
                                </h3>
                            </td>

                            <td class="price-col">
                                <span>$418.00</span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>

                        <tr class="order-shipping">
                            <td class="text-left" colspan="2">
                                <h4 class="m-b-sm">Vận Chuyển</h4>

                                <div class="form-group form-group-custom-control">
                                    <div class="custom-control custom-radio d-flex">
                                        <input type="radio" class="custom-control-input" name="radio" checked />
                                        <label class="custom-control-label">Đang Giao</label>
                                    </div>
                                    <!-- End .custom-checkbox -->
                                </div>
                                <!-- End .form-group -->

                            </td>

                        </tr>

                        <tr class="order-total">
                            <td>
                                <h4>Tổng tiền:</h4>
                            </td>
                            <td>
                                <b class="total-price"><span>$1,603.80</span></b>
                            </td>
                        </tr>
                    </tfoot>
                </table>



            </div>
            <!-- End .cart-summary -->
        </div>
        <!-- End .col-lg-4 -->
    </div>
    <!-- End .row -->
    </div>
@endsection
