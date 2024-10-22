<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'discounted_price',
        'stock',
        'category',
        'color',
        'sizes',
        'tags',
        'sku',
        'description',
        'image',
        'images'
    ];

    protected $casts = [
        'images' => 'array'
    ];
}
