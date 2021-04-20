<footer class="relative bg-white pt-16 lg:pt-16 md:pt-16 xl:pt-16 2xl:pt-16 pb-6">

  <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
    style="height: 80px; transform: translateZ(0px);">
    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
      version="1.1" viewBox="0 0 2560 100" x="0" y="0">
      <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>

  <!-- <footer> -->

  <div class="grid grid-cols-12">


    <div class="col-span-1"></div>

    <div class="col-span-3 grid grid-cols-12 ">
      <div class="col-span-12 -ml-4">
        <span class="block uppercase text-gray-700 md:w-5/6 text-base sm:pl-5 pl-2 font-semibold mb-2 "
          style="border-right: black solid 1px;border-left: black solid 1px;">Categorias</span>
        <ul class="list-unstyled md:w-5/6 md:pl-5  lg:w-5/6 sm:pl-2 pl-2
        lg:pl-5" style="border-right: black solid 1px;border-left: black solid 1px;">
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">Smartphone</a>
          </li>
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://creative-tim.com/terms">Smartwatches</a>
          </li>
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://creative-tim.com/privacy">Tablets</a>
          </li>
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://creative-tim.com/contact-us">Audio</a>
          </li>
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://creative-tim.com/contact-us">Promociones</a>
          </li>
        </ul>
        {{-- <div class="py-3 px-3 sm:block hidden">
          <h2 class="text-black font-semibold py-1 lowercase text-lg"> nuestras tiendas</h2>
          @foreach ($tiendas as $tienda)
          <span
            class="text-gray-600 font-semibold py-1 lowercase">{{$tienda->Direccion , $tienda->Comuna , $tienda->Ciudad}}<br></span>


          @endforeach
        </div> --}}
      </div>
    </div>
    <div class="col-span-7 grid grid-cols-12 md:grid-flow-row row-span-2">
      <div class="col-span-6  px-2 ">
        <span class="block uppercase text-gray-700 md:w-5/6 text-base pl-5 font-semibold mb-2 "
          style="border-right: black solid 1px;">Trade In</span>
        <ul class="list-unstyled md:w-5/6 md:pl-5" style="border-right: black solid 1px;">
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">¿Cómo
              Funciona?</a>
          </li>
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://creative-tim.com/terms">¿Qué Equipo?</a>
          </li>
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://creative-tim.com/privacy">Requisitos</a>
          </li>
        </ul>
      </div>
      <div class="col-span-6 -mr-4">

        <span class="block uppercase text-gray-700 md:w-5/6 text-base pl-5 font-semibold mb-2 "
          style="border-right: black solid 1px;">Soporte</span>
        <ul class="list-unstyled md:w-5/6 md:pl-5" style="border-right: black solid 1px;">
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">Chat
              de
              Soporte</a>
          </li>
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://creative-tim.com/terms">Email de Soporte</a>
          </li>
          <li>
            <a class="text-gray-500 hover:text-gray-900 md:w-3/6 font-semibold pb-2 text-sm"
              href="https://creative-tim.com/privacy">Telefono de Soporte</a>
          </li>
        </ul>
      </div>
      <div class="col-span-12 py-3">
        <img src="{{ asset('img/Logos_Pagos.PNG') }}" alt="">

      </div>


    </div>
    <div class="col-span-1"></div>

    <hr class="my-6 border-gray-400 col-span-12 mx-auto" />
    <div class="flex flex-wrap items-center md:justify-between  ">
      <div class="w-full md:w-4/12 px-4 mx-auto text-center mx-auto   ">
        <div class="text-sm text-gray-600 font-semibold py-1">
          <a href="https://www.Tecnobuy.cl" class="text-gray-600 hover:text-gray-900">https://www.Tecnobuy.cl</a>.
        </div>
      </div>
    </div>
  </div>



  <!-- </footer> -->

</footer>
<script src="{{ asset('js/wow.min.js') }} "></script>
<script>
  new WOW().init();
</script>