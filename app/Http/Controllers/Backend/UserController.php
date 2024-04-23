<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

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
                $img->storeAs('users', $file_name);
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

        notify()->success("User created successfully");
        return redirect()->back();
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->except(['_token']);

        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6',
        ]);


        if (auth()->attempt($credentials)) {
            notify()->success('Log-in Successful');
            return redirect()->route('home');
        }

        return redirect()->back();
    }

    public function doLogout()
    {
        auth()->logout();

        smilify('success', 'Log-out successful');
        return redirect()->route('login');
    }


    public function userProfile($id)
    {
        $userDetails = User::find($id);
        return view('frontend.pages.profile', compact('userDetails'));
    }

    public function editUserProfile(Request $request, $id)
    {
        $resource = User::find($id);

        $request->validate([
            'userName' => 'required',
            'email' => 'bail|required|email:rfc,dns|unique:users,email,' . $resource->id,
            'dob' => 'nullable|date|before:' . now()->subYears(16)->toDateString(),
            'age' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable|regex:/(0)[0-9]/|not_regex:/[a-z]/|size:11',
            'image' => 'nullable|image',
        ]);

        $dob = $request->dob;

        // Calculate the age
        $age = $this->calculateAge($dob);

        if ($request->hasFile('image')) {


            $img = $request->file('image');

            $file_name = uniqid('image_', true) . Str::random(10) . '.' . $img->getClientOriginalExtension();


            if ($img->isValid()) {

                File::delete('app/users/' . $resource->image);
                $img->storeAs('users', $file_name);
            }
        } else {

            $file_name = $resource->image;
        }



        $resource->update([
            'name' => $request->userName,
            'email' => strtolower($request->email),
            'dob' => $request->dob,
            'age' => $age < 10 ? null : $age,
            'address' => $request->address,
            'phone' => $request->phone,
            'image' => $file_name,

        ]);

        notify()->success("User updated successfully");
        return redirect()->back();
    }









    private function calculateAge($dob)
    {
        return Carbon::parse($dob)->age;
    }
}
