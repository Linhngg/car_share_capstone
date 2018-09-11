<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car as Car;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Car::where('status', 1)->get();
        $request->session()->put('cars', json_encode($cars));
        return view('home')->with('cars', $cars);
    }
}
