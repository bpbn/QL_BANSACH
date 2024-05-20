@extends('layouts.app')


@section('title', 'Danh sách')



@section('navbar')
    @parent
    <div class="container row-align">
        <div class="row row-align">
            <div class="col-md-3 mb-2 col-align">
                <h5>Danh mục sản phẩm</h5>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/listbook">Hàng mới về!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Apple</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Samsung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HTC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">OPPO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Xiaomi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Sản phẩm khác</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card-deck mb-2">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        @foreach ($lst as $p)
                            <div class="col">
                                <a href="{{ route('detail.book', $p->id) }}" style="text-decoration: none !important;">
                                <div class="card mt-3 size-card" >
                                    <img src="{{$p->image}}" class="card-img-top size-img" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $p->name }}</h5>
                                    <p class="card-text hide-less">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Mua</a>
                                    </div>
                                </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
