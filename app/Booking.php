<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'car_id',
        'user_id',
        'pickup_loc',
        'drop_loc',
        'pickup_date',
        'pickup_time',
        'drop_date',
        'drop_time',
        'is_approved'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function car(){
        return $this->belongsTo(Car::class);
    }
}
