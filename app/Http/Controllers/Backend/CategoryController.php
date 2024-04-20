<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createCategory()
    {
        return view("backend.pages.category.categoryForm");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCategory(Request $request)
    {
        $request->validate([
            'categoryName' => 'required',
            'brandName' => 'required',
            'image' => 'required|max:20240',

        ]);

        if ($request->hasFile('image')) {

            $img = $request->file('image');

            $file_name = 'Img_cat-' . date('YmdHis') . '.' . $img->getClientOriginalExtension();


            if ($img->isValid()) {
                $img->storeAs('category', $file_name);
            }
        } else {

            $file_name = 'default.jpg';
        }

        Category::create([
            'categoryName' => $request->categoryName,
            'brandName' => $request->brandName,
            'image' => $file_name,
        ]);

        return redirect()->back();
    }

    public function listCategory(Request $request)
    {
        $data = Category::all();

        return view('backend.pages.category.list', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
