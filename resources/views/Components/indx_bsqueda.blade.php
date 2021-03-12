<div class="sm:block hidden">
    <nav class="font-sans text-center content-center py-2 md:px-6 lg:px-10 sm:px-4 bg-black">
        <div class="grid grid-cols-12">
            <div class="md:col-span-2">
                <a class="navbar-brand lg:w-1/2 lg:mx-auto" href="{{ url('/') }}">
                    <img class="branding__logo img-fluid" src="{{ asset('img/logo.png') }}" max-width="95px" alt="">
                </a>
            </div>
            <div class="md:col-span-4 lg:col-span-5">
                <form action="{{ route('search') }}" method="GET">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="">
                            <div class="container  items-center px-4 sm:px-6 lg:px-8">
                                <div class="relative"> <input type="text"
                                        class="h-14 w-96 pr-8 pl-5 rounded z-0 focus:shadow focus:outline-none"
                                        placeholder="Buscar Cualquier cosa..." name="search">
                                    <div class="absolute top-2 right-3 ">
                                        <button type="submit"
                                            class="border-gray-50 rounded-sm hover:text-gray-500 hover:border-gray-500 border-2 lg:px-4 lg:py-2 ">
                                            <i class="fa fa-search text-gray-50 z-20 "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="relative mt-1">
                          <input type="text" id="password" class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-500 transition-colors" placeholder="Search...">
                          <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors"><i class="mdi mdi-magnify"></i></button>
                      </div> --}}
                            {{-- <label class="block">
                          <span class="text-gray-700">Email address</span>
                          <input type="email"
                            class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                            placeholder="john@example.com">
                        </label> --}}
                        </div>
                    </div>
                </form>

            </div>
            <div class="md:col-span-4 lg:col-span-5 lg:mx-auto">
                <span class="text-base text-gray-50 inline-block relative font-bold py-3">
                    <i class="lg:text-3xl md:text-2xl px-0 border-l-2 lg:px-6 border-white fas fa-envelope"></i>
                    <i class="lg:text-3xl md:text-2xl px-0 border-l-2 lg:px-6 border-white fas fa-user"></i>
                    <i class="lg:text-3xl md:text-2xl px-0 border-l-2 lg:px-6 border-white fab fas fa-heart"></i>
                    <i class="lg:text-3xl md:text-2xl px-0 border-l-2 lg:px-6 border-white fas fa-shopping-cart"></i>
                    <i class="lg:text-3xl md:text-2xl px-0 border-l-2  border-r-2 lg:px-6 border-white fas fa-users"></i>
                </span>
            </div>

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