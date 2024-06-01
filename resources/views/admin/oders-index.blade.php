@extends('layouts.app001')

@section('title', 'Admin account')

@section('header')
    @parent
@endsection

@section('content')

    <h1 style="text-align: center; color:black;"> Danh sách hóa đơn</h1>
    <table style="margin-top: 1ch;" class="table table-light">
        <thead class="table-danger">
            <tr>
                <th>STT</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ giao hàng</th>
                <th>Số điện thoại</th>
                <th>Thời gian đặt hàng</th>
                <th>Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lst as $p)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $p->name }}</td> <!-- Đảm bảo thuộc tính này tồn tại trong dữ liệu của bạn -->
                    <td>{{ $p->ShippingAddress }}</td>
                    <td>{{ $p->ShippingPhone }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td>{{ $p->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
