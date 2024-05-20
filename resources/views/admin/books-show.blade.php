@extends('layouts.app001')

@section('title', 'Admin account')

@section('header')
    @parent
@endsection


@section('content')
    <dl>
        <dt>Tên sách:</dt>
        <dd>{{ $p->name }}</dd>

        <dt>Tác giả:</dt>
        <dd>{{ $p->Author->name }}</dd>

        <dt>Thể loại:</dt>
        <dd>{{ $p->Category->name }}</dd>

        <dt>Mô tả:</dt>
        <dd>{{ $p->description }}</dd>

        <dt>Ngày xuất bản:</dt>
        <dd>{{ $p->publish_date }}</dd>

        <dt>Giá bán:</dt>
        <dd>{{ $p->price }}</dd>

        <dt>Số lượng còn lại:</dt>
        <dd>{{ $p->quality }}</dd>

        <dt>Ảnh bìa:</dt>
        <dd><img style="width: 100px;max-height: 100px;object-fit: contain" src="{{ $p->img }}" alt=""></dd>
    </dl>
    <a href="{{ route('books.index') }}">
        < Quay lại trang danh sách</a>
        @endsection
