<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Car;
use App\Booking;
use App\User;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book($id)
    {
        $car = Car::find($id);
        return view('book')->with('car', $car);
    }

    public function confirm(Request $request)
    {
        $car_id = $request->input('id');
        $user = Auth::user();
        $car = Car::find($car_id);
        $car->book();

        $booking = new Booking;
        $booking->make($car->id, $user->id);
        return view('driving')->with('car', $car);
    }

    public function return(Request $request)
    {
        $id = $request->input('id');
        $car = Car::find($id);
        $car->return();
        return redirect('home');
    }
}
