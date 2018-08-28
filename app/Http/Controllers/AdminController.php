<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function maps()
    {
        return view('admin/maps');
    }
    public function bookings()
    {
        return view('admin/bookings');
    }
}
