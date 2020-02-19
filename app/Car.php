<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'likes',
        'nop',
        'image',
        'category_id',
        'brand_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
