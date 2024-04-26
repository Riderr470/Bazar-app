<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class WishlistController extends Controller
{
    public function listAll()
    {
        return view('backend.pages.wishlist.list');
    }
}
