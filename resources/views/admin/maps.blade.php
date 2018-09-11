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
            <main class="col-md-10 float-left">
                <a id="sidebarCollapse" href="#" data-target="#sidebar" data-toggle="collapse"><i class="fas fa-bars text-dark"></i></a>
              <h1>maps</h1>
                <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=RMIT%20melbourne+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Embed Google Map</a></iframe></div><br />
            </main>
        </div>
    </div>
@endsection