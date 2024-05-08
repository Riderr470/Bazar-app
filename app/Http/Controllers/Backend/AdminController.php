<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("backend.pages.dashboard");
    }

    public function orders()
    {
        return view("backend.pages.orders");
    }


    public function createBanner()
    {
        return view("backend.pages.orders");
    }

    public function storeBanner()
    {
        return view("backend.pages.orders");
    }

    public function editBannerForm()
    {
        return view("backend.pages.orders");
    }

    public function updateBanner()
    {
        return view("backend.pages.orders");
    }

    public function adminLogin()
    {
        return view('backend.pages.admin.adminlogin');
    }

    public function doAdminLogin(Request $request)
    {
        $credentials = $request->except('_token');

        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6',
        ]);
        // dd($credentials);
        $checkLogin = auth()->guard('adminGuard')->attempt($credentials);

        if ($checkLogin) {
            // dd("login hoice");
            notify()->success("Login successful");
            return redirect()->route('admin.dashboard');
        }

        // dd("login hoy nai");
        notify()->error('Invalid Username or Password');
        return redirect()->back();
    }
}
