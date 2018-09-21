<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'id', 'user_id', 'car_id', 'start', 'end'
    ];

    public function make(int $car_id, int $user_id)
    {
        date_default_timezone_set('Australia/Melbourne');
        $this->user_id = $user_id;
        $this->car_id = $car_id;
        $this->start =  date("Y-m-d H:i:s");
//        $this->end =  date("Y-m-d H:i:s", strtotime('+2 hours'));

        $this->created_at =  date("Y-m-d H:i:s");
        $this->updated_at =  date("Y-m-d H:i:s");
        $this->save();
    }

    function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    function car() {
        return $this->belongsTo('App\Car', 'car_id');
    }
}
