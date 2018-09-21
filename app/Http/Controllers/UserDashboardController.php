<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
//        $currentBooking = Booking::where('user_id', $user->id);
        return view('user/index')->with('user', $user);
    }

    public function history()
    {
        $user = Auth::user();
        $bookings = Booking::with(['user', 'car'])->where('user_id', $user->id)->get();
        return view('user/history')->with('bookings', $bookings);;
    }
}
