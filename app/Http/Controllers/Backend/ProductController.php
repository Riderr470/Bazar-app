<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;


class ProductController extends Controller
{
    public function createProduct()
    {
        return view("backend.pages.products.create");
    }

    public function storeProduct(Request $request)
    {

        $request->validate([
            'productName' => 'required',
            'price' => 'required',
            'description' => 'nullable|max:150',
            'quantity' => 'required|integer',
            'image' => 'max:20240',

        ]);

        $img = $request->file('image');

        $file_name = uniqid('image_', true) . Str::random(10) . '.' . $img->getClientOriginalExtension();


        if ($img->isValid()) {
            $img->storeAs('products', $file_name);
        }

        Product::create([
            'productName' => $request->productName,
            'price' => $request->price,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'image' => $file_name,
        ]);

        return redirect()->back();
    }

    public function showProductList()
    {

        $product = Product::all();
        return view("backend.pages.products.lists", compact('product'));
    }


    public function showProductDetails($id)
    {
        $productDetails = Product::find($id);

        return view('frontend.pages.productDetails', compact('productDetails'));
    }
}
