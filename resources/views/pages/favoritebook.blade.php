@extends('layouts.app')


@section('title', 'Trang chủ')

@section('navbar')
    @parent
    <div class="container" style="margin-top: 65px">
        <table id="favorite" class="table table-hover  table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Tên sản phẩm</th>
                    <th style="width:18%">Giá</th>
                    <th style="width:22%" class="text-center"> </th>
                    <th style="width:10%"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($favoritebookItems as $fa)
                    @foreach ($book as $p)
                        <tr>
                            @if ($fa->book_id == $p->id)
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img src="{{ $p->img }}" alt="Sản phẩm 1"
                                                class="img-responsive" width="100"
                                                onerror="this.src='asset/img/no_image_placeholder.png';">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin" style="margin-left: 20px;">{{ $p->name }}</h4>
                                            {{-- <p>{{ $p->description }}</p> --}}
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">{{ number_format($fa->price, 0, ',', '.') }} VND</td>
                                </td>
                                <td data-th="Subtotal" class="text-center"> </td>
                                <td class="actions" data-th="">
                                    <a href="{{ route('detail.book', ['book' => $p]) }}"><button
                                            class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></a>
                                    <form action="{{ route('favoritebook.destroy', ['id' => $p->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td><a href="{{ route('index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua
                            hàng</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
