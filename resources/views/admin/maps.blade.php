@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/maps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('https://use.fontawesome.com/releases/v5.2.0/js/all.js') }}"></script>

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row d-flex d-md-block flex-nowrap wrapper">

         {{--   <div class="col-md-2 float-left pl-0 pr-0 collapse width show rounded" id="sidebar">
                <div class="list-group border-0 card text-md-left">

                    <h4 class="text-light text-center" id="sidebarTitle">Admin Dashboard</h4>
                    <a href="{{ route('dashboard') }}" class="border-0 list-group-item d-inline-block collapsed"><i class="fas fa-home"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                    <a href="{{ route('maps') }}" class="border-0 list-group-item d-inline-block collapsed "><i class="fas fa-map-marked"></i><span class="d-none d-md-inline"> Map</span></a>
                    <a href="{{ route('bookings') }}" class="border-0 list-group-item d-inline-block collapsed "><i class="fas fa-address-book"></i> <span class="d-none d-md-inline">Bookings</span></a>
                </div>
            </div>--}}

            {{--side navbar --}}
            <div id="sidebar" class="col-md-2 float-left pl-0 pr-0 collapse width show rounded nav" >
                <div class="list-group border-0 card text-md-left" id="listgroup-span">
                    <div id="sidebarTitle" class=" d-inline-block ">
                      {{--  <i  class="fas fa-car-side fa-2x text-light"></i>--}} <h4 class="text-light text-center font-weight-bold" >Admin Dashboard</h4>
                    </div>
                    <div id="sidebarTitleCollapse" class="d-inline-block ">
                        {{--<i  class="fas fa-car-side fa-lg text-light"></i>--}} <h5 class="text-light font-weight-bold">Admin</h5>
                    </div>
                    <a href="{{ route('dashboard') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-home fa-lg img-fluid"></i> <span class="text-left">Dashboard</span></a>
                    <a href="{{ route('maps') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-warning font-weight-bold"><i class="fas fa-globe-asia fa-lg img-fluid"></i><span class="text-left">&nbsp;Map</span></a>
                    <a href="{{ route('bookings') }}" class="nav-item border-0 list-group-item d-inline-block collapsed text-light font-weight-bold"><i class="fas fa-table fa-lg img-fluid"></i> <span class="text-left">Bookings</span></a>
                </div>
            </div>


            {{--main content--}}
            <main class="col-md-10 float-left ">
                <a class="navbar-toggler" id="sidebarCollapse" href="#" data-target="#sidebar" data-toggle="collapse"><i class="navbar-toggler-icon fas fa-bars text-dark float-left"></i></a> <br>
              <h1>Maps</h1>
            </main>
        </div>
    </div>
@endsection