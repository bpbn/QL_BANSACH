@extends('layouts.app001')

@section('title', 'Admin account')

@section('header')
@parent
@endsection

@section('content')



<h1 style="text-align: center; color:black;">Danh sách hóa đơn</h1>
<table style="margin-top: 1ch;" class="table table-light">
    <thead class="table-danger">
        <tr>
            <th>STT</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ giao hàng</th>
            <th>Thời gian đặt hàng</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lst as $p)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->ShippingAddress }}</td>
            <td>{{ $p->created_at }}</td>
            <td>{{ $p->total }}</td>
            <td>
                <form>
                    @csrf
                    <select name="status" class="status-select" data-id="{{ $p->id }}">
                        <option value="{{ $p->status }}">{{ $p->status }}</option>
                        <option value="Đang chuẩn bị">Đang chuẩn bị</option>
                        <option value="Đã huỷ">Đã huỷ</option>
                        <option value="Đang giao">Đang giao</option>
                        <option value="Đã hoàn thành">Đã hoàn thành</option>
                    </select>
                </form>
            </td>
            <td>
                <a href="{{ route('books.edit', ['book' => $p]) }}" class="btn btn-success">
                <i class="fa-solid fa-qrcode"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



<script>
    $(document).ready(function() {
        $('.status-select').change(function() {
            var orderId = $(this).data('id'); // Lấy ID đơn hàng
            var newStatus = $(this).val(); // Lấy trạng thái mới được chọn

            $.ajax({
                url: '{{ route("thayDoiTrangThaiDonHang") }}', // URL script PHP để cập nhật trạng thái
                method: 'POST', // Gửi yêu cầu POST
                data: {
                    _token: $('input[name="_token"]').val(),
                    order_id: orderId,
                    new_status: newStatus
                },
                success: function(response) {
                    alert(response.message);
                },
                error: function(respone) {
                    alert(response.error);
                }
            });
        });
    });
</script>

@endsection