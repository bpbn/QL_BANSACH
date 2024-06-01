<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    protected function fixImage(Book $p)
    {
        if ($p->img && Storage::disk('public')->exists($p->img)){
            $p->img = Storage::url($p->img);
        }
    }

    public function index(){
        $cat = Category::orderBy('name', 'ASC')->get();
        return view('layouts.app', compact('cats'));
    }

    public function book(Book $book)
    {
        $comments = Review::where('book_id', $book->id)->orderBy('created_at', 'asc')->get();
        $cats = Category::orderBy('name', 'ASC')->get();
        $aut = Author::orderBy('name', 'ASC')->get();
        $lst = Book::where('category_id', $book->category_id)->limit(4)->get();
        $this->fixImage($book);
        return view('pages.products-detail', compact('book', 'cats', 'lst', 'aut', 'comments'));
    }

    public function category(String $slug){
        $cats=Category::orderBy('name', 'ASC')->get();
        $cat=Category::where('slug', $slug)->first();
        $book = Book::where('category_id', $cat->id)->paginate(8);
        if($key = request()->key){
            $book = Book::orderBy('created_at', 'DESC')->where('name', 'like', '%' . $key . '%')->paginate(8);
        }
        foreach($book as $p){
            $this->fixImage($p);
        }
        return view('pages.category', compact('cats', 'cat', 'book'));
    }

    public function show(){
        // $books = Book::all();
        $books = Book::paginate(8);
        // $books = Book::with('category.promotional')->paginate(8);
        if($key = request()->key){
            $books = Book::orderBy('created_at', 'DESC')->where('name', 'like', '%' . $key . '%')->paginate(8);
        }
        $cats=Category::orderBy('name', 'ASC')->get();
        return view('pages.list-products', ['books' => $books, 'cats' => $cats]);
    }
}
