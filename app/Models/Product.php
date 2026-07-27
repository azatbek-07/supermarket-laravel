<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'old_price',
        'description',
        'image',
        'badge',
    ] ;
}
