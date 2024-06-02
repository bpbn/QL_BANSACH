<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Data;
use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Cart;
use App\Models\InvoiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{


    public function index()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $total = 0;
        $cats=Category::orderBy('name', 'ASC')->get();

        foreach($carts as $cart)
        {
            $total += $cart->quantity * $cart->price;

        }
        return view('pages.invoice', ['total' => $total, 'cats' => $cats]);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([

            'name' => 'required|string',
            // 'addressSelect' => 'required|string',
            'ShippingAddress' => 'required|string',
            'ShippingPhone' => 'required|string',
            // Add more validation rules as needed
        ]);
        // $arr = [
        //     $request->provinceSelect, $request->districtSelect, $request->wardSelect
        // ];
        $name = $request->input('name');
        $ShippingPhone = $request->input('ShippingPhone');
        $ShippingAddress = $request->input('ShippingAddress');
        $userId = auth()->user()->id; // Lấy ID của người dùng đã đăng nhập

        $invoice = new Invoice();
        $invoice->user_id = $userId;
        $invoice->name = $name;
        $invoice->ShippingAddress = $ShippingAddress;
        $invoice->ShippingPhone = $ShippingPhone;
        // Tính tổng giỏ hàng
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart->quantity * $cart->price;

        }
        // Set Total to 1
        $invoice->total = $total;
        $invoice->save();

        //Thêm chi tiết đơn hàng
        $cartItems = Cart::where('user_id', $userId)->get();
        foreach($cartItems as $item){
            InvoiceDetail::create([
                'quantity' => $item->quantity,
                'invoice_id' => $invoice->id,
                'book_id' => $item->book_id,
            ]);
            $item->delete();
        }

        return redirect()->route('index')->with('success', 'Bạn đã đặt hàng thành công. Đơn hàng sẽ được giao trong 2-5 ngày tới.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
