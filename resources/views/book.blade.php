@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/book.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wickedpicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/book.js') }}"></script>
    <link href="{{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css') }}"  rel="stylesheet">
@endsection

@section('content')

    <div class="container-fluid " id="outerInputBox">
        <div class="row">
            <div class="col-md-7 col-sm-7"> <h1 class="display-5">Book for {{ $car->model }}</h1></div>
            <div class="priceDisplay col-md-3 col-sm-2" > <h2 class="display-5 text-left">Price $200/Day</h2> </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-5 border border-dark rounded" >
                <div class="row" id="inputBox">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="pickupDate" class="font-weight-bold" >Pickup Date</label>
                        <div class="input-group">
                            <input type="date" id="pickupDate" disabled class="font-weight-bold text-info form-control todayDate" />
                            <span class="input-group-prepend">
                             <span class="input-group-text rounded-right">
                                <i class="far fa-calendar-alt fa-lg"></i>
                             </span>
                            </span>
                        </div>

                    </div>
                </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="pickupTime" class="font-weight-bold" >Pickup Time</label>
                    <div class="input-group">
                        <input type="text" id="pickupTime" onfocus="timepickerFunc()" name="timepicker" class="timepicker form-control"/>
                        <span class="input-group-prepend" onclick="timepickerFunc()">
                            <span class="input-group-text rounded-right">
                               <i class="far fa-clock fa-lg"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="returnDate" class="font-weight-bold">Return Date</label>
                    <div class="input-group">
                        <input type="date" id="returnDate" disabled class="font-weight-bold text-info form-control todayDate" />
                            <span class="input-group-prepend">
                             <span class="input-group-text rounded-right">
                                <i class="far fa-calendar-alt fa-lg"></i>
                             </span>
                            </span>
                    </div>

                </div>

            </div>
                    {{--wickedpicker--}}
            <div class="col-md-3">
                <div class="form-group ">
                    <label for="returnTime" class="font-weight-bold">Return Time</label>
                    <div class="input-group">
                        <input type="text" id="pickupTime" onfocus="timepickerFunc()" name="timepicker" class="timepicker form-control"/>
                        <span class="input-group-prepend" onclick="timepickerFunc()">
                            <span class="input-group-text rounded-right">
                               <i class="far fa-clock fa-lg"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pickupLocation" class="font-weight-bold" >Pickup Location</label>
                              <p class="font-weight-bold text-info">Secure Parking - QV Car Park</p>

                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="returnLocation" class="font-weight-bold" >Return Location</label>
                             <p class="font-weight-bold text-info">Secure Parking - QV Car Park</p>
                        </div>
                    </div>
                </div>
                <hr>
                {{--Bottom Row--}}
                {{--first column--}}
                <div class="row">
                    <div class="col-md-4"><br>
                        <h3 class="display-5">Car Features</h3>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item text-center d-inline-block"> <img class="img-thumbnail " src="{{url('/images/icons/gas.png')}}" alt="Image gas pump"/></li>
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
                            <li class="list-inline-item"><img class="img-thumbnail " src="{{url('/images/icons/bikeRack.png')}}" alt="Image bike rack"/></li>
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
                        </ul>confirm-booking
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
                        {!! Form::open(['method' => 'POST', 'route' => '', ]) !!}
                        {{ Form::hidden('id', $car->id) }}
                        <button type="submit" class="btn float-right btn-lg btn-dark d-block " id="bookBtn">Confirm</button>
                        {!! Form::close() !!}
                    </div>


                </div>

        </div>
            {{--Slide images--}}
            <div class="col-md-5 col-sm-4 col-3" id="slide">
                <div class="row">
                    <div class="col-md-9" style="padding-right: 0px!important;">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>
                                <li data-target="#carousel" data-slide-to="3"></li>
                                <li data-target="#carousel" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img class="img-fluid d-block w-100 " src="{{url('/images/honda1.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid d-block w-100" src="{{url('/images/honda2.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid d-block w-100" src="{{url('/images/honda3.jpg')}}" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid d-block w-100" src="{{url('/images/honda4.jpg')}}" alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid d-block w-100" src="{{url('/images/honda5.jpg')}}" alt="Fifth slide">
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
                    </div>
                    <div class="col-md-2 col-sm-2" id="slideSmall">
                        <img class="img-fluid rounded" data-target="#carousel" data-slide-to="0" src="{{url('/images/honda1.jpg')}}" alt="slide 1 small image">
                        <img class="img-fluid rounded" data-target="#carousel" data-slide-to="1" src="{{url('/images/honda2.jpg')}}" alt="slide 2 small image">
                        <img class="img-fluid rounded" data-target="#carousel" data-slide-to="2" src="{{url('/images/honda3.jpg')}}" alt="slide 3 small image">
                        <img class="img-fluid rounded" data-target="#carousel" data-slide-to="3" src="{{url('/images/honda4.jpg')}}" alt="slide 4 small image">
                        <img class="img-fluid rounded" data-target="#carousel" data-slide-to="4" src="{{url('/images/honda5.jpg')}}" alt="slide 5 small image">
                    </div>
                </div>
                <div class="row">
                    <div class="mapouter col-md-12 col-sm-10 rounded">
                        <div class="gmap_canvas rounded">
                            <iframe class="border-0 rounded"
                                    src=<?php echo "https://www.google.com/maps/embed/v1/place?key=AIzaSyDPWvU7gcEWfLVo5nFPBbM9AL3KfYHqTaU&q=".$car->lat.",".$car->long."&zoom=17&maptype=satellite"; ?>
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
{{--    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wickedpicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/book.js') }}"></script>--}}
@endsection
@section('assets')


@endsection
