@extends('layouts.app001')

@section('title', 'Admin account')

@section('header')
    @parent
@endsection


@section('content')

    <h1 style="color: black;">Thêm sách mới</h1>
    <form method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="margin-top: 2rem">
            <label>Tên sách:</label><br>
            <input name="name" />
        </div>
        <div class="form-group" style="margin-top: 1ch">
            <label>Mô tả:</label><br>
            <textarea name="description"></textarea>
        </div>
        <div class="form-group" style="margin-top: 1ch">
            <label>Chọn ngày xuất bản:</label><br>
            <input type="date" name="publish_date">
        </div>
         <div class="form-group" style="margin-top: 1ch">
            <label>Giá bán:</label><br>
            <input name="price" />
        </div>
        <div class="form-group" style="margin-top: 1ch">
            <label>Số lượng:</label><br>
            <input name="quality" />
        </div>
        <div class="form-group" style="margin-top: 1ch">
            <label>Tác giả:</label><br>
            <select name="author">
                <option value=''>--Chọn tác giả--</option>
                    @foreach ($lst1 as $cat1 )
                        <option value="{{ $cat1->id }}">{{ $cat1->name }}</option>
                    @endforeach
            </select><br>
        </div>
        <div class="form-group" style="margin-top: 1ch">
            <label>Thể loại:</label><br>
            <select name="category">
                <option value=''>--Chọn thể loại-</option>
                    @foreach ($lst as $cat )
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
            </select><br>
        </div>

        <div class="form-group" style="margin-top: 1ch">
            <label>Hình ảnh:</label><br>
            <input type="file" accept="img/*" name="img" /><br>
        </div>


        <button style="margin-top: 1ch" class="btn btn-success">Thêm</button>

    </form>


@endsection
