<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}" type="text/css">

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Mens fashion') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                           

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/cart">Cart</a>
                            </li>
                            @endauth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ URL::to('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.slicknav.js') }}"></script>
    <script src="{{ URL::to('js/mixitup.min.js') }}"></script>
    <script src="{{ URL::to('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::to('js/main.js') }}"></script>
</body>
</html>
