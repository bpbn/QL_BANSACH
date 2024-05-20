@extends('layouts.app')


@section('title', 'Trang chủ')

@section('navbar')
    @parent
    <dl style="margin-top: 80px;margin-left: 10px;">
        <dt>Tên người dùng:</dt>
        <dd>{{ $user->name }}</dd>

        <dt>Email:</dt>
        <dd>{{ $user->email }}</dd>

        <dt>Địa chỉ:</dt>
        <dd>{{ $user->address }}</dd>

        <dt>Số điện thoại:</dt>
        <dd>{{ $user->phone }}</dd>

        <dt>Vai trò:</dt>
        <dd>{{ $user->role ? 'Admin' : 'Khách hàng' }}</dd>

        <dt>Ngày tạo tài khoản:</dt>
        <dd>{{ $user->created_at }}</dd>
    </dl>

@endsection
