<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function order_list()
    {
        return $this->belongsTo(Order_list::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
