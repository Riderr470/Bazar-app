<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function users(){
        return view('master');
    }

    public function createUser(){
        return view('backend.pages.users.create');
    }

    public function showUserDetails(){
        $user = User::all();

        return view('backend.pages.users.details', compact('user'));
    }

    public function showRegisterPage(){
        return view('frontend.pages.registration');
    }

    public function login(){
        return view('frontend.pages.login');
    }

    public function storeUser(Request $request){
        
        $validate = $request->validate([
            'userName' => 'required',
            'email' => 'bail|required|email:rfc,dns|min:6|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'address' => 'required',
            'phone' => 'required|unique:users,phone',
        ]);

        User::create([
            'name'=>$request->userName,
            'email'=>strtolower($request->email),
            'password'=>bcrypt($request->password),
            'address'=>$request->address,
            'phone'=>$request->phone,

        ]);

        return redirect()->back();
    }

    public function processLogin(){

        $validate = $request->validate([
            'email'=>'required',
            'password'=>'required|min:6',
        ]);
    }
}
