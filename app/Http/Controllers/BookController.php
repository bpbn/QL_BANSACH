<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    protected function fixImage(Book $p)
    {
        if ($p->img && Storage::disk('public')->exists($p->img)) {
            $p->img = Storage::url($p->img);
        }
    }

    public function index()
    {
        $cats = Category::orderBy('name', 'ASC')->get();
        $book = Book::orderBy('created_at', 'DESC')->get();
        if ($key = request()->key) {
            $book = Book::orderBy('created_at', 'DESC')->where('name', 'like', '%' . $key . '%')->get();
        }
        foreach ($book as $p) {
            $this->fixImage($p);
        }
        return view('pages.home', compact('book', 'cats'));
    }

}
