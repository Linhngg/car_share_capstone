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

    public function return()
    {
        if ($this->status == 0) {
            $this->status = 1;
            $this->updated_at = date("Y-m-d H:i:s");
            $this->save();
            return true;
        }
        return false;
    }
}
