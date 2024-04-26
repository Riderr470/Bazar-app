<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function listAll()
    {
        return view('backend.pages.review.list');
    }

    public function create(Request $request)
    {
        // validate
        // $checkValidation = Validator::make([]);

        // create
        Review::create([
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        notify()->success("Comment submitted");
        return redirect()->back();
    }
}
