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
                <th>Địa chỉ giao hàng</th>
                <th>Số điện thoại</th>
                <th>Thời gian đặt hàng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($lst as $p)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $p->ShippingAddress }}</td>
                    <td>{{ $p->ShippingPhone }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td>{{ $p->Total }}</td>
                    <td>
                        <form method="post" action="{{ route('invoices.update', ['invoice' => $p]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <select name="status">
                                <option value="{{ $p->status }}">{{ $p->status }}</option>
                                <option value="Chờ xác nhân">Chờ xác nhân</option>
                                <option value="Đã xác nhận">Đã xác nhận</option>
                                <option value="Đang giao hàng">Đang giao hàng</option>
                                <option value="Đã hoàn thành">Đã hoàn thành</option>
                            </select>
                            <button style="margin-top: 1ch" class="btn btn-success">Cập nhật trạng thái</button>
                        </form>
                    </td>
                    {{-- <td>
                        <a href="{{ route('invoicesdetail.show', ['invoiceDetail' => $p]) }}" class="btn btn-dark">
                            Chi tiết
                        </a>
                    </td> --}}

                </tr>
            @endforeach
        </tbody>
    </table>





@endsection