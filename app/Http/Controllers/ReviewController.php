<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($prod)
    {
        //
        $comment = request()->all('Comment');
        $comment['book_id']=$prod;
        $comment['user_id']= auth()->id();


        if (Review::create($comment)) {
            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'Comment' => 'required|string',
        ]);

        // Lấy dữ liệu mới từ request
        $newContent = $request->input('Comment');

        // Tìm comment cần sửa
        $comment = Review::findOrFail($id);

        // Cập nhật nội dung của comment
        $comment->Comment = $newContent;
        $comment->save();

        // Phản hồi thành công hoặc chuyển hướng đến trang khác
        return redirect()->back()->with('success', 'Sửa comment thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        // Tìm comment cần xóa
        $comment = Review::findOrFail($id);

        // Xóa comment
        $comment->delete();

        // Phản hồi thành công hoặc chuyển hướng đến trang khác
        return redirect()->back()->with('success', 'Xóa comment thành công');
    }
}
