<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("admin.products.index", compact("products"));
    }

    public function edit(int $id)
    {
        $product = Product::find($id);
        return view("admin.products.edit", compact("product"));
    }

    public function update(Request $request, int $id)
    {
        $product = Product::find($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'badge' => 'required|string|max:255',
            'old_price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {

            if ($product->image && !str_starts_with($product->image, 'http')) {
                Storage::disk('public')->delete($product->image);
            }

            $validated['image'] = $request->file('image')->store('products', 'public');
        }
        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Uy muvaffaqiyatli yangilandi!');

    }

    public function destroy(int $id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && !str_starts_with($product->image, 'http')) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Uy muvaffaqiyatli o‘chirildi!');
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
    

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'badge' => 'required|string|max:255',
            'old_price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['image'] = $request
            ->file('image')
            ->store('products', 'public');

        Product::create($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Uy muvaffaqiyatli qo‘shildi!');
    }


}
