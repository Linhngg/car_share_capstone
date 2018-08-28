<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Car;

class BookingController extends Controller
{
    public function book($id)
    {
        $car = Car::find($id);
        return view('book')->with('car', $car);
    }

    public function confirm()
    {

        //Proceed booking
        return view('driving');
    }

    public function return()
    {
        //Proceed return
        return redirect('home');
    }
}
