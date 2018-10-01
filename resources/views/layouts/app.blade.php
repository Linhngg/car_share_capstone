<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    @yield('assets')

</head>
<body>
    <div id="app">
        <nav class="container-fluid">
            <div class="row my-nav">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="{{ url('/home') }}" >
                          <img class="img-fluid" src="{{url('/images/logofinal.png')}}" alt="Image logo"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    @if (Route::has('login'))
                        <div class="top-right links my-links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                                <div class="links my-links float-right align-middle">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Account  {{-- $user->name --}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('user') }}">My Bookings</a>
                                        <a class="dropdown-item" href="{{ route('user-bookings') }}">My Past Bookings</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
