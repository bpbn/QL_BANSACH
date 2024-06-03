<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Support\Facades\Storage;


class BookadminController extends Controller
{

    protected function fixImage(Book $p)
    {
        //tự dowdload hình ảnh bất kỳ vào và để vào thư mục public/img
        if ($p->img && Storage::disk('public')->exists($p->img)) {
            $p->img = Storage::url($p->img);
        }
        // else {
        //     $p->img = '/img/sgktoan.jpg';
        // }
    }
    public function index(Book $p)
    {
        $lst = Book::paginate(10); // Lấy 10 sản phẩm mỗi trang


        foreach ($lst as $p) {
            $this->fixImage($p);
        }
        return view('admin.books-index', ['lst' => $lst]);
    }
    public function create()
    {
        $lst1=Author::all();
        $lst =Category::all();
        return view('admin.books-create',['lst'=>$lst],['lst1'=>$lst1]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {


        //
        $p=Book::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'publish_date'=>$request->publish_date,
            'price'=>$request->price,
            'quality'=>$request->quality,
            'author_id'=>$request->author,
            'category_id'=>$request->category,
            //hình ảnh cập nhật sau khi có id sản phẩm
            'img'=>''
        ]);
        //đường dẫn lưu hình  có id sản phẩm để dễ quản lý
        $path = $request->img->store('uploads/book/'.$p->id,'public');
        $p->img=$path;
        $p->save();

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {

        $this->fixImage($book);
        return view('admin.books-show', ['p' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
        $this->fixImage($book);
        $lst1 = Author::all();
        $lst = Category::all();
        return view('admin.books-edits', ['p' => $book,'lst1' => $lst1, 'lst'=>$lst]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
        $path = $book->img;
        if ($request->hasFile('img') && $request->img->isValid()) {
            $path = $request->img->store('upload/book/' . $book->id, 'public');
        }
        $book->fill([
            'name' => $request->name,
            'description' => $request->description,
            'publish_date' => $request->publish_date,
            'price' => $request->price,
            'quality' => $request->quality,
            'author_id' => $request->author,
            'category_id' => $request->category,
            'img' => $path
        ]);

        $book->save();
        return redirect()->route('books.index', ['book' => $book]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return redirect()->route('books.index');
    }
    //
}