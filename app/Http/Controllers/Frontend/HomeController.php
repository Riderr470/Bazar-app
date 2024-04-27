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
}
