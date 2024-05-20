@extends('layouts.app001')

@section('title', 'Admin account')

@section('header')
    @parent
@endsection


@section('content')
<h1 style="color: black;">Sửa thông tin tài khoản người dùng</h1>
    <form method="post" action="{{ route('users.update',['user' => $p]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group" style="margin-top: 2rem">
            <label>Họ tên:</label><br>
            <input name="name" value="{{ old('name', $p->name) }}" />
        </div>
        <div class="form-group" style="margin-top: 1ch">
            <label>Địa chỉ:</label><br>
            <input name="address" value="{{ old('address', $p->address) }}">
        </div>
         <div class="form-group" style="margin-top: 1ch">
            <label>Số diện thoai:</label><br>
            <input name="phone" value="{{ old('phone', $p->phone) }}"/>
        </div>

        <button style="margin-top: 1ch" class="btn btn-success">Sửa</button>


@endsection
