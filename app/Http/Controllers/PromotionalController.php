<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Promotional;
use Illuminate\Http\Request;

class PromotionalController extends Controller
{
    public function index()
    {
        $promotional = Promotional::with('category')->get();
        return view('promotional.index', compact('promotional'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('promotional.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'discount_id' => 'required|exists:categories,id',
        ]);

        Promotional::create($request->all());

        return redirect()->route('promotional.index')->with('success', 'Promotional created successfully.');
    }

    public function show($id)
    {
        $promotional = Promotional::with('category')->findOrFail($id);
        return view('promotional.show', compact('promotional'));
    }

    public function edit($id)
    {
        $promotional = Promotional::findOrFail($id);
        $categories = Category::all();
        return view('promotional.edit', compact('promotional', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'discount_id' => 'required|exists:categories,id',
        ]);

        $promotional = Promotional::findOrFail($id);
        $promotional->update($request->all());

        return redirect()->route('promotional.index')->with('success', 'Promotional updated successfully.');
    }

    public function destroy($id)
    {
        $promotional = Promotional::findOrFail($id);
        $promotional->delete();

        return redirect()->route('promotional.index')->with('success', 'Promotional deleted successfully.');
    }
}
