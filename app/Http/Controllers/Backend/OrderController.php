<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.order');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createOrder()
    {
        return view('backend.pages.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeOrder(Request $request)
    {
        dd($request->all());
        Order::create([]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function showOrders()
    {
        $data = Product::all();

        return view('backend.pages.orders.orderDetails', compact('data'));
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
