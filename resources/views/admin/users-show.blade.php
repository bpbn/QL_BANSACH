@extends('layouts.app001')

@section('title', 'Admin account')

@section('header')
    @parent
@endsection


@section('content')
    <dl>
        <dt>Tên người dùng:</dt>
        <dd>{{ $p->name }}</dd>

        <dt>Email:</dt>
        <dd>{{ $p->email }}</dd>

        <dt>Địa chỉ:</dt>
        <dd>{{ $p->address }}</dd>

        <dt>Số điện thoại:</dt>
        <dd>{{ $p->phone }}</dd>

        <dt>Vai trò:</dt>
        <dd>{{ $p->role ? 'Admin' : 'Khách hàng' }}</dd>

        <dt>Ngày tạo tài khoản:</dt>
        <dd>{{ $p->created_at }}</dd>
    </dl>
    <a href="{{ route('users.index') }}">
        < Quay lại trang danh sách</a>


        @endsection
