<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Your code for listing reviews
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($prod)
    {
        $comment = request()->all('Comment');
        $comment['book_id'] = $prod;
        $comment['user_id'] = auth()->id();

        if (Review::create($comment)) {
            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
 
    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        // Your code for displaying a specific review
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        // Your code for editing a review
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Comment' => 'required|string',
        ]);

        $newContent = $request->input('Comment');
        $comment = Review::findOrFail($id);
        $comment->Comment = $newContent;
        $comment->save();

        return redirect()->back()->with('success', 'Sửa comment thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment = Review::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('success', 'Xóa comment thành công');
    }

    /**
     * Display an invoice with QR code.
     */
}