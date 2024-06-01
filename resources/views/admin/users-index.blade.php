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
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Role</th>
                <th></th>
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
                    <td>
                        <a href="{{ route('users.show', ['user' => $p]) }}" class="btn btn-dark">
                        <i class="fa-solid fa-circle-info"></i>
                        </a>
                        <a href="{{ route('users.edit',['user' => $p]) }}" class="btn btn-success">
                        <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <form method="post" action="{{ route('users.destroy', ['user' => $p]) }}" class="d-inline"
                            onsubmit="return confirm('Bạn có muốn xóa không')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>





@endsection