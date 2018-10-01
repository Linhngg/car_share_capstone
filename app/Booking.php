<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Booking extends Model
{
    protected $fillable = [
        'id', 'user_id', 'car_id', 'start', 'end', 'total_fee', 'penalty_fee', 'final_fee'
    ];

    public function make(int $car_id, int $user_id)
    {
        date_default_timezone_set('Australia/Melbourne');
        $this->user_id = $user_id;
        $this->car_id = $car_id;
        $this->start =  date("Y-m-d H:i:s");
        $this->end =  date("Y-m-d H:i:s");
        $this->total_fee = 0;
        $this->penalty_fee = 0;
        $this->final_fee = 0;

        $this->created_at =  date("Y-m-d H:i:s");
        $this->updated_at =  date("Y-m-d H:i:s");

        $this->save();
        $user = Auth::user();
        $user->current_booking_id = $this->id;
        $user->save();
        $car = Car::find($car_id);
        $car->book();
    }

    public function finish($carpark_id)
    {
        date_default_timezone_set('Australia/Melbourne');
        $this->end =  date("Y-m-d H:i:s");
        $this->updated_at =  date("Y-m-d H:i:s");
        $this->save();
        $user = Auth::user();
        $user->current_booking_id = -1;
        $user->save();

        $car = Car::find($this->car_id);
        $carpark = Carpark::find($carpark_id);
        $car->return($carpark);
        //Update fee
        $rate = $car->price_rate;
        $this->total_fee = round( abs((new \DateTime($this->start))->getTimestamp() - (new \DateTime($this->end))->getTimestamp()) / 60 * $rate, 2);
        $this->final_fee = $this->total_fee + $this->penalty_fee;
        $this->save();
    }

    function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    function car() {
        return $this->belongsTo('App\Car', 'car_id');
    }
}
