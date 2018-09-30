<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'id', 'model', 'status', 'lat', 'long', 'updated_at', 'odometer', 'lastServiceOdometer', 'serviceInterval', 'lastServiceDate'
    ];

    public function getReadableStatusAttribute()
    {
        $readableStatus = 'Default';
        switch ($this->status) {
            case 0:
                $readableStatus = 'Booked';
                break;
            case 1:
                $readableStatus = 'Available';
                break;
            case 2:
                $readableStatus = 'Servicing';
                break;
            case 3:
                $readableStatus = 'Retired';
                break;
            default:

        };
        return $readableStatus;
    }

    public function getServiceStatusAttribute()
    {
        $nextService = $this->lastServiceOdometer + $this->serviceInterval;
        $different = $nextService - $this->odometer;
        $readableStatus = 'Default';
        switch ($different) {
            case ($different < 0):
                $readableStatus = 'Need Service!';
                break;
            case ($different > 0 && $different < 1000):
                $readableStatus = 'Close to Service';
                break;
            case ($different > 1000):
                $readableStatus = 'OK';
                break;
            default:
        };
        return $readableStatus;
    }

    public function getNeedServiceAttribute(){
        $nextService = $this->lastServiceOdometer + $this->serviceInterval;
        $different = $nextService - $this->odometer;
        $readableStatus = 'Default';
        switch ($different) {
            case ($different < 0):
                $readableStatus = true;
                break;
            case ($different > 0):
                $readableStatus = false;
                break;
            default:
        };
        return $readableStatus;
    }

    public function service(){
        if($this->status != 2){
            $this->status = 2;
            $this->lastServiceOdometer = $this->odometer;
            $this->lastServiceDate = date("Y-m-d");
            $this->save();
            return true;
        }
        return false;
    }

    public function release(){
        if($this->status == 2){
            $this->status = 1;
            $this->save();
            return true;
        }
        return false;
    }

    public function retire(){
        if($this->status != 3){
            $this->status = 3;
            $this->save();
            return true;
        }
        return false;
    }

    public function book()
    {
        if ($this->status == 1) {
            $this->status = 0;
            $this->updated_at = date("Y-m-d H:i:s");
            $this->save();
            return true;
        }
        return false;
    }

    public function return($car_park)
    {
        if ($this->status == 0) {
            $this->status = 1;
            $this->updated_at = date("Y-m-d H:i:s");
            $this->lat = $car_park->lat;
            $this->long = $car_park->long;
            $this->save();
            return true;
        }
        return false;
    }


    public function simulationUpdate($lat, $long, $distance){
        $this->lat =  $lat;
        $this->long = $long;
        $this->odometer += $distance;
        $this->save();
        return true;
    }
}
