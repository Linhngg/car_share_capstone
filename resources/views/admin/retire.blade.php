<?php
/**
 * Created by PhpStorm.
 * User: Curtis
 * Date: 18/09/2018
 * Time: 11:30 AM
 */
?>
@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('https://use.fontawesome.com/releases/v5.2.0/js/all.js') }}"></script>

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            {{--side navbar --}}
            <div id="sidebar" class="col-md-2 float-left pl-0 pr-0 collapse width show rounded nav" >
                <div class="list-group border-0 card text-md-left" id="listgroup-span">
                    <div id="sidebarTitle" class=" d-inline-block ">
                        {{--  <i  class="fas fa-car-side fa-2x text-light"></i>--}} <h4 class="text-light text-center font-weight-bold" >Admin Dashboard</h4>
                    </div>
                    <div id="sidebarTitleCollapse" class="d-inline-block ">
                        {{--<i  class="fas fa-car-side fa-lg text-light"></i>--}} <h5 class="text-light font-weight-bold">Admin</h5>
                    </div>
                    <a href="{{ route('dashboard') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-warning font-weight-bold"><i class="fas fa-home fa-lg img-fluid"></i> <span class="text-left">Dashboard</span></a>
                    <a href="{{ route('maps') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-globe-asia fa-lg img-fluid"></i><span class="text-left">&nbsp;Map</span></a>
                    <a href="{{ route('bookings') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-table fa-lg img-fluid"></i> <span class="text-left">Bookings</span></a>
                    <a href="{{ route('service') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-table fa-lg img-fluid"></i> <span class="text-left">Service</span></a>
                    <a href="{{ route('retire') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-table fa-lg img-fluid"></i> <span class="text-left">Retire</span></a>
                </div>
            </div>
            {{--main content--}}
            <main class="col-md-10 float-left">
                <a id="sidebarCollapse" href="#" data-target="#sidebar" data-toggle="collapse"><i class="fas fa-bars text-dark"></i></a>
                <h1>Retire</h1>
                <table class="table table-hover rounded table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Car Make/Model</th>
                        <th scope="col">Date added</th>
                        <th scope="col">Retire</th>
                    </tr>
                    </thead>
                    <tbody class="font-weight-bold">
                    @foreach($cars as $car)
                        @if($car->retireRange && $car->status != 3)
                            <tr>
                                <th scope="row">{{$car->model}}</th>
                                <th scope="row">{{$car->created_at}}</th>
                                <td>
                                    {!! Form::open(['method' => 'POST', 'route' => 'retireCar', ]) !!}
                                    {{ Form::hidden('id', $car->id) }}
                                    <button type="submit" class="btn float-right btn-lg btn-dark d-block " id="bookBtn">Retire</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </main>
        </div>
    </div>

@endsection
@section('assets')
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
@endsection

