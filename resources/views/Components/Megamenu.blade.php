
<nav class="relative bg-blue-500 border-b-2 border-gray-300 text-gray-900 " style="z-index: 999">
    <div class="container mx-auto flex justify-between">
      <div class="relative block p-4 lg:p-6 text-xl text-white font-bold">Categorias</div>
      <ul class="flex">
            <!--Hoverable Link-->
            <li class="hoverable hover:bg-blue-500 hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-blue-600 hover:text-white">TELEFONOS</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-600">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SMARTPHONES') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">SMARTPHONE</a>
                          <ul class="col-span-2 px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li class="subsub grid grid-cols-2">
                                <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">FLAGSHIP</a>
                                <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                  <li>
                                    <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP/GALAXY Z') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Galaxy Z</a>
                                  </li>
                                  <li>
                                    <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP/Galaxy S') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Galaxy S</a>
                                  </li>
                                  <li>
                                    <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP/Galaxy NOTE') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Galaxy Note</a>
                                  </li>
                              </ul>
                              </li>
                              <li class="subsub grid grid-cols-2">
                                <a href="{{ url('Categoria/SMARTPHONES/NORMAL') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">NORMAL</a>
                                <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                  <li>
                                    <a href="{{ url('Categoria/SMARTPHONES/NORMAL/GALAXY A') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Galaxy A</a>
                                  </li>
                              </ul>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-blue-600 hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-blue-600 hover:text-white">TABLETS</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-600">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/TABLETS/TAB') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">TAB</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/TABLETS/TAB/GALAXY TAB A') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Galaxy Tab A</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/TABLETS/TAB/GALAXY TAB S') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Galaxy Tab S</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-blue-600 hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-blue-600 hover:text-white">WEARABLES</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-600">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/EARABLES') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">EARABLES</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/EARABLES/BUD') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">BUD</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SMARTWATCH') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">SMARTWATCH</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/SMARTWATCH/Watch') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Watch</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SPORTBAND') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">SPORTBAND</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/SPORTBAND/Fit') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Fit</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-blue-600 hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-blue-600 hover:text-white">ACCESORIOS</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-600">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/AUDIFONOS') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">AUDIFONOS </a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/AUDIFONOS/On ear') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">On ear</a>
                              </li>
                              <li>
                                  <a href="{{ url('Categoria/AUDIFONOS/In ear') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">in ear</a>
                                </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/PARLANTES') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">PARLANTES</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/PARLANTES/Mini') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Mini</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PARLANTES/Bar') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Bar</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PARLANTES/Outdoor') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Outdoor</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/CABLES') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">CABLES</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/CABLES/Tipo C') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Tipo C</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CABLES/3IN1') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">3IN1</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CABLES/2IN1') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">2IN1</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CABLES/HUB') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">HUB</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/CASES') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">CASES</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/CASES/NOTE 20') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">NOTE 20</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CASES/S20') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">S20</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CASES/TAB') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">TAB</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/CHARGER') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">CHARGER</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/CHARGER/CAR') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">CAR</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CHARGER/WIRELESS') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">WIRELESS</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CHARGER/WALL') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">WALL</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/PEN') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">PEN</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/PEN/NOTE') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">NOTE</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PEN/TAB') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">TAB</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/POWERBANK') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">POWERBANK</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/POWERBANK/WIRELESS') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">WIRELESS</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/POWERBANK/WIRED') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">WIRED</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/PROTECTION') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">PROTECTION</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/PROTECTION/GLASS COVER') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">GLASS COVER</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PROTECTION/SANITIZER') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">SANITIZER</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SELFIE STICK') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">SELFIE STICK</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/SELFIE STICK/SELFIE STICK') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">SELFIE STICK</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SOPORTE') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">SOPORTE</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/SOPORTE/CAR') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">CAR</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/SOPORTE/MOTORCYCLE') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">MOTORCYCLE</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-blue-600 hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-blue-600 hover:text-white">COMPUTADORES</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-600">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/DESKTOP') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">DESKTOP</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/DESKTOP/ALL IN ONE') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">ALL IN ONE</a>
                              </li>
                              <li>
                                  <a href="{{ url('Categoria/DESKTOP/DESKTOP') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">DESKTOP</a>
                                </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/PORTABLES') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">PORTABLES</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/PORTABLES/GAMING') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">GAMING</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PORTABLES/ULTRABOOK') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">ULTRABOOK</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/MONITORES') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">MONITORES</a>
                          <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/MONITORES/GAMING') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">GAMING</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/MONITORES/OFFICE') }}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">OFFICE</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-blue-600 hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-blue-600 hover:text-white">CONSOLAS Y JUEGOS</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-600">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/CONSOLAS') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">CONSOLAS</a>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/JUEGOS') }}" class="block-inline p-3 hover:bg-blue-600 text-gray-300 hover:text-white">JUEGOS</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            
            <!-- ## Hoverable Link Template ##
        
            <li class="hoverable hover:bg-blue-600 hover:text-white"><a href="#" class="relative block">x</a><div class="mega-menu">
              Add your mega menu content
              </div></li>
            
            -->
          </ul>
        </div>
      </nav>