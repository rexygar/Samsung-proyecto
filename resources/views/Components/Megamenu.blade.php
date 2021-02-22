
<nav class="relative border-b-2 border-gray-300 text-gray-900 " style="z-index: 999; background-color: rgb(248, 175, 34)">
    <div class="container mx-auto flex justify-between">
      <div class="relative block p-4 lg:p-6 text-xl text-white font-bold">Categorias</div>
      <ul class="flex">
            <!--Hoverable Link-->
            <li class="hoverable hover:bg-black hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-black hover:text-white">TELEFONOS</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-black" style="background-color: black;
              background-size:100% 90vh;">
                  <div class="container w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SMARTPHONES') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">SMARTPHONE</a>
                          <ul class="col-span-2 px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li class="subsub grid grid-cols-2">
                                <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">FLAGSHIP</a>
                                <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                  <li>
                                    <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP/GALAXY Z') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Galaxy Z</a>
                                  </li>
                                  <li>
                                    <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP/Galaxy S') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Galaxy S</a>
                                  </li>
                                  <li>
                                    <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP/Galaxy NOTE') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Galaxy Note</a>
                                  </li>
                              </ul>
                              </li>
                              <li class="subsub grid grid-cols-2">
                                <a href="{{ url('Categoria/SMARTPHONES/NORMAL') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">NORMAL</a>
                                <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                  <li>
                                    <a href="{{ url('Categoria/SMARTPHONES/NORMAL/GALAXY A') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Galaxy A</a>
                                  </li>
                              </ul>
                              </li>
                          </ul>
                          <img class="col-start-4" src="/uploads/products/5/1.png">
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-black hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-black hover:text-white">TABLETS</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-black" style="background-color: black;
              background-size:100% 90vh;">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/TABLETS/TAB') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">TAB</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/TABLETS/TAB/GALAXY TAB A') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Galaxy Tab A</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/TABLETS/TAB/GALAXY TAB S') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Galaxy Tab S</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-black hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-black hover:text-white">WEARABLES</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-black" style="background-color: black;
              background-size:100% 90vh;">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/EARABLES') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">EARABLES</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/EARABLES/BUD') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">BUD</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SMARTWATCH') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">SMARTWATCH</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/SMARTWATCH/Watch') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Watch</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SPORTBAND') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">SPORTBAND</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/SPORTBAND/Fit') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Fit</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-black hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-black hover:text-white">ACCESORIOS</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-black" style="background-color: black;
              background-size:100% 90vh;">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2" >
                    <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/AUDIFONOS') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">AUDIFONOS </a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/AUDIFONOS/On ear') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">On ear</a>
                              </li>
                              <li>
                                  <a href="{{ url('Categoria/AUDIFONOS/In ear') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">in ear</a>
                                </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/PARLANTES') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">PARLANTES</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/PARLANTES/Mini') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Mini</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PARLANTES/Bar') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Bar</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PARLANTES/Outdoor') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Outdoor</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/CABLES') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">CABLES</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/CABLES/Tipo C') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">Tipo C</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CABLES/3IN1') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">3IN1</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CABLES/2IN1') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">2IN1</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CABLES/HUB') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">HUB</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/CASES') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">CASES</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/CASES/NOTE 20') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">NOTE 20</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CASES/S20') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">S20</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CASES/TAB') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">TAB</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/CHARGER') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">CHARGER</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/CHARGER/CAR') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">CAR</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CHARGER/WIRELESS') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">WIRELESS</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/CHARGER/WALL') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">WALL</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/PEN') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">PEN</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/PEN/NOTE') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">NOTE</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PEN/TAB') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">TAB</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/POWERBANK') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">POWERBANK</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/POWERBANK/WIRELESS') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">WIRELESS</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/POWERBANK/WIRED') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">WIRED</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/PROTECTION') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">PROTECTION</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/PROTECTION/GLASS COVER') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">GLASS COVER</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PROTECTION/SANITIZER') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">SANITIZER</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SELFIE STICK') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">SELFIE STICK</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/SELFIE STICK/SELFIE STICK') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">SELFIE STICK</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/SOPORTE') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">SOPORTE</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/SOPORTE/CAR') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">CAR</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/SOPORTE/MOTORCYCLE') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">MOTORCYCLE</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-black hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-black hover:text-white">COMPUTADORES</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-black" style="background-color: black;
              background-size:100% 90vh;">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/DESKTOP') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">DESKTOP</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/DESKTOP/ALL IN ONE') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">ALL IN ONE</a>
                              </li>
                              <li>
                                  <a href="{{ url('Categoria/DESKTOP/DESKTOP') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">DESKTOP</a>
                                </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/PORTABLES') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">PORTABLES</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/PORTABLES/GAMING') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">GAMING</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/PORTABLES/ULTRABOOK') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">ULTRABOOK</a>
                              </li>
                          </ul>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/MONITORES') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">MONITORES</a>
                          <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                              <li>
                                <a href="{{ url('Categoria/MONITORES/GAMING') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">GAMING</a>
                              </li>
                              <li>
                                <a href="{{ url('Categoria/MONITORES/OFFICE') }}" class="block p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">OFFICE</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            <li class="hoverable hover:bg-black hover:text-white">
              <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold 
              hover:bg-black hover:text-white">CONSOLAS Y JUEGOS</a>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-black" style="background-color: black;
              background-size:100% 90vh;">
                  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full border-black border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/CONSOLAS') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">CONSOLAS</a>
                      </li>
                      <li class="submenu grid grid-cols-5">
                          <a href="{{ url('Categoria/JUEGOS') }}" class="block-inline p-3 hover:bg-black text-gray-300 hover:text-white tracking-wide">JUEGOS</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </li>
            
            <!-- ## Hoverable Link Template ##
        
            <li class="hoverable hover:bg-black hover:text-white"><a href="#" class="relative block">x</a><div class="mega-menu">
              Add your mega menu content
              </div></li>
            
            -->
          </ul>
        </div>
      </nav>