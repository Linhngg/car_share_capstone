<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carpark extends Model
{
    protected $fillable = [
        'id', 'lat', 'long', 'name', 'address'
    ];
}
