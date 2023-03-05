<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
        'price',
        'discount',
        'quantity',
        'category',
        'product_id',
        'name',
        'email',
        'image',



    ];
}
