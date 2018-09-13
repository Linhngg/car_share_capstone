@extends('layouts.app')

@section('assets')
    <link href="{{ asset('css/return.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-hover rounded table-bordered table-responsive ">
                    <thead class="thead rounded">
                       <tr>
                            <th scope="col">Available car parks</th>
                            <th scope="col">Address</th>
                            <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody class="font-weight-bold">
                        <tr>
                            <td>Secure Parking - The Strand Car Park</td>
                            <td>323 Lonsdale St, Melbourne VIC 3000</td>
                            <td><button class="btn btns font-weight-bold">Select</button></td>
                        </tr>
                        <tr>
                            <td>Secure Parking - 330 Collins Street Car Park</td>
                            <td>330 Collins St, Melbourne VIC 3000</td>
                            <td><button class="btn btns font-weight-bold">Select</button></td>
                        </tr>
                        <tr>
                            <td>Wilson Parking</td>
                            <td>189 Flinders Ln, Melbourne VIC 3000</td>
                            <td><button class="btn btns font-weight-bold">Select</button></td>
                        </tr>
                        <tr>
                            <td>Wilson Parking - Melbourne Central</td>
                            <td>300 Lonsdale St, Melbourne VIC 3000</td>
                            <td><button class="btn btns font-weight-bold ">Select</button></td>
                        </tr>
                        <tr>
                            <td>Secure Parking - Southern Cross Car Park</td>
                            <td>Southern Cross Tower, 121 Exhibition St, Melbourne VIC 3000</td>
                            <td><button class="btn btns font-weight-bold">Select</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 map">
                    <iframe src="https://maps.google.com/maps?q=Parking%20Garage%20%C2%B7%20The%20Strand%20Melbourne%20323%20Lonsdale%20St+(Secure%20Parking%20-%20The%20Strand%20Car%20Park)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <br/>
            </div>
        </div>

    </div>
@endsection