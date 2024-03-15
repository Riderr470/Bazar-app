<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("backend.pages.dashboard");
    }

    public function orders(){
        return view("backend.pages.orders");
    }
}
