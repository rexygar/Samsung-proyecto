<div class="sm:block hidden">
    <nav
        class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-black shadow sm:items-baseline w-full">

        <div class="mb-2 sm:mb-0 flex flex-row">
            <div class="">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="branding__logo img-fluid" src="{{ asset('img/logo.png') }}" width="95" alt="">
                </a>
            </div>
        </div>

        <div class="sm:mb-0 self-center">
            <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
            @guest
            @if (Route::has('login'))
            <a href="{{ route('login') }}"
                class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22"><strong>{{ __('Iniciar Sesión') }}</strong></a>
            @endif
            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22"><strong>{{ __('Registrarse') }}</strong></a>
            @endif
            @else
            <a id="navbarDropdown"
                class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22" href="{{ route('perfiles') }}">
                {{ Auth::user()->name }}
            </a>
            <a class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <a href="{{ route('carrito') }}"
                class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22"><i class="fas fa-shopping-cart"></i></a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endguest
        </div>
    </nav>
</div>

<div class="sm:hidden">
    <nav
        class="font-sans text-center content-center sm:flex-row sm:text-left sm:justify-between auto-rows-auto py-2 px-2 bg-black shadow sm:items-baseline w-full grid grid-cols-6 md:grid md:grid-cols-12">

        <div class="mb-2 sm:mb-0 md:col-span-4 block col-span-3 col-start-1 row-span-2  w-1/">
            <div class="">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="branding__logo img-fluid" src="{{ asset('img/logo.png') }}" max-width="95px" alt="">
                </a>
            </div>
        </div>

        <div class="sm:mb-0 self-center grid col-span-3 md:col-start-8  row-span-2 md:col-span-4  w-1/2 ">
            <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
            @guest
            @if (Route::has('login'))
            <a href="{{ route('login') }}"
                class="sm:text-md text-sm no-underline inline-block px-2 py-2 col-span-3 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22"><strong>{{ __('Iniciar Sesión') }}</strong></a>
            @endif
            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="sm:text-md text-sm no-underline inline-block px-2 py-2 col-span-3 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22"><strong>{{ __('Registrarse') }}</strong></a>
            @endif
            @else
            <a id="navbarDropdown"
                class="sm:text-md text-sm no-underline inline-block px-2 py-2 col-span-3 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22" href="{{ route('perfiles') }}">
                {{ Auth::user()->name }}
            </a>
            <a class="sm:text-md text-sm no-underline inline-block px-2 py-2 col-span-3 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <a href="{{ route('carrito') }}"
                class="sm:text-md text-sm no-underline inline-block px-2 py-2 col-span-3 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
                style="border-color: #F8AF22"><i class="fas fa-shopping-cart"></i></a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endguest
        </div>
    </nav>
</div>