@extends('layouts.auth')

@section('assets')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">{{ __('Register') }}</div>--}}

                    {{--<div class="card-body">--}}
                        {{--<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">--}}
                            {{--@csrf--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="text"--}}
                                           {{--class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"--}}
                                           {{--name="name" value="{{ old('name') }}" required autofocus>--}}

                                    {{--@if ($errors->has('name'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="email"--}}
                                       {{--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email"--}}
                                           {{--class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"--}}
                                           {{--name="email" value="{{ old('email') }}" required>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="password"--}}
                                       {{--class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password"--}}
                                           {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
                                           {{--name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="password-confirm"--}}
                                       {{--class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control"--}}
                                           {{--name="password_confirmation" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row mb-0">--}}
                                {{--<div class="col-md-6 offset-md-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--{{ __('Register') }}--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

  {{--  <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="formBox col-md-4">
                            <div class="card-head">{{ __('Sign up') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                    @csrf

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                   <img src="{{url('/images/user.png')}}" alt="Image User"/>
                                                </span>
                                            </div>
                                            <input id="name" type="text" placeholder="Name"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                       <img src="{{url('/images/mail.png')}}" alt="Image Envelope"/>
                                    </span>
                                            </div>
                                            <input id="email" type="email" placeholder="Email Address"
                                                   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="email" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                       <img src="{{url('/images/closed-lock.png')}}" alt="Image password"/>
                                    </span>
                                            </div>
                                            <input id="password" type="password" placeholder="Password "
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                       <img src="{{url('/images/closed-lock.png')}}" alt="Image password"/>
                                    </span>
                                            </div>
                                            <input id=password-confirm" type="password" placeholder="Repeat password "
                                                   class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn-dark form-control">
                                        {{ __('REGISTER') }}
                                    </button>
                                    <label class=" col-form-label text-md-right">{{ __('Already have account?') }}</label>
                                    <a href="{{ route('login') }}">Login</a>
                                </form>
                            </div>

                        </div>
                        <div  class="card-img col-md-8">
                            <img class="pic" src="{{url('/images/car1.png')}}" alt="Image Car"/>
                            --}}{{--                        <img class="logo" src="{{url('/images/logo.png')}}" alt="Image logo"/>--}}{{--
                            <span> WELCOME</span>
                        </div>
                    </div>
            </div>
        </div>
    </div>
--}}
    <div class="d-flex justify-content-center"> <img class="logo" src="{{url('/images/logo1.png')}}" alt="Image logo"/></div>
    <div class="cont container-fluid">

        <div class="form sign-in">
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <h2>Time to feel like home,</h2>
                <label>
                    <span class="font-primary font-weight-normal">Name</span>
                    <input id="name" type="text" class=" border-top-0 border-right-0 border-left-0 form-text form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </label>
                <label>
                    <span class="font-weight-normal font-primary">Email</span>
                    <input type ="email" class=" border-top-0 border-right-0 border-left-0 form-text form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}" name="email" required autofocus>
                    @if ($errors->has('Email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('regEmail') }}</strong>
                        </span>
                    @endif
                </label>

                <label>
                    <span class="font-weight-normal font-primary">Password</span>
                    <input  type="password" class=" border-top-0 border-right-0 border-left-0 form-text form-control{{ $errors->has('Password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('Password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Password') }}</strong>
                        </span>
                    @endif
                </label>

                <label>
                    <span class="font-weight-normal font-primary">Confirm password</span>
                    <input id="password-confirm" type="password" class="border-top-0 border-right-0 border-left-0 form-control form-text" name="password_confirmation" required>
                </label>
                <button type="submit" class="submit btn-dark">Sign Up</button>
            </form>
        </div>

        <div class="sub-cont">
            <div class="img">
                <div class="img__text  m--up">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img__btn BtnSign"  onclick="location.href='{{ route('login') }}';">
                    <span class="m--up">Sign in</span>

                </div>
            </div>
        </div>

    </div>
@endsection