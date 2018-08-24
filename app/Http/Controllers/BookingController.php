<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BookingController extends Controller
{
    public function book($id)
    {
        //Find car base on id
        //Return car data
        return view('book');
    }

    public function confirm()
    {
        //Proceed booking
        return view('home');
    }
}
