@extends('layouts.app001')

@section('title', 'Admin book')

@section('header')
    @parent
@endsection


@section('content')

    <h1 style="text-align: center; color:black;"> Danh sách sản phẩm </h1>
    <a href="{{ route('books.create') }}" class="btn btn-info">
        Thêm
    </a>
    <table class="table table-light">
        <thead class="table-danger">
            <tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Giá bán</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lst as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->quality }}</td>
                    <td><img class="card-img-top" style=" width:100px;max-height:100px;object-fit:contain;"
                            src=" {{ $p->img }}"></td>
                    <td style="ma">
                        <a href="{{ route('books.show', ['book' => $p]) }}" class="btn btn-dark">
                            Chi tiết
                        </a>
                        <a href="{{ route('books.edit', ['book' => $p]) }}" class="btn btn-success"
                            onclick="showEditForm(event, {{ $p->id }})">

                            Sửa

                        </a>
                        <form method="post" action="{{ route('books.destroy', ['book' => $p]) }}" class="d-inline"
                            onsubmit="return confirm('Bạn có muốn xóa không')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning">Xóa</button>
                        </form>
                    </td>


    <!-- Form chỉnh sửa -->

    </tr>
    <td id="edit-form-{{ $p->id }}" style="display: none;">
        <h1 style="color: black;">Chỉnh sửa sách</h1>
        <form method="post" action="{{ route('books.update', ['book' => $p]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group" style="margin-top: 2rem">
                <label>Tên sách:</label><br>
                <input name="name" value="{{ old('name', $p->name) }}" />
            </div>
            <div class="form-group" style="margin-top: 1ch">
                <label>Mô tả:</label><br>
                <textarea name="description">{{ old('description', $p->description) }}</textarea>
            </div>
            <div class="form-group" style="margin-top: 1ch">
                <label>Chọn ngày xuất bản:</label><br>
                <input type="date" name="publish_date" value="{{ old('publish_date', $p->publish_date) }}">
            </div>
            <div class="form-group" style="margin-top: 1ch">
                <label>Giá bán:</label><br>
                <input name="price" value="{{ old('name', $p->price) }}" />
            </div>
            <div class="form-group" style="margin-top: 1ch">
                <label>Số lượng:</label><br>
                <input name="quality" value="{{ old('name', $p->quality) }}" />
            </div>
            <div class="form-group" style="margin-top: 1ch">
                <label>Tác giả:</label><br>
                <select name="author">
                    <option value=''>{{ old('name', $p->author->name) }}</option>
                    @if (isset($lst1))
                        @foreach ($lst1 as $cat1)
                            <option value="{{ $cat1->id }}" @if ($cat1->id == old('author', $p->author_id)) selected @endif>
                                {{ $cat1->name }} </option>
                        @endforeach
                    @endif
                </select><br>
            </div>
            <div class="form-group" style="margin-top: 1ch">
                <label>Thể loại:</label><br>
                <select name="category">
                    <option value=''>{{ old('name', $p->category->name) }}</option>

                    @foreach ($lst as $cat)
                        <option value="{{ $cat->id }}" @if ($cat->id == old('category', $p->category_id)) selected @endif>
                            {{ $cat->name }} </option>
                    @endforeach

                </select><br>
            </div>

            <div class="form-group" style="margin-top: 1ch">
                <label>Hình ảnh:</label><br>
                <img style="width:100px;max-height:100px;object-fit:contain;" src="{{ $p->img }}"><br>
                <input type="file" accept="img/*" name="img" /><br>
            </div>



            <button style="margin-top: 1ch" class="btn btn-success">Sữa</button>

        </form>
    </td>
            @endforeach
        </tbody>
    </table>


    <script>
        function showEditForm(event, id) {
            event.preventDefault();

            const editForm = document.getElementById(`edit-form-${id}`);
            editForm.style.display = "table-cell";
        }
    </script>



    {{-- <script>
    function showEditForm(event, id) {
        event.preventDefault();
        const form = document.getElementById(`edit-form-${id}`);
        form.style.display = "table-row";
    }
</script> --}}

@endsection
