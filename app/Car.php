<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'id', 'model', 'status', 'lat', 'long', 'updated_at'
    ];

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
