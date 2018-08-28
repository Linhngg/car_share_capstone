@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <script src="{{ asset('https://use.fontawesome.com/releases/v5.2.0/js/all.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-2 float-left pl-0 pr-0 collapse width show rounded" id="sidebar">
                <div class="list-group border-0 card text-md-left">
                    <h4 class="text-light text-center" id="sidebarTitle">Admin Dashboard</h4>
                    <a href="#" class="border-0 list-group-item d-inline-block collapsed"><i class="fas fa-home"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                    <a href="#" class="border-0 list-group-item d-inline-block collapsed "><i class="fas fa-map-marked"></i><span class="d-none d-md-inline"> Map</span></a>
                    <a href="#" class="border-0 list-group-item d-inline-block collapsed "><i class="fas fa-address-book"></i> <span class="d-none d-md-inline">Bookings</span></a>
                </div>
            </div>
            <main class="col-md-10 float-left">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="fas fa-bars"></i></a>

            </main>
        </div>
    </div>

@endsection
{{--
@section('assets')

<script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
  <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
@endsection
--}}