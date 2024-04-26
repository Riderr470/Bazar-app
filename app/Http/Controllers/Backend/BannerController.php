<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create()
    {
        return view('backend.pages.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
        ]);

        $img = $request->file('image');

        $file_name = 'Img-Bnr' . date('YmdHsi') . '.' . $img->getClientOriginalExtension();


        if ($img->isValid()) {
            $img->storeAs('banner', $file_name);
        }

        Banner::create([
            'name' => $request->name,
            'image' => $file_name,
        ]);

        notify()->success('New banner added succesfully');
        return redirect()->route('banner.list');
    }

    public function list()
    {
        $data = Banner::paginate(10);

        return view('backend.pages.banner.list', compact('data'));
    }
}
