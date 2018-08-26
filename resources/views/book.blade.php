@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/book.css') }}" rel="stylesheet">
    {{--<script type="text/javascript" src="{{ asset('js/book.js') }}"></script>--}}

@endsection

@section('content')

    <div class="container-fluid justify-content-center" id="outerInputBox">
        <h1 class="display-5 ">Book for Honda CR-V SUV{{-- <span class="text-right">Price $200/Day</span>--}}</h1>
        <div class="row ">
            <div class="col-md-7 border border-dark rounded " >
                <div class="row" id="inputBox">
                <div class="col-md-3 ">
                    <div class="form-group">
                        <label for="pickupDate" class="font-weight-bold" >Pickup Date</label>
                        <div class="input-group">
                            <input type='date' id="pickupDate"  class="form-control" />
                            <span class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="{{url('/images/calendar.png')}}" alt="Image calendar"/>
                        </span>
                    </span>
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
                <div class="form-group ">
                    <label for="pickupTime" class="font-weight-bold" >Pickup Time</label>
                    <div class="input-group">
                        <input type="time" id="pickupTime"  class="form-control" />
                        <span class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="{{url('/images/clock.png')}}" alt="Image calendar"/>
                        </span>
                    </span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group ">
                    <label for="returnDate" class="font-weight-bold">Return Date</label>
                    <div class="input-group">
                        <input type="time" id="pickupTime"  class="form-control" />
                        <span class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="{{url('/images/calendar.png')}}" alt="Image calendar"/>
                        </span>
                    </span>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="form-group ">
                    <label for="returnTime" class="font-weight-bold">Return Time</label>
                    <div class="input-group">
                        <input type="time" id="returnTime"  class="form-control" />
                        <span class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="{{url('/images/clock.png')}}" alt="Image calendar"/>
                        </span>
                    </span>
                    </div>
                </div>
            </div>
        </div>
                <div class="row border-bottom">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pickupLocation" class="font-weight-bold" >Pickup Location</label>
                            <ul class="list-inline">
                                <li class="list-inline-item">  <p class="font-weight-bold text-info">Melbourne CBD </p></li>
                                <li class="list-inline-item">  <p class="badge badge-dark">{{--<a href="{{ route('') }}">Change</a> --}}Change</p></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="returnLocation" class="font-weight-bold" >Return Location</label>
                            <input type="text" id="returnLocation"  class="form-control" />
                        </div>
                    </div>
                </div>
                {{--Bottom Row--}}
                {{--first column--}}
                <div class="row">
                    <div class="col-md-4"><br>
                        <h3 class="display-5">Car Features</h3>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <img class="img-thumbnail" src="{{url('/images/icons/gas.png')}}" alt="Image gas"/></li>
                            <li class="list-inline-item">   <p class="font-weight-bold">Gas Vehicle </p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item "> <img class="img-thumbnail " src="{{url('/images/icons/car-top.svg')}}" alt="Image car top"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">4 Doors </p></li>

                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <img class="img-thumbnail " src="{{url('/images/icons/person.png')}}" alt="Image person"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">Up to 7 passenger</p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <img class="img-thumbnail " src="{{url('/images/icons/gearshift.svg')}}" alt="Image gear"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">Auto transmission</p></li>
                        </ul>
                    </div>


                    {{--2nd column--}}
                    <div class="col-md-4"><br>
                        <h3 class="display-5">Car Extras</h3>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <img class="img-thumbnail" src="{{url('/images/icons/bikeRack.png')}}" alt="Image gas"/></li>
                            <li class="list-inline-item">   <p class="font-weight-bold">Bike Rack </p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item "> <img class="img-thumbnail " src="{{url('/images/icons/gpsCar.svg')}}" alt="Image car top"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">GPS system </p></li>

                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <img class="img-thumbnail " src="{{url('/images/icons/fm-radio.svg')}}" alt="Image person"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">Stereo CD/MP3</p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <img class="img-thumbnail " src="{{url('/images/icons/bluetooth.png')}}" alt="Image gear"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">Bluetooth connection</p></li>
                        </ul>
                    </div>
                    <div class="col-md-4"><br>
                        <h3 class="display-5">Pricing</h3>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <p class="font-weight-bold">Price per day</p> </li>
                            <li class="form-check-inline text-center">  <p class="font-weight-bold">$200.00</p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <p class="font-weight-bold">Rental price</p> </li>
                            <li class="list-inline-item">   <p class="font-weight-bold ">$400.00</p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <p class="font-weight-bold">Rental period</p> </li>
                            <li class="list-inline-item">   <p class="font-weight-bold ">2 days</p></li>
                        </ul>
                        <div class="">
                            <h3 class="display-5">Category</h3>
                            <p class="font-weight-bold">Family car</p>
                        </div>
                        <br>
                        <button type="button" class="btn float-right btn-lg btn-dark " id="bookBtn">Continue</button>
                    </div>

                </div>
            {{--Slide images--}}
        </div>

            <div class="col-md-3">

                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#indicator" data-slide-to="0" class="active"></li>
                        <li data-target="#indicator" data-slide-to="1"></li>
                        <li data-target="#indicator" data-slide-to="2"></li>
                        <li data-target="#indicator" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img class="d-block w-100 " src="{{url('/images/honda1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{url('/images/honda2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{url('/images/honda3.jpg')}}" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{url('/images/honda4.jpg')}}" alt="Fourth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                {{--map--}}
                <div class="mapouter ">
                    <div class="gmap_canvas rounded">
                        <iframe class="border-0" id="gmap_canvas" src="https://maps.google.com/maps?q=melbourne%20cbd&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                ></iframe>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection