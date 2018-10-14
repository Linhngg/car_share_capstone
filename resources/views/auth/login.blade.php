@extends('layouts.auth')

@section('assets')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
 {{--   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
 <!--Different LOGIN Design -->

    {{-- <div class="container-fluid">
         <div class="row justify-content-center">
             <div class="col-md-10 col-sm-12">
                 <div class="card">
                     <div class="row">
                         <div class="formBox col-md-4">
                             <div class="card-head">{{ __('MEMBERS LOGIN') }}</div>
                             <div class="card-body">
                                  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                     @csrf
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
                                         <button type="submit" class="btn-dark form-control">
                                             {{ __('LOGIN') }}
                                         </button>
                                     </div>
                                     <div class="form-group ">
                                         <a href="{{ route('register') }}">Forgot Password</a>
                                         &nbsp; &nbsp;
                                         <a href="{{ route('register') }}">Register</a>
                                     </div>
                                 </form>
                             </div>
                         </div>
                         <div class="card-img col-md-8">
                             <img class="pic" src="{{url('/images/car1.png')}}" alt="Image Car"/>
                             --}}{{--   <img class="logo" src="{{url('/images/logo.png')}}" alt="Image logo"/>--}}{{--
                             <span> WELCOME</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>--}}

    <!-- NEW LOGIN DESIGN--->
 <div class="d-flex justify-content-center"> <img class="logo" src="{{url('/images/logo1.png')}}" alt="Image logo"/></div>
    <div class="cont container-fluid">

        <div class="form sign-in">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <h2>Welcome back,</h2>
                <label>
                    <span class="font-weight-normal font-primary">Email</span>
                    <input id="email" type="email" class=" border-top-0 border-right-0 border-left-0 form-text form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </label>
                <label>
                    <span class="font-weight-normal font-primary">Password</span>
                    <input id="password" type="password"
                           class=" border-top-0 border-right-0 border-left-0 form-text form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                    @endif
                </label>

                <p class="forgot-pass"><a href="{{ route('register') }}">Forgot Password</a></p>
                <button type="submit" class="submit btn-dark"> {{ __('Sign In') }}</button>
            </form>
        </div>

        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h2>New here?</h2>
                    <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img__btn BtnSign"  onclick="location.href='{{ route('register') }}';">

                    <span class="m--up">Sign up</span>

                </div>
            </div>

        </div>
    </div>

@endsection