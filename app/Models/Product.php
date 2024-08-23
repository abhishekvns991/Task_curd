<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description'
    ];

    protected static function booted()
    {
        static::creating(function ($product) {
            $product->name = ucfirst($product->name);
        });
    }
}
