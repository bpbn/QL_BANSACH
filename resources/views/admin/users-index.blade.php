@extends('layouts.app001')

@section('title', 'Admin account')

@section('header')
    @parent
@endsection


@section('content')

    <h1 style="text-align: center; color:black;"> Danh sách tài khoản </h1>
    <a href="{{ route('users.create') }}" class="btn btn-info">
        Thêm tài khoản
    </a>
    <table style="margin-top: 1ch;" class="table table-light">
        <thead class="table-danger">
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Chức vụ</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lst as $p)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->address }}</td>
                    <td>{{ $p->phone }}</td>
                    <td>{{ $p->role ? 'Admin' : 'Khách hàng' }}</td>
                    <td style="ma">
                        <a href="{{ route('users.show', ['user' => $p]) }}" class="btn btn-dark">
                            Chi tiết
                        </a>
                        <a href="{{ route('users.edit',['user' => $p]) }}" class="btn btn-success">
                            Sửa
                        </a>
                        <form method="post" action="{{ route('users.destroy', ['user' => $p]) }}" class="d-inline"
                            onsubmit="return confirm('Bạn có muốn xóa không')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning">Xóa</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chỉnh sửa thông tin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



@endsection
