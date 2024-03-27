<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;


class UserController extends Controller
{
    public function users()
    {
        return view('master');
    }

    public function createUser()
    {
        return view('backend.pages.users.create');
    }

    public function showUserDetails()
    {
        $user = User::all();

        return view('backend.pages.users.details', compact('user'));
    }

    public function showRegisterPage()
    {
        return view('frontend.pages.registration');
    }

    public function storeUser(Request $request)
    {

        $validate = $request->validate([
            'userName' => 'required',
            'email' => 'bail|required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'dob' => 'nullable',
            'age' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->file) {


            $img = $request->file('image');

            $file_name = uniqid('image_', true) . Str::random(10) . '.' . $img->getClientOriginalExtension();


            if ($img->isValid()) {
                $img->storeAs('users_img', $file_name);
            }
        } else {

            $file_name = 'default.jpg';
        }

        User::create([
            'name' => $request->userName,
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password),
            'image' => $file_name,

        ]);

        return redirect()->back();
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->except(['_token']);

        $validate = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6',
        ]);


        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back();
    }

    public function doLogout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
