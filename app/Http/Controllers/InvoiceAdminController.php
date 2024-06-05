<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use Illuminate\Http\Request;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class InvoiceadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $lst = Invoice::all();

        return view('admin.oders-index', compact('lst'))->with('i', (request()->input('page', 1) - 1) * 5);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceRequest $request)
    {
        //
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
    public function update(StoreInvoiceRequest $request, Invoice $invoice)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        $invoice->status = $request->input('status');
        $invoice->save();

        return response()->json(['success' => 'Cập nhật trạng thái thành công!']);
    }

    public function thayDoiTrangThaiDonHang(Request $request)
    {
        $orderId = $request->input('order_id');
        $newStatus = $request->input('new_status');

        $invoice = Invoice::find($orderId);

        $invoice->status = $newStatus;
        $kq = $invoice->save();

        if ($kq) {
            return response()->json([
                'message' => 'Trạng thái đơn hàng đã được cập nhật thành công',
                'success' => true
            ]);
        } else {
            return response()->json([
                'error' => 'Thất bại',
                'success' => false
            ], 501);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function showInvoice($id)
    {
        $invoice = Invoice::with('invoiceDetails', 'user')->findOrFail($id);
        $item = $invoice->invoiceDetails->first();

        $data = [
            'quantity' => $item->quantity,
            'invoice_id' => $invoice->id,
            'book_id' => $item->book_id,
        ];

        $qrCode = QrCode::size(200)->generate(json_encode($data));
        return view('invoice.show', compact('invoice', 'qrCode'));
    }
}


