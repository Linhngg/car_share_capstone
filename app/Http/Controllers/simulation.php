<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class simulation extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_auth');
    }

    //
    public function index()
    {
        $cars = Car::all();
        return view('simulation')->with('cars', $cars);
    }

}
