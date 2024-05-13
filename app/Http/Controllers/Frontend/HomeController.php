<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function viewHome()
    {
        $products = Product::with('category')->get();

        $banner = Banner::all();

        return view('frontend.pages.mainHome', compact('products', 'banner'));
    }


    public function cartView()
    {
        // dd("cart");
        $cart = session()->get('cart');
        return view('frontend.pages.cart', compact('cart'));
    }

    public function addToCart($id)
    {
        // dd("cart add");

        $cart = session()->get('cart');
        // dd($cart);

        $products = Product::find($id);

        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;
        } else {

            $cart[$id] = [

                "name" => $products->productName,
                "quantity" => 1,
                "price" => $products->price,
                "image" => $products->image,

            ];
        }

        session()->put('cart', $cart);
        notify()->success('Product added to the cart');

        return redirect()->route('home');
    }

    public function cartRemoveItem($id)
    {

        $cart = session()->get('cart');

        unset($cart[$id]);

        session()->put('cart', $cart);

        return redirect()->route('home');
    }

    public function cartClear()
    {
        session()->forget('cart');
        return redirect()->back();
    }
}
