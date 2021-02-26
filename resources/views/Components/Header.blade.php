<div >
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
                      class="text-md no-underline text-white hover:text-yellow-300 ml-2 px-1"><strong>{{ __('Iniciar Sesión') }}</strong></a>
              @endif
              @if (Route::has('register'))
                  <a href="{{ route('register') }}"
                      class="text-md no-underline text-white hover:text-yellow-300 ml-2 px-1"><strong>{{ __('Registrarse') }}</strong></a>
              @endif
          @else
              <a id="navbarDropdown" class="text-md no-underline text-white hover:text-yellow-300 ml-2 px-1" href="{{ route('perfiles') }}">
                  {{ Auth::user()->name }}
              </a>
              <a class="text-md no-underline text-white hover:text-yellow-300 ml-2 px-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                <a href="{{ route('carrito') }}" class="text-md no-underline text-white hover:text-yellow-300 ml-2 px-1"><i class="fas fa-shopping-cart"></i></a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
          @endguest
      </div>
  </nav>
</div>