<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome()
    {
        $products = Product::all();

        $banners = Banner::all();

        return view('frontend.pages.home', compact('products', 'banners'));
    }
}
