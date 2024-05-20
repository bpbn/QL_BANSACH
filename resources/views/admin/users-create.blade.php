@extends('layouts.app001')

@section('title', 'Admin account')

@section('header')
    @parent
@endsection


@section('content')
<h1 style="color: black;">Thêm tài khoản mới</h1>
    <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="margin-top: 2rem">
            <label>Họ tên:</label><br>
            <input name="name" />
        </div>
        <div class="form-group" style="margin-top: 1ch">
            <label>Email:</label><br>
            <input name="email" />
        </div>
        <div class="form-group" style="margin-top: 1ch">
            <label>Mật khẩu:</label><br>
            <input type="password" name="password">
        </div>
        <div class="form-group" style="margin-top: 1ch">
            <label>Địa chỉ:</label><br>
            <input name="address">
        </div>
         <div class="form-group" style="margin-top: 1ch">
            <label>Số diện thoai:</label><br>
            <input name="phone" />
        </div>
        <div>
            <label>Vai trò:</label><br>
            <input type="text" name="role" value=1 readonly>
        </div>


        <button style="margin-top: 1ch" class="btn btn-success">Thêm</button>


@endsection
