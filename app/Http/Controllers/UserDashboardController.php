<?php

namespace App\Http\Controllers;

use App\Carpark;
use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $currentBooking = Booking::with(['user', 'car'])->where('id', $user->current_booking_id)->first();
        if ($currentBooking == null) {
            return view('user/index')->with('booking', null);
        }
        else {
            $carpark = Carpark::where('lat', $currentBooking->car->lat)->where('long', $currentBooking->car->long)->first();
            $request->session()->put('carpark', json_encode($carpark));
            return view('user/index')->with('booking', $currentBooking)->with('user', $user)->with('carpark', $carpark);
        }
    }

    public function history()
    {
        $user = Auth::user();
        $bookings = Booking::with(['user', 'car'])->where('user_id', $user->id)->get();
        return view('user/history')->with('bookings', $bookings);
    }
}
