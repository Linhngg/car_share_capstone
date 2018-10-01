<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Car;
use App\Booking;
use App\User;
use App\Carpark;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book($id)
    {
        $car = Car::find($id);
        $features = json_decode($car->features);
        $car_park = Carpark::where('lat', $car->lat)->where('long', $car->long)->first();
        return view('book')->with('car', $car)->with('features', $features)->with('car_park', $car_park);
    }

    public function confirm(Request $request)
    {
        $car_id = $request->input('id');
        $user = Auth::user();

        $booking = new Booking;
        $booking->make($car_id, $user->id);
        return redirect()->route('user');
    }

    public function return(Request $request)
    {
        $car_parks = Carpark::all();
        $request->session()->put('car_parks', json_encode($car_parks));
        return view('return')->with('car_parks', $car_parks);
    }

    public function post_return(Request $request)
    {
        $carpark_id = $request->input('carpark_id');
        $user = Auth::user();
        $booking = Booking::find($user->current_booking_id);
        $booking->finish($carpark_id);
        return redirect('home');
    }
}
