<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'id', 'user_id', 'car_id', 'start', 'end'
    ];
}
