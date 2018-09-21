@extends('layouts.app')

@section('assets')
    {{--<link href="{{ asset('css/return.css') }}" rel="stylesheet">--}}
@endsection

@section('content')
    <div class="container-fluid">
        {{ $user->name }}<br>
        {{ $user->id }}<br>
        {{--{{ $currentBookin }}}--}}
    </div>
@endsection