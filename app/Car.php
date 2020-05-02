<?php

namespace App;

use Cog\Contracts\Love\Reactable\Models\Reactable as ReactableContract;
use Cog\Laravel\Love\Reactable\Models\Traits\Reactable;
use Illuminate\Database\Eloquent\Model;

class Car extends Model implements ReactableContract
{
    use Reactable;
    
    protected $fillable = [
        'name',
        'description',
        'price',
        'likes',
        'status',
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

    public function bookings(){
        return $this->hasMany(Booking::class, 'booking_id');
    }
}
