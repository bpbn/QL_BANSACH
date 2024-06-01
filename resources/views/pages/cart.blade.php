@extends('layouts.app')

@section('title', 'Trang chủ')

@section('navbar')
@parent
<div class="container" style="margin-top: 65px">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:45%">Tên sản phẩm</th>
                <th style="width:12%">Giá</th>
                <th style="width:7%">Số lượng</th>
                <th style="width:22%" class="text-center">Thành tiền</th>
                <th style="width:14%"> </th>
            </tr>
        </thead>
        <tbody>
            @php
            $total = 0; // Khởi tạo biến tổng tiền
            @endphp

            @foreach ($cartItems as $ca)

            @foreach ($book as $p)

            @if ($ca->book_id == $p->id)

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

            <tr data-id="{{ $ca->book_id }}">
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs">
                            <img src="{{ $p->img }}" alt="Sản phẩm 1" class="img-responsive" width="100" onerror="this.src='asset/img/no_image_placeholder.png';">
                        </div>
                        <div class="col-sm-10">
                            <h5 class="nomargin" style="margin-left: 20px;">{{ $p->name }}</h5>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{ number_format($discountedPrice, 0, ',', '.') }} VND</td>
                <td data-th="Quantity">
                    <input class="form-control text-center update-quantity" name="quantity" value="{{ $ca->quantity }}" type="number" min="0" style="width: 60px;" data-id="{{ $ca->book_id }}" data-price="{{ $ca->price }}">
                </td>
                <td data-th="Subtotal" class="text-center">
                    <span class="subtotal">{{ number_format($discountedPrice * $ca->quantity, 0, ',', '.') }} VND</span>
                </td>
                <td class="actions" data-th="">
                    <div style="display: flex; gap: 5px;">
                        <a href="{{ route('detail.book', ['book' => $p]) }}">
                            <button class="btn btn-warning btn-sm">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </a>
                        <button class="btn btn-danger btn-sm delete-item">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </div>
                </td>
                @php
                $total += $discountedPrice * $ca->quantity; // Cộng giá trị thành tiền vào tổng tiền
                @endphp
            </tr>
            @endif
            @endforeach
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <a href="{{ route('index') }}" class="btn btn-success">
                        <i class="fa fa-angle-left"></i> Tiếp tục mua hàng
                    </a>
                </td>
                <td colspan="2" class="hidden-xs"> </td>
                <td class="hidden-xs text-center">
                    <strong>Tổng tiền <span id="total">{{ number_format($total, 0, ',', '.') }} VND</span></strong>
                </td>
                <td>
                    <a href="{{ route('index.invoice') }}" class="btn btn-success btn-block">
                        Thanh toán <i class="fa fa-angle-right"></i>
                    </a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInputs = document.querySelectorAll('.update-quantity');
        const deleteButtons = document.querySelectorAll('.delete-item');

        quantityInputs.forEach(input => {
            input.addEventListener('change', function() {
                const id = this.dataset.id;
                const quantity = this.value;
                const price = this.dataset.price;
                const row = this.closest('tr');
                const subtotalElement = row.querySelector('.subtotal');

                fetch(`{{ route('cart.update.ajax', '') }}/${id}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            quantity: quantity
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Cập nhật thành tiền
                            const subtotal = quantity * price;
                            subtotalElement.textContent = new Intl.NumberFormat('vi-VN').format(subtotal) + ' VND';

                            // Cập nhật tổng tiền
                            document.getElementById('total').textContent = new Intl.NumberFormat('vi-VN').format(data.total) + ' VND';
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const id = row.dataset.id;

                fetch(`{{ route('cart.destroy.ajax', '') }}/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Xóa hàng khỏi bảng
                            row.remove();

                            // Cập nhật tổng tiền
                            document.getElementById('total').textContent = new Intl.NumberFormat('vi-VN').format(data.total) + ' VND';
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
@endsection