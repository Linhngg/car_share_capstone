<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'id', 'model', 'status', 'lat', 'long'
    ];
}
