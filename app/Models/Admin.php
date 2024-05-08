<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authable;

class Admin extends Authable
{
    use HasFactory;

    protected $guarded = [];
}
