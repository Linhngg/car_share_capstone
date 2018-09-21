@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/book.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wickedpicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/book.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


@endsection

@section('content')

    <div class="container-fluid" id="outerInputBox">

        <div class="row justify-content-center" style="margin:0">
            <div class="col-md-11 col-sm-7">
                {{--<nav aria-label="breadcrumb">
                    <ol class="breadcrumb font-weight-bold" style="margin-bottom: 0px;padding-bottom: 0px;padding-left: 3px">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Book</li>
                    </ol>
                </nav>--}}
                <h1 class="display-5 titleCar">Book for {{ $car->model }}</h1>
            </div>

            <div class="col-md-7 col-sm-5 border rounded" >

            {{--    <div class="row" id="inputBox">
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
                            --}}{{--wickedpicker--}}{{--
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
                </div>--}}
                        <div class="row locationDisplay">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <h3 class="display-5">Pickup location</h3>
                                      <p class="font-weight-bold">Secure Parking - QV Car Park</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group text-justify">
                                    <h3 class="display-5">Price</h3>
                                    <ul class="list-inline infoCar ">
                                        <li class="list-inline-item"> <p class="font-weight-bold">Price per hour</p> </li>
                                        <li class="form-check-inline text-center">  <p class="font-weight-bold">- $7.00</p></li>
                                    </ul>
                               </div>
                            </div>
                            {{--  <div class="col-md-3">
                                <div class="form-group">
                                    <h3 class="display-5">Return Location</h3>
                                     <p class="font-weight-bold text-info">Secure Parking - QV Car Park</p>
                                </div>
                            </div>--}}
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="display-5">Car overview</h3>
                        <p class="font-weight-bold">
                        <ul>
                            <li class="font-weight-normal text-justify ">The company continued to work at its regular pace. In 1972, the P250 Urraco, the 400 GT Jarama, the 400 GT Espada .</li>
                            <li class="font-weight-normal text-justify">In 1972, the Urraco, which had experienced several initial slowdowns, was finally put into production. </li>
                        </ul>
                        </p>
                    </div>
                </div>
                <hr>

                {{--Bottom Row--}}

                {{--first column--}}
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="display-5">Car features</h3>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item "> <img class="img-thumbnail " src="{{url('/images/icons/car-top.svg')}}" alt="Image car top"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">4 Doors </p></li>

                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <img class="img-thumbnail " src="{{url('/images/icons/person.png')}}" alt="Image person"/> </li>
                            <li class="list-inline-item"> <p class="font-weight-bold">Up to 7 passenger</p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"> <img class="img-thumbnail " src="{{url('/images/icons/gearshift.svg')}}" alt="Image gear"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">Auto transmission</p></li>
                        </ul>
                    </div>


                    {{--2nd column--}}
                    <div class="col-md-4">
                        <h3 class="display-5">Car extras</h3>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item"><img class="img-thumbnail " src="{{url('/images/icons/bikeRack.png')}}" alt="Image bike rack"/></li>
                            <li class="list-inline-item">   <p class="font-weight-bold">Bike Rack </p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item "> <img class="img-thumbnail " src="{{url('/images/icons/gpsCar.svg')}}" alt="Image car top"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">GPS system </p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item "> <img class="img-thumbnail " src="{{url('/images/icons/baby.png')}}" alt="Image car top"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">Child seat </p></li>
                        </ul>
                        <ul class="list-inline infoCar">
                            <li class="list-inline-item "> <img class="img-thumbnail " src="{{url('/images/icons/wheelchair.png')}}" alt="Image car top"/></li>
                            <li class="list-inline-item"> <p class="font-weight-bold">Wheelchair accessible </p></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <h3 class="display-5">Car type</h3>
                            <p class="font-weight-bold">Toyota</p>
                        </div>
                </div>
                {!! Form::open(['method' => 'POST', 'route' => 'confirm-booking', ]) !!}
                {{ Form::hidden('id', $car->id) }}
                <button type="submit" class="btn float-right btn-lg d-block" id="bookBtn">Confirm</button>
                {!! Form::close() !!}

        </div>
            {{--Slide images--}}
            <div class="col-md-4 col-sm-4 col-3" id="slide">
                <div class="row">
                    <div class="col-md-10" style="padding-right: 0px!important;">
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
                                    <img class="img-fluid d-block w-100" src="{{url('/images/honda1.jpg')}}" alt="First slide">
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
