<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Booking;

class AdminController extends Controller
{
    public function dashboard()
    {
        $cars = Car::all();
        return view('admin/dashboard')->with('cars', $cars);
    }
    public function maps()
    {
        return view('admin/maps');
    }
    public function bookings()
    {
        $bookings = Booking::with(['user', 'car'])->get();
        return view('admin/bookings')->with('bookings', $bookings);
    }
}
