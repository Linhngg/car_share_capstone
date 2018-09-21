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
        $cars = Car::all();
        return view('admin/maps')->with('cars', $cars);
    }
    public function bookings()
    {
        $bookings = Booking::with(['user', 'car'])->get();
        return view('admin/bookings')->with('bookings', $bookings);
    }
    public function service(){
        $cars = Car::all();
        return view('admin/service')->with('cars', $cars);
    }

    public function sendService(Request $request){
        $id = $request->input('id');
        $car = Car::find($id);
        $car->service();
        $cars = Car::all();
        return view('admin/service')->with('cars', $cars);
    }

    public function releaseService(Request $request){
        $id = $request->input('id');
        $car = Car::find($id);
        $car->release();
        $cars = Car::all();
        return view('admin/service')->with('cars', $cars);
    }
}
