<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TecnoBuy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body background="{{ asset('img/login.gif') }}">
    <div id="app">
        <nav
            class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-black shadow sm:items-baseline w-full">

            <div class="mb-2 sm:mb-0 flex flex-row">
                <div class="">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="branding__logo img-fluid" src="{{ asset('img/logo_ok.png') }}" width="75" alt="">
                    </a>
                </div>
            </div>

            <div class="sm:mb-0 self-center">
                <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                            class="text-md no-underline text-white hover:text-yellow-300 ml-2 px-1"><strong>{{ __('Iniciar Sesión') }}</strong></a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="text-md no-underline text-white hover:text-yellow-300 ml-2 px-1"><strong>{{ __('Registrarse') }}</strong></a>
                    @endif
                @else
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
