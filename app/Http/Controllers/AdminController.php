<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Booking;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_auth');
    }

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

    public function retire(){
        $cars = Car::all();
        return view('admin/retire')->with('cars', $cars);
    }

    public function retireCar(Request $request){
        $id = $request->input('id');
        $car = Car::find($id);
        $car->retire();
        $cars = Car::all();
        return view('admin/retire')->with('cars', $cars);
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

    public function simUpdate(Request $request){
        $id = $request->input('id');
        $car = Car::find($id);
        $lat = $request->input('lat');
        $long = $request->input('long');
        $distance = $request->input('distance');
        $car->simulationUpdate($lat, $long, $distance);
        return 1;
    }
}
