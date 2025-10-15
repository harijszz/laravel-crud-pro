<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        $product = Product::create($validated);
        return redirect()->route('products.index');
    }

    public function show(Product $product){
        return view('products.show', compact('product'));
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);
        
        $product->update($validated);
        return redirect()->route('products.show', $product);
    }
}
