@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('https://use.fontawesome.com/releases/v5.2.0/js/all.js') }}"></script>



@endsection

@section('content')
    <div class="container-fluid">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
 {{--           <div id="sidebar" class="col-md-2 float-left pl-0 pr-0 collapse width show rounded" >
                <div class="list-group border-0 card text-md-left" id="listgroup-span">
                    <div id="sidebarTitle" class=" d-inline-block ">
                        <i id="iconTitle" class="fas fa-car-side fa-2x text-light"></i> <h4 class="text-light text-center" >Admin Dashboard</h4>


                          <h5 class="text-light">Admin</h5>
                    </div>
                    <a href="{{ route('dashboard') }}" class="border-0 list-group-item d-inline-block collapsed text-light"><i class="fas fa-home fa-lg"></i> <span>Dashboard</span></a>
                    <a href="{{ route('maps') }}" class="border-0 list-group-item d-inline-block collapsed text-light"><i class="fas fa-globe-asia fa-lg"></i><span>Map</span></a>
                    <a href="{{ route('bookings') }}" class="border-0 list-group-item d-inline-block collapsed text-light"><i class="fas fa-table  fa-lg"></i> <span> Bookings</span></a>
                </div>
            </div>--}}

            <div id="sidebar" class="col-md-2 float-left pl-0 pr-0 collapse width show rounded" >
                <div class="list-group border-0 card text-md-left" id="listgroup-span">
                    <div id="sidebarTitle" class=" d-inline-block ">
                        <i  class="fas fa-car-side fa-2x text-light"></i> <h4 class="text-light tex t-center" >Admin Dashboard</h4>
                    </div>
                    <div id="sidebarTitleCollapse" class=" d-inline-block ">
                        <i  class="fas fa-car-side fa-lg text-light"></i> <h5 class="text-light">Admin</h5>
                    </div>
                    <a href="{{ route('dashboard') }}" class="border-0 list-group-item d-inline-block collapsed text-light"><i class="fas fa-home fa-lg img-fluid"></i> <span class="text-left">Dashboard</span></a>
                    <a href="{{ route('maps') }}" class="border-0 list-group-item d-inline-block collapsed text-light"><i class="fas fa-globe-asia fa-lg img-fluid"></i><span class="text-left">&nbsp;Map</span></a>
                    <a href="{{ route('bookings') }}" class="border-0 list-group-item d-inline-block collapsed text-light"><i class="fas fa-table fa-lg img-fluid"></i> <span class="text-left">Bookings</span></a>
                </div>
            </div>
            {{--main content--}}
            <main class="col-md-10 float-left">
                <a id="sidebarCollapse" href="#" data-target="#sidebar" data-toggle="collapse"><i class="fas fa-bars text-dark"></i></a>
                <h1>dashboard</h1>
            </main>
        </div>
    </div>

@endsection
@section('assets')


  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js') }}"></script>

<script  type="text/javascript">
$(document).ready(function () {

$('#sidebarCollapse').on('click', function () {
$('#sidebar').toggleClass('active');
});

});
</script>
@endsection
