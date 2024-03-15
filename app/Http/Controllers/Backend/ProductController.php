<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function createProduct(){
        return view("backend.pages.products.create");
    }

    public function storeProduct(Request $requst)
    {
        try {
        $requst->validate([
            'productName'=> 'required',
            'price'=> 'required',
            'description'=> 'nullable|max:150',
            'quantity'=> 'required|integer',

        ]);

        
            Product::create([
                'productName' => $requst->productName,
                'price' => $requst->price,
                'description' => $requst->description,
                'quantity' => $requst->quantity,
            ]);
    
            return redirect()->back();
        } catch (Throwable $e) {
            session()->flash($e->getMessage());
     
            return redirect()->back();
        }

        
    }

    public function showProductList(){

        $product = Product::all();
        return view("backend.pages.products.lists", compact('product'));
    }
}
