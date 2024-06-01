@extends('layouts.app')

@section('title', 'Chi tiết')

@section('navbar')
@parent
<section class="py-5 ">
    <div class="container">
        <div class="row gx-5">
            <aside class="col-lg-6 mt-4">
                <div class="border rounded-4 mb-3 d-flex justify-content-center" style="position: relative;">
                    <img src="{{ $book->img }}" onerror="this.src='/asset/img/no_image_placeholder.png';" class="d-block " style="width: auto; height: 427px;" alt="...">
                </div>
                <!-- thumbs-wrap.// -->
                <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-lg-6 mt-4">
                <div class="ps-lg-3">
                    <h4 class="title text-dark">
                        {{ $book->name }} <br />

                    </h4>

                    <div class="mb-3">
                        <span class="h5">{{ $book->price }}</span>
                        <span class="text-muted">/VND</span>
                    </div>

                    <!-- <p>
                            {{ $book->description }}
                        </p> -->
                    <div id="description-container">
                        <p id="description-short">
                            {{ Str::limit($book->description, 100) }}
                        </p>
                        <p id="description-full" style="display: none;">
                            {{ $book->description }}
                        </p>
                        <button id="toggle-description" class="btn btn-link">Hiện thêm</button>
                    </div>

                    <hr />

                    <div class="row mb-4">
                        <div class="col-md-4 col-6">
                            <label class="mb-2">Loại</label>
                            <select class="form-select border border-secondary" style="height: 35px;">
                                @foreach ($cats as $c)
                                @if ($c->id == $book->category_id)
                                <option>{{ $c->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <!-- col.// -->
                        <div class="col-md-4 col-6 mb-3">
                            <label class="mb-2 d-block">Số lượng</label>
                            <div class="input-group mb-3" style="width: 170px;">
                                {{-- <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
              <i class="fas fa-minus"></i>
            </button> --}}
                                <input type="text" class="form-control text-center border border-secondary" placeholder="{{ $book->quality }}" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                {{-- <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
              <i class="fas fa-plus"></i>
            </button> --}}
                            </div>
                        </div>
                    </div>
                    <div class="button-container">

                        @if (Auth::check())
                        <form action="{{ route('favoritebook.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <input type="hidden" name="price" value="{{ $book->price }}">

                            <!-- Có thể thay đổi giá trị mặc định cho số lượng -->
                            <button class="btn btn-outline-success favorite-btn-dt" type="submit" onclick="alert('Đã thêm thành công')"><i class="far fa-heart "></i></button>

                        </form>
                        {{-- Người dùng đã đăng nhập --}}
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <input type="hidden" name="price" value="{{ $book->price }}">
                            <input type="hidden" name="quantity" value="1">
                            <!-- Có thể thay đổi giá trị mặc định cho số lượng -->
                            <button type="submit" style="margin-left: 10px;" class="btn shadow-0 btn-primary bi bi-cart-check" onclick="alert('Đã thêm thành công')"> Thêm vào giỏ</button>
                        </form>
                        @else
                        {{-- Người dùng chưa đăng nhập --}}
                        @endif
                    </div>

                </div>
            </main>
        </div>
    </div>
</section>
<!-- content -->

<section class="bg-light border-top py-5">
    <div class="container-fluid">
        <div class="px-0 border rounded-2 shadow-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="row row-cols-4">
                        @foreach ($lst as $p)
                        @if ($p->id != $book->id)
                        <div class="col">
                            <div class="d-flex mb-3">
                                <a href="{{ route('detail.book', ['book' => $p]) }}" class="me-3">
                                    <img src="{{ $p->img }} " onerror="this.src='asset/img/no_image_placeholder.png';" style="width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                </a>
                                <div class="info">
                                    <a href="#" class="nav-link mb-1">
                                        {{ $p->name }}<br />
                                        @foreach ($aut as $a)
                                        @if ($a->id == $p->author_id)
                                        {{ $a->name }}
                                        @endif
                                        @endforeach
                                    </a>
                                    <strong class="text-dark"> {{ $p->price }}</strong>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="container bootdey">
    <div class="col-md-12 bootstrap snippets">
        <div class="panel">
            <h4>Bình luận</h4>
            <div class="panel-body">
                @if (Auth::check())
                <form action="{{ route('add.comment', $book->id) }}" method="post">
                    @csrf
                    <input type="text" class="form-control" name="comment" placeholder="What are you thinking?" autofocus>
                    <div class="mar-top clearfix">
                        <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
                    </div>
                </form>
                @else
                <h5>Bạn hãy đăng nhập để bình luận!</h5>
                @endif
            </div>
        </div>
        <div class="panel">
            <div class="panel-body">

                @foreach ($comments as $com)
                <!-- Newsfeed Content -->
                <!--===================================================-->
                <div class="media-block">
                    <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{ asset('asset/img/user.jpg') }}"></a>
                    <div class="media-body">
                        <div class="mar-btm">
                            <a href="#" class="btn-link text-semibold media-heading box-inline">{{ $com->user->name }}</a>
                            <p class="text-muted text-sm">{{ $com->created_at->format('d/m/Y') }}</p>
                            <p>{{$com->Comment}}</p>
                        </div>
                        <p>{{ $com->comment }}</p>
                        @if (Auth::id() == $com->user_id)
                        <div class="pad-ver">
                            <div class="btn-group">
                                <form action="{{ route('comments.update', ['id' => $com->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <label for="toggle-{{ $com->id }}" id="btn-label-{{ $com->id }}"><i class="bi bi-pen-fill"></i>Sửa</label>
                                    <input type="checkbox" id="toggle-{{ $com->id }}" style="display: none;" class="toggle-checkbox" data-bs-toggle="collapse" data-bs-target="#textbox-container-{{ $com->id }}" aria-expanded="false" aria-controls="textbox-container-{{ $com->id }}">
                                    <div id="textbox-container-{{ $com->id }}" class="collapse">
                                        <input type="text" id="textbox-{{ $com->id }}" name="comment" placeholder="Nhập dữ liệu">
                                        <button id="save-btn-{{ $com->id }}" type="submit">Lưu</button>
                                    </div>
                                </form>
                                <form action="{{ route('comments.destroy', ['id' => $com->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa comment này không?')" class="delete-button"><i class="bi bi-trash"></i> Xóa</button>
                                </form>
                            </div>
                        </div>
                        @endif
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toggleButton = document.getElementById('toggle-description');
        var descriptionShort = document.getElementById('description-short');
        var descriptionFull = document.getElementById('description-full');
        var mainTitle = document.querySelector('.title');

        toggleButton.addEventListener('click', function() {
            if (descriptionFull.style.display === 'none') {
                descriptionFull.style.display = 'block';
                descriptionShort.style.display = 'none';
                toggleButton.textContent = 'Ẩn bớt';
            } else {
                descriptionFull.style.display = 'none';
                descriptionShort.style.display = 'block';
                toggleButton.textContent = 'Hiện thêm';
                mainTitle.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>



@endsection