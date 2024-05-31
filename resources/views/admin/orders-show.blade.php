@extends('layouts.app001')

@section('title', 'Admin account')

@section('header')
    @parent
@endsection


@section('content')
    <dl>
        <dt>Mã hóa đơn</dt>
        <dd>{{ $p->invoice_id}}</dd>

        <dt>Đơn giá:</dt>
        <dd>{{ $p->unitprice }}</dd>

        <dt>Phương thức thanh toán:</dt>
        <dd>{{ $p->PaymentMethods }}</dd>

        <dt>Số lượng:</dt>
        <dd>{{ $p->quantity }}</dd>

        <dt>Ngày tạo</dt>
        <dd>{{ $p->created_at }}</dd>



        
    </dl>
    <a href="{{ route('invoices.index') }}">
        < Quay lại trang danh sách</a>
        @endsection