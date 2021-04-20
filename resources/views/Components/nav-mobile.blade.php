<nav class="relative border-gray-300 text-gray-900 block md:hidden" style="z-index: 999; background-color: #F5DF4D"
  x-data="{ isOpen : true}">
  <div class="container mx-auto  flex flex-wrap justify-between grid grid-cols-2">
    <div class="md:relative   p-4 lg:p-6 text-xl text-white font-bold col-span-1">MENU</div>
    <div @click="isOpen = !isOpen" :class="{' block': isOpen, 'hidden': !isOpen}"
      class="  p-4 lg:p-6 col-span-1 mx-auto">
      <button type="button"
        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
        aria-label="toggle menu">
        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
          <path fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
          </path>
        </svg>
      </button>
    </div>
    <div @click="isOpen = !isOpen" :class="{' hidden': isOpen, 'block': !isOpen}"
      class="  p-4 lg:p-6 col-span-1 mx-auto">
      <button type="button"
        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
        aria-label="toggle menu">
        <i class="fas fa-times text-2xl"></i>
      </button>
    </div>

    @guest
    <div class="col-span-2 grid-cols-6" :class="{' hidden': isOpen, 'grid': !isOpen}">
      <div></div>
      <div class="col-span-5">
        <p>Ingresa a tu cuenta para ver tus compras, favoritos, etc.</p>
      </div>
      <div class="col-span-6 grid-cols-6 grid">
        <div></div>
        <div class="col-span-2">
          <a href="{{ route('login') }}"
            class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
            style="border-color: #F5DF4D"><strong>{{ __('Iniciar Sesión') }}</strong></a></div>
        <div class="col-span-2"><a href="{{ route('register') }}"
            class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
            style="border-color: #F5DF4D"><strong>{{ __('Registrarse') }}</strong></a></div>
        <div></div>
      </div>
    </div>
    @else
    <div class="col-span-2 grid-cols-6" :class="{' hidden': isOpen, 'grid': !isOpen}">
      <div></div>
      <div class="col-span-5">
        <p>Ingresa a tu cuenta para ver tus compras, favoritos, etc.</p>
      </div>
      <div class="col-span-6 grid-cols-6 grid">
        <div></div>
        <div class="col-span-2">
          <a id="navbarDropdown"
            class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
            style="border-color: #F5DF4D" href="{{ route('perfiles') }}">
            <strong>Mi Perfil</strong>
          </a>
        </div>
        <div class="col-span-2">

          <a class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
            style="border-color: #F5DF4D" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
            <strong>Cerrar sesión</strong>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
        <div></div>
      </div>
    </div>
    @endif
    <div :class="{' hidden': isOpen, 'block': !isOpen}"
      class="col-span-2 grid grid-cols-2 md:relative   p-6 lg:p-6 text-xl text-white font-bold ">Categorias


      <ul class="col-span-2">
        <!--Hoverable Link-->
        <li class="block text-white" x-data="{ isTELEFONOS : true}">
          <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
            hover:bg-black hover:text-white" @click="isTELEFONOS = !isTELEFONOS">TELEFONOS</a>
          <div :class="{' hidden': isTELEFONOS, 'block': !isTELEFONOS}" role="toggle"
            class="sm:mb-0 shadow-xl bg-black">
            <div class="container w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full py-2 lg:pt-3">
                <li class=" grid grid-cols-2" x-data="{ isSMARTPHONE : true}">
                  <a href="{{ url('Categoria/TELEFONOS/SMARTPHONES') }}"
                    class="col-span-1 block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide"
                    style="height: auto;background-repeat:no-repeat;">SMARTPHONE</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isSMARTPHONE = !isSMARTPHONE">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>

                  <ul :class="{' hidden': isSMARTPHONE, 'block': !isSMARTPHONE}" class="col-span-2 block">
                    <li class="grid grid-cols-2 block">
                      <a href="{{ url('Categoria/TELEFONOS/SMARTPHONES/FLAGSHIP') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-2">FLAGSHIP</a>
                      <ul class="px-4 w-full py-2 lg:pt-3">
                        <li>
                          <a href="{{ url('Categoria/TELEFONOS/SMARTPHONES/FLAGSHIP/GALAXY Z') }}"
                            class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Galaxy
                            Z</a>
                        </li>
                        <li>
                          <a href="{{ url('Categoria/TELEFONOS/SMARTPHONES/FLAGSHIP/Galaxy S') }}"
                            class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Galaxy
                            S</a>
                        </li>
                        <li>
                          <a href="{{ url('Categoria/TELEFONOS/SMARTPHONES/FLAGSHIP/Galaxy NOTE') }}"
                            class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Galaxy
                            Note</a>
                        </li>
                      </ul>
                    </li>
                    <li class="grid grid-cols-2">
                      <a href="{{ url('Categoria/TELEFONOS/SMARTPHONES/NORMAL') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-2">NORMAL</a>
                      <ul class="px-4 w-full py-2 lg:pt-3">
                        <li>
                          <a href="{{ url('Categoria/TELEFONOS/SMARTPHONES/NORMAL/GALAXY A') }}"
                            class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Galaxy
                            A</a>
                        </li>
                      </ul>
                    </li>
                  </ul>

                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="block text-white" x-data="{ isTABLETS : true}">
          <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm font-bold 
            hover:bg-black hover:text-white" @click="isTABLETS = !isTABLETS">TABLETS</a>
          <div :class="{' hidden': isTABLETS, 'block': !isTABLETS}" role="toggle" class="sm:mb-0 shadow-xl bg-black">
            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full py-2 lg:pt-3">
                <li class=" grid grid-cols-2">
                  <a href="{{ url('Categoria/TABLETS/TAB') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">TAB</a>
                  <ul class="px-4 w-full py-2 lg:pt-3">
                    <li>
                      <a href="{{ url('Categoria/TABLETS/TAB/GALAXY TAB A') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Galaxy
                        Tab A</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/TABLETS/TAB/GALAXY TAB S') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Galaxy
                        Tab S</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="block text-white" x-data="{ isWEARABLES : true}">
          <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
            hover:bg-black hover:text-white" @click="isWEARABLES = !isWEARABLES">WEARABLES</a>
          <div :class="{' hidden': isWEARABLES, 'block': !isWEARABLES}" role="toggle"
            class="sm:mb-0 shadow-xl bg-black">
            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full py-2 lg:pt-3" :class="{' hidden': isWEARABLES, 'block': !isWEARABLES}">
                <li class=" grid grid-cols-2" x-data="{ isEARABLES : true}">
                  <a href="{{ url('Categoria/WEARABLES/EARABLES') }}"
                    class="col-span-1 block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide"
                    style="height: auto;background-repeat:no-repeat;">EARABLES</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isEARABLES = !isEARABLES">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>

                  <ul :class="{' hidden': isEARABLES, 'block': !isEARABLES}" class="col-span-2 block">
                    <li>
                      <a href="{{ url('Categoria/WEARABLES/EARABLES/BUD') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">BUD</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isSMARTWATCH : true}">
                  <a href="{{ url('Categoria/WEARABLES/SMARTWATCH') }}"
                    class="col-span-1 block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide"
                    style="height: auto;background-repeat:no-repeat;">SMARTWATCH</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isSMARTWATCH = !isSMARTWATCH">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>

                  <ul :class="{' hidden': isSMARTWATCH, 'block': !isSMARTWATCH}" class="col-span-2 block">
                    <li x-data="{ isSMARTWATCH : true}">
                      <a href="{{ url('Categoria/WEARABLES/SMARTWATCH/Watch') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Watch</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isSPORTBAND : true}">
                  <a href="{{ url('Categoria/WEARABLES/SPORTBAND') }}"
                    class="col-span-1 block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide"
                    style="height: auto;background-repeat:no-repeat;">SPORTBAND</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isSPORTBAND = !isSPORTBAND">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>

                  <ul :class="{' hidden': isSPORTBAND, 'block': !isSPORTBAND}" class="col-span-2 block">
                    <li class=" grid grid-cols-2">
                      <a href="{{ url('Categoria/WEARABLES/SPORTBAND/Fit') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Fit</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="block text-white" x-data="{ isACCESORIOS : true}">
          <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
            hover:bg-black hover:text-white" @click="isACCESORIOS = !isACCESORIOS">ACCESORIOS</a>
          <div :class="{' hidden': isACCESORIOS, 'block': !isACCESORIOS}" role="toggle"
            class="p-6  sm:mb-0 shadow-xl bg-black">
            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full py-2 lg:pt-3">
                <li class=" grid grid-cols-2" x-data="{ isAUDIFONOS : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/AUDIFONOS') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">AUDIFONOS
                  </a>
                  <div class="  p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 px-10 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isAUDIFONOS = !isAUDIFONOS">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isAUDIFONOS, 'block': !isAUDIFONOS}" class="px-4 w-full py-2 lg:pt-3">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/AUDIFONOS/On ear') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">On
                        ear</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/AUDIFONOS/In ear') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">in
                        ear</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isPARLANTES : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/PARLANTES') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">PARLANTES</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isPARLANTES = !isPARLANTES">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isPARLANTES, 'block': !isPARLANTES}" class="px-4 w-full py-2 lg:pt-3">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/PARLANTES/Mini') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Mini</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/PARLANTES/Bar') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Bar</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/PARLANTES/Outdoor') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Outdoor</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isCABLES : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/CABLES') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">CABLES</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isCABLES = !isCABLES">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isCABLES, 'block': !isCABLES}" class="px-4 w-full py-2 lg:pt-3">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CABLES/Tipo C') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">Tipo
                        C</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CABLES/3IN1') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">3IN1</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CABLES/2IN1') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">2IN1</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CABLES/HUB') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">HUB</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isCASES : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/CASES') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">CASES</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isCASES = !isCASES">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isCASES, 'block': !isCASES}" class="px-4 w-full py-2 lg:pt-3">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CASES/NOTE 20') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">NOTE
                        20</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CASES/S20') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">S20</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CASES/TAB') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">TAB</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isCHARGER : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/CHARGER') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">CHARGER</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isCHARGER = !isCHARGER">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isCHARGER, 'block': !isCHARGER}" class="col-span-2 block">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CHARGER/CAR') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">CAR</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CHARGER/WIRELESS') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">WIRELESS</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/CHARGER/WALL') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">WALL</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isPEN : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/PEN') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">PEN</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isPEN = !isPEN">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isPEN, 'block': !isPEN}" class="col-span-2 block">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/PEN/NOTE') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">NOTE</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/PEN/TAB') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">TAB</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isPOWERBANK : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/POWERBANK') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">POWERBANK</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isPOWERBANK = !isPOWERBANK">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isPOWERBANK, 'block': !isPOWERBANK}" class="col-span-2 block">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/POWERBANK/WIRELESS') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">WIRELESS</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/POWERBANK/WIRED') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">WIRED</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isPROTECTION : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/PROTECTION') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">PROTECTION</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isPROTECTION = !isPROTECTION">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isPROTECTION, 'block': !isPROTECTION}" class="col-span-2 block">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/PROTECTION/GLASS COVER') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">GLASS
                        COVER</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/PROTECTION/SANITIZER') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">SANITIZER</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isSELFIE : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/SELFIE STICK') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">SELFIE
                    STICK
                  </a>
                  <div class="p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isSELFIE = !isSELFIE">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isSELFIE, 'block': !isSELFIE}" class="col-span-2 block">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/SELFIE STICK/SELFIE STICK') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">SELFIE
                        STICK</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isSOPORTE : true}">
                  <a href="{{ url('Categoria/ACCESORIOS/SOPORTE') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">SOPORTE</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isSOPORTE = !isSOPORTE">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isSOPORTE, 'block': !isSOPORTE}" class="col-span-2 block">
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/SOPORTE/CAR') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">CAR</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/ACCESORIOS/SOPORTE/MOTORCYCLE') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">MOTORCYCLE</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="block text-white" x-data="{ isCOMPUTADORES : true}">
          <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
            hover:bg-black hover:text-white" @click="isCOMPUTADORES = !isCOMPUTADORES">COMPUTADORES</a>
          <div :class="{' hidden': isCOMPUTADORES, 'block': !isCOMPUTADORES}" role="toggle"
            class="sm:mb-0 shadow-xl bg-black">
            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full py-2 lg:pt-3" :class="{' hidden': isCOMPUTADORES, 'block': !isCOMPUTADORES}">
                <li class=" grid grid-cols-2" x-data="{ isDESKTOP : true}">
                  <a href="{{ url('Categoria/COMPUTADORES/DESKTOP') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">DESKTOP</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isDESKTOP = !isDESKTOP">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isDESKTOP, 'block': !isDESKTOP}" class="col-span-2 block">
                    <li>
                      <a href="{{ url('Categoria/COMPUTADORES/DESKTOP/ALL IN ONE') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">ALL IN
                        ONE</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/COMPUTADORES/DESKTOP/DESKTOP') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">DESKTOP</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isPORTABLES : true}">
                  <a href="{{ url('Categoria/COMPUTADORES/PORTABLES') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">PORTABLES</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isPORTABLES = !isPORTABLES">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isPORTABLES, 'block': !isPORTABLES}" class="col-span-2 block">
                    <li>
                      <a href="{{ url('Categoria/COMPUTADORES/PORTABLES/GAMING') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">GAMING</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/COMPUTADORES/PORTABLES/ULTRABOOK') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">ULTRABOOK</a>
                    </li>
                  </ul>
                </li>
                <li class=" grid grid-cols-2" x-data="{ isMONITORES : true}">
                  <a href="{{ url('Categoria/COMPUTADORES/MONITORES') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">MONITORES</a>
                  <div class="    p-4 lg:p-6 col-span-1 mx-auto border-l-2 border-white">
                    <button type="button"
                      class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                      aria-label="toggle menu" @click="isMONITORES = !isMONITORES">

                      <svg viewBox="0 0 10 5" class="w-6 h-6 fill-current">
                        <path d="M0,0 L4,2 0,4" />

                      </svg>
                    </button>
                  </div>
                  <ul :class="{' hidden': isMONITORES, 'block': !isMONITORES}" class="col-span-2 block">
                    <li class="col-span-2 block">
                      <a href="{{ url('Categoria/COMPUTADORES/MONITORES/GAMING') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">GAMING</a>
                    </li>
                    <li>
                      <a href="{{ url('Categoria/COMPUTADORES/MONITORES/OFFICE') }}"
                        class="block p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide">OFFICE</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="block text-white" x-data="{ isCONSOLAS : true}">
          <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
            hover:bg-black hover:text-white" @click="isCONSOLAS = !isCONSOLAS">CONSOLAS Y JUEGOS</a>
          <div :class="{' hidden': isCONSOLAS, 'block': !isCONSOLAS}" role="toggle" class="sm:mb-0 shadow-xl bg-black">
            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full py-2 lg:pt-3">
                <li class=" grid grid-cols-2" x-data="{ isSMARTPHONE : true}">
                  <a href="{{ url('Categoria/CONSOLAS Y JUEGOS/CONSOLAS') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">CONSOLAS</a>
                </li>
                <li class=" grid grid-cols-2">
                  <a href="{{ url('Categoria/CONSOLAS Y JUEGOS/JUEGOS') }}"
                    class="block-inline p-3 hover:bg-black text-white hover:text-white text-sm tracking-wide col-span-1">JUEGOS</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <!-- ## Hoverable Link Template ##
      
          <li class="block text-white" ><a href="#" class="relative block">x</a><div class="mega-menu">
            Add your mega menu content
            </div></li>
          
          -->
      </ul>
    </div>

  </div>
</nav>
<script src="{{ asset('js/alpine.js') }} "></script>