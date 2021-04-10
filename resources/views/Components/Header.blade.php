<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<div class="sm:block hidden" x-data="{ searchy : true}">
    <nav
        class="font-sans grid  text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-black shadow sm:items-baseline w-full">
        <div class="grid grid-cols-12 md:grip-cols-10 lg:py-2 ">
            <div class="md:col-span-2 col-span-2 xl:col-span-2 2xl:col-span-2  lg:col-span-2  ">
                <a class="navbar-brand lg:w-1/3 lg:mx-auto md:w-5/6" href=" {{ __('/') }}">
                    <img class="branding__logo img-fluid" src=" {{asset('/img/logo.png')}}" max-width="95px" alt="">
                </a>
            </div>
            <div
                class="md:col-span-5 lg:col-span-6 sm:col-span-7 xl:col-span-6 col-span-6 2xl:col-span-6 md:-ml-10  xl:-ml-36  2xl:-ml-36 sm:hidden md:block">
                <form action="{{route('search')}}" method="GET">
                    <div class="grid grid-cols-1 gap-6 md:gap-0">

                        <div id="search-container"
                            class="hidden pt-3 md:pt-0 sm:block w-full md:w-full max-w-md mx-auto md:ml-auto order-3">
                            <div class="relative max-w-3xl mx-auto px-6">
                                <div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
                                    <svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                        </path>
                                    </svg>
                                </div>
                                <input id="search-toggle" type="search" name="search"
                                    placeholder="Encuentra lo que necesites"
                                    class="block w-full bg-brand-white focus:outline-none focus:bg-white focus:shadow text-gray-700 font-bold rounded-lg pl-12 pr-4 py-3">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-span-1 md:-ml-10  xl:-ml-36 2xl:-ml-36 block md:hidden">
                <div class="  p-4 lg:p-6 col-span-1 mx-auto">
                    <button type="button" @click="searchy = !searchy"
                        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                        aria-label="toggle menu">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

            <div
                class="md:col-span-4 lg:col-span-4  sm:col-span-6 col-span-3 col-start-9 sm:col-start-5 xl:col-span-3 2xl:col-span-3  md:col-start-9  2xl:col-start-9 xl:col-start-9  lg:col-start-9  grid grid-cols-2 md:-ml-16 lg:-ml-36">
                <div class="col-span-2">

                    {{-- <div class="md:col-span-2 lg:col-span-2 inline-block relative sm:col-span-2  xl:col-span-2">
                        <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
                        <a href="{{route('search')}}"
                    class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md
                    bg-black text-white hover:text-yellow-300 "
                    style="border-color: #F8AF22"><i class="fas fa-sign-in-alt"></i>&nbsp;<strong>Iniciar
                        Sesión</strong></a>
                    <a href="http://localhost:8000/register"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"><strong>Registrarse</strong></a>

                    <a href="{{route('carrito')}}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2   rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"> <i
                            class="lg:text-base sm:text-xl xl:text-2xl md:text-xl px-0  lg:px-6 md:px-2  sm:px-1 fas fa-shopping-cart"></i></a>
                </div> --}}

                {{-- guest --}}
                <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
                @guest
                <div class="md:col-span-2 lg:col-span-2 inline-block relative sm:col-span-2  xl:col-span-2">
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"><strong>{{ __('Iniciar Sesión') }}</strong></a>
                    @endif
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"><strong>{{ __('Registrarse') }}</strong></a>


                    <a href="{{ route('seguimiento') }}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"><strong>{{ __('Seguimiento') }}</strong></a>

                    <a href="{{route('carrito')}}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2   rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"> <i
                            class="lg:text-base sm:text-xl xl:text-2xl md:text-xl px-0  lg:px-6 md:px-2  sm:px-1 fas fa-shopping-cart"></i></a>

                </div>
                @endif
                {{-- logdein --}}
                @else
                <div class="md:col-span-2 lg:col-span-2 inline-block relative sm:col-span-2  xl:col-span-2">
                    <a id="navbarDropdown"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22" href="{{ route('perfiles') }}">
                        <strong>Mi Perfil</strong>
                    </a>
                    <a class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                        <strong>Cerrar sesión</strong>
                    </a>
                    <a href="{{ route('seguimiento') }}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"><strong>{{ __('Seguimiento') }}</strong></a>
                    <a href="{{route('carrito')}}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2   rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"> <i
                            class="lg:text-base sm:text-xl xl:text-2xl md:text-xl px-0  lg:px-6 md:px-2  sm:px-1 fas fa-shopping-cart"></i></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
                @endguest

                {{-- end --}}
            </div>
        </div>

</div>
</nav>
<div class="relative w-full bg-white shadow-xl  md:hidden" :class="{' hidden': searchy, 'block': !searchy}"
    id="search-content">
    <div class="container mx-auto py-4 text-black">
        <form action="{{route('search')}}" method="GET">

            <input id="searchfield" type="search" name="search" placeholder="Search..." autofocus="autofocus"
                class="w-5/6 text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">
            <button type="button" @click="searchy =  !searchy"
                class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                aria-label="toggle menu">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </form>
    </div>
</div>
</div>
<style>
    @media screen and (min-width: 0px) and (max-width: 650px) {
        .no_mostrar {
            display: none !important;
        }

        /* show it on small screens */
    }
</style>
<div class="block sm:hidden" x-data="{ searchy : true}">
    <nav
        class="font-sans grid  text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-black shadow sm:items-baseline w-full">
        <div class="grid grid-cols-12 md:grip-cols-10 grip-cols-12 lg:py-2 ">
            <div class="md:col-span-2 col-span-2">
                <a class="navbar-brand lg:w-1/3 lg:mx-auto md:w-5/6" href=" {{ __('/') }}">
                    <img class="branding__logo img-fluid" src=" {{asset('/img/logo.png')}}" max-width="95px" alt="">
                </a>
            </div>

            <div class="md:col-span-8  sm:col-span-8 col-span-10 grid grid-cols-12 md:-ml-16">
                <div class="md:col-span-3 col-span-2 md:-ml-10 block md:hidden">
                    <div class="  p-4 lg:p-6 col-span-1 mx-auto">
                        <button type="button" @click="searchy = !searchy"
                            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                            aria-label="toggle menu">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-span-10">

                    {{-- <div class="md:col-span-2 lg:col-span-2 inline-block relative sm:col-span-2  xl:col-span-2">
                        <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
                        <a href="{{route('search')}}"
                    class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md
                    bg-black text-white hover:text-yellow-300 "
                    style="border-color: #F8AF22"><i class="fas fa-sign-in-alt"></i>&nbsp;<strong>Iniciar
                        Sesión</strong></a>
                    <a href="http://localhost:8000/register"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"><strong>Registrarse</strong></a>

                    <a href="{{route('carrito')}}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2   rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"> <i
                            class="lg:text-base sm:text-xl xl:text-2xl md:text-xl px-0  lg:px-6 md:px-2  sm:px-1 fas fa-shopping-cart"></i></a>
                </div> --}}

                {{-- guest --}}
                <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
                @guest
                <div class="md:col-span-2 lg:col-span-2 inline-block relative sm:col-span-2  xl:col-span-2">
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"><strong>{{ __('Iniciar Sesión') }}</strong></a>
                    @endif
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"><strong>{{ __('Registrarse') }}</strong></a>

                    <a href="{{route('carrito')}}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2   rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"> <i
                            class="lg:text-base sm:text-xl xl:text-2xl md:text-xl px-0  lg:px-6 md:px-2  sm:px-1 fas fa-shopping-cart"></i></a>
                </div>
                @endif
                {{-- logdein --}}
                @else
                <div class="md:col-span-2 lg:col-span-2 inline-block relative sm:col-span-2  xl:col-span-2">
                    <a id="navbarDropdown"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22" href="{{ route('perfiles') }}">
                        Mi Perfil
                    </a>
                    <a class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>



                    <a href="{{route('carrito')}}"
                        class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                        style="border-color: #F8AF22"><i class="fas fa-shopping-cart"></i></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endguest

                {{-- end --}}


            </div>
        </div>

</div>
</nav>
<div class="relative w-full bg-white shadow-xl  md:hidden" :class="{' hidden': searchy, 'block': !searchy}"
    id="search-content">
    <div class="container mx-auto py-4 text-black">
        <form action="{{route('search')}}" method="GET">

            <input id="searchfield" type="search" name="search" placeholder="Search..." autofocus="autofocus"
                class="w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">

        </form>
    </div>

</div>
</div>