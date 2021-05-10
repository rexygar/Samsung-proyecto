<div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8"
    x-data="{ open: false ,seleccionar: false }">
    <div class="col-span-1"></div>
    <div class="lg:col-span-6 md:col-span-6 xl:col-span-6 2xl:col-span-6 col-span-12 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6"
        style="background-color: white">

        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="grid grid-cols-8 lg:py-6">
                <div class="col-span-6">
                    <div class="pl-6">
                        <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                            La comuna seleccionada es: <br><strong class="text-xl" id="dirSelect"></strong>
                        </p>


                    </div>
                </div>
                @if (Auth::check())
                <div class="col-span-2">
                    @if (sizeof($direccion) == 0)
                    <a href="#" @click="open = true"
                        class="sm:text-md text-sm  inline-block px-2 py-2 font-bold underline rounded-md  hover:text-yellow-300 "
                        rel="noopener noreferrer">Por favor ingrese su dirección</a>
                    @else
                    <a href="#" @click="seleccionar = true"
                        class="sm:text-md text-sm  inline-block px-2 py-2 font-bold underline rounded-md  hover:text-yellow-300 "
                        rel="noopener noreferrer">Selecciona tu dirección</a>
                    @endif
                </div>
                @else
                <div class="col-span-2">

                    <a href="#" @click="open = true"
                        class="sm:text-md text-sm  inline-block px-2 py-2 font-bold underline rounded-md  hover:text-yellow-300 "
                        rel="noopener noreferrer">Por favor ingrese su dirección</a>

                </div>
                @endif
                <div class="col-span-full">
                    <p class=" px-6 tracking-normal py-1 text-base font-thin" style="background-color: aliceblue">
                        Si no es la ubicación donde quieres recibir tu compra, cámbiala aquí.
                    </p>
                </div>
            </div>

        </article>


        <article style="background-color: aliceblue" class="col-start-1 col-end-3">

            <div class="grid grid-cols-8 lg:pb-6 2xl:pb-6 xl:pb-6 md:pb-6 border-b-2 lg:pt-5">
                <div class="col-span-5">
                    <div class="px-6">
                        <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                            <strong>Entrega 1 de 1 :</strong>Despacho a domicilio
                        </p>
                        <p class=" tracking-normal py-1 " style="background-color: aliceblue" id="dirSelect1">
                        </p>

                    </div>
                </div>
                <div class="col-span-3">
                    <!-- Button (blue), duh! -->
                    <a href="#" @click="open = true"
                        class="sm:text-md text-sm  inline-block px-2 py-2 font-bold underline rounded-md  hover:text-yellow-300 "
                        rel="noopener noreferrer">Editar dirección de despacho</a>
                </div>
            </div>
            <div class="grid grid-cols-12 grid-flow-row">
                <div class="col-span-12">
                    <!--Card 1-->
                    <div class=" w-full lg:max-w-full lg:flex">
                        <div class="grid grid-cols-12 md:pt-6 xl:pt-6 2xl:pt-6 lg:pt-6">
                            <fieldset class="col-span-12 grid grid-cols-12  lg:pt-6">
                                <div class="col-span-6 p-4 border-r-2">
                                    <article style="background-color: aliceblue"
                                        class="lg:pt-6 xl:pt-6 2xl:pt-6 hover:border-2 hover:border-gray-700  col-span-12"
                                        x-data="{ Retiro: false }">
                                        <div class="md:px-6 lg:px-6 xl:px-6 2xl:px-6">
                                            <a class="md:px-6 lg:px-6 xl:px-6 2xl:px-6 md:py-6 lg:py-10 2xl:py-10 xl:py-10 hover:bg-gray-200 block"
                                                href="#" @click="Retiro = true">
                                                <label class="md:py-16 lg:py-16 font-bold">
                                                    Retiro en tienda Costo:
                                                    $0
                                                    <input type="radio" id="Tipo_Entrega" name="Tipo_Entrega" value="1">
                                                </label>

                                            </a>

                                            <!-- modal div -->
                                            <div class="mt-6" :class="{' block': Retiro, 'hidden': !Retiro}">

                                                <!-- Button (blue), duh! -->
                                                <!-- Dialog (full screen) -->
                                                <div class="absolute top-0  md:fixed lg:fixed  left-0 flex items-center justify-center w-full h-1/2 md:h-full lg:h-full xl:h-full 2xl:h-full"
                                                    style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);">

                                                    <!-- A basic modal dialog with title, body and one button to close -->
                                                    <div class="h-auto   mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-0 lg:p-0 md:mx-0 md:pr-0   lg:mx-0 w-full   md:-mt-16 xl:-mt-16 2xl:-mt-16 lg:-mt-16"
                                                        @click.away="Retiro = false" style="z-index: 9999;">
                                                        <!-- Success alert -->
                                                        <div style="background-color: #000" class="flex p-4">
                                                            <div class=" ">
                                                                <div style="background-color: #000" class=" w-24">
                                                                    <img class="branding__logo img-fluid"
                                                                        src="http://localhost:8000/img/logo_ok.png"
                                                                        max-width="95px" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between w-full">
                                                                <div class="text-black">
                                                                    <h2
                                                                        class=" pl-10 font-bold md:text-2xl  text-white">
                                                                        Seleccionar tienda de retiro
                                                                    </h2>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        {{-- modal body --}}
                                                        <div
                                                            class="mt-3 text-center sm:mt-0 sm:mx-10 sm:text-left pt-10">
                                                            <article style="" class=" col-start-1 col-end-3">

                                                                <div class="py-2">
                                                                    <p class=" tracking-normal py-2 border-b-2 border-opacity-25 font-bolder
                                                            border-dotted">
                                                                        <strong class="text-xl"> Elige la tienda de
                                                                            retiro</strong>

                                                                    </p>
                                                                </div>

                                                                @foreach ($tiendas as $tienda)
                                                                <label class="py-2">
                                                                    <div
                                                                        class="bg-white hover:border-green-300 my-2 box focus:bg-yellow-300 focus:border-black focus:border-2 border-2 font-bolder">

                                                                        <strong
                                                                            class="text-base">{{$tienda->Direccion , $tienda->Comuna , $tienda->Ciudad}}</strong>

                                                                        <input type="radio" id="tienda_id"
                                                                            name="tienda_id"
                                                                            value="{{$tienda->Tienda}}">

                                                                    </div>
                                                                </label>
                                                                @endforeach





                                                            </article>
                                                        </div>

                                                        <!-- One big close button.  --->
                                                        <div class="mt-5 sm:mt-6 pb-6 px-10 ">

                                                            <div
                                                                class="grid-cols-12 grid grid-flow-row auto-rows-auto gap-2">
                                                                <div
                                                                    class="text-2xl col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6 ">
                                                                    <button id="GuardarTienda"
                                                                        class=" font-bold  bg-yellow-500 w-full  text-white rounded-lg px-6 py-3 
                                                                                    block shadow-xl hover:text-white hover:bg-black"
                                                                        type="button">Guardar
                                                                        cambios</button>
                                                                    <input type="hidden" id="url2" name="url2"
                                                                        value="{{ route('tienda.update') }}">
                                                                    @csrf
                                                                </div>
                                                                <div
                                                                    class="text-2xl col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6 ">

                                                                    <span class="flex w-full rounded-md shadow-sm">
                                                                        <button @click="Retiro = false"
                                                                            id="cerrar_Retiro_tienda"
                                                                            class="inline-flex justify-center font-boldpx-6 py-3 text-white bg-blue-700 w-full rounded hover:bg-black">
                                                                            Cerrar
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-block" style="background-color: aliceblue">

                                        </div>
                                    </article>
                                </div>
                                <div class="col-span-6 p-4">
                                    <article style="background-color: aliceblue"
                                        class="lg:py-6 xl:py-6 2xl:py-6 hover:border-2 col-span-12">
                                        <div class="">
                                            <a href="#"
                                                class="md:py-6 lg:py-10 2xl:py-10 xl:py-10 hover:bg-gray-200 block"
                                                @click="open = true">
                                                <label class="md:py-16 lg:py-16 px-6 font-bold inline">
                                                    Valor Despacho: <span class="text-base"
                                                        id='vlor_despacho'>${{ number_format(Session::get('precio_comuna'),0,'','.') }}</span>
                                                    <input type="radio" name="Tipo_Entrega" value="2"
                                                        class="md:w-full lg:w-full">
                                                </label>

                                            </a>

                                        </div>

                                        <div class="panel-block" style="background-color: aliceblue">
                                            Despacho desde el 23 de marzo de 2021
                                        </div>


                                    </article>
                                </div>



                            </fieldset>


                        </div>
                    </div>
                </div>
            </div>

        </article>
        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-0 md:px-0 lg:px-6 xl:px-6 2xl:px-6">
                <div class="toolbar toolbar-bottom grid grid-cols-12 grid-flow-row auto-rows-max" role="toolbar"
                    style="text-align: right;">

                    <button class="btn col-span-6 sw-btn-prev disabled" type=" button">Volver
                        al Paso
                        anterior</button>
                    <button class="btn col-span-6 sw-btn-next " type="button" id="siguienteButton">Ir al
                        siguiente
                        Paso</button>
                </div>
            </div>

        </article>
    </div>
    <div class="lg:col-span-5 md:col-span-5 xl:col-span-5 2xl:col-span-5 col-span-12 lx:px-8 lg:pl-12 xl:pl-12 2xl:pl-12 md:px-4 xl:px-10 2xl:px-16 py-6 lg:py-0 xl:py-0 2xl:py-0"
        style="background-color: white">
        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
      border-dotted" style="background-color: aliceblue">
                    Sub-Total
                </p>
            </div>

            <div class="panel-block" style="background-color: aliceblue">
                <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                    @php
                    $total = 0;

                    @endphp
                    @foreach ($reserva as $res)
                    @php
                    $total = $res->Total + $total
                    @endphp
                    @endforeach
                    <span class="text-3xl"> $
                        @php
                        echo(number_format($total, 0,'','.'));
                        @endphp
                    </span>
                </h3>
            </div>


        </article>
        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                  border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                    tecnobuy.cl
                </p>
            </div>


            <div class="panel-block" style="background-color: aliceblue">
                <ul class="block w-11/12 my-4 mx-auto" x-data="{selected:null}">
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 0 ? selected = 0 : selected = null"
                            class="cursor-pointer px-5 py-3 text-white text-center inline-block hover:opacity-75 bg-yellow-300 hover:shadow hover:-mb-3 rounded-t">
                            Mi Carrito ({{ count($reserva) }})</h4>
                        <div x-show="selected == 0" class="border py-4 px-2 overflow-y-auto h-32">

                            @foreach ($reserva as $res)
                            <div class="py-1" role="none">
                                <div class="panel-block" style="background-color: aliceblue">

                                    <!--Card 1-->
                                    <div class=" w-full lg:max-w-full lg:flex">
                                        <div class=" lg: lg:w-24 flex-none   rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                            style="background-image: url({{ url('../uploads/products/1/buds.jpg') }});background-repeat: no-repeat;background-size: contain;">
                                        </div>
                                        <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                                            style="background-color: aliceblue">
                                            <div class="mb-8">
                                                <p class="text-sm text-gray-600 flex items-center">
                                                    ${{ number_format($res->monto, 0,'','.') }}
                                                </p>
                                                <div class="text-gray-900 font-bold text-xl mb-2">
                                                    {{ $res->descripcion }}</div>
                                                <input type="hidden" id="urlQuitar"
                                                    value="{{ route('carrito.delete') }}">
                                                <a type="button" id="borrar"
                                                    class="btn font-semibold hover:text-red-500 text-gray-500 text-xs"
                                                    onclick="eliminar({{ $res->sku }})">Quitar</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </li>

                </ul>
            </div>


        </article>


        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
      border-dotted" style="background-color: aliceblue">
                    Resumen de compra
                </p>
            </div>


            <div class="panel-block" style="background-color: aliceblue">
                <span class="panel-icon">

                </span>

                <span class="form-check-label">El costo de entrega se calculará al añadir la dirección</span>
            </div>


        </article>

        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
      border-dotted" style="background-color: aliceblue">
                    Cambios y devoluciones
                </p>
            </div>

            <div class="panel-block" style="background-color: aliceblue">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
              border-dotted" style="background-color: aliceblue">
                    Puedes cambiar tus productos en cualquier tienda Tecnobuy hasta 30 días después de la fecha de
                    compra.
                </p>
            </div>
        </article>

    </div>
    {{--  --}}

    <div class="mt-6">

        <!-- Button (blue), duh! -->
        <!-- Dialog (full screen) -->
        <div class="absolute top-0  md:fixed lg:fixed  left-0 flex items-center justify-center w-full h-1/2 md:h-full lg:h-full xl:h-full 2xl:h-full"
            style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);" :class="{' block': open, 'hidden': !open}">

            <!-- A basic modal dialog with title, body and one button to close -->
            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-0 lg:p-0 md:mx-0 w-full lg:mx-16 2xl:mx-16"
                @click.away="open = false" style="z-index: 9999;">

                <div style="background-color: #000" class="flex p-4">
                    <div class=" ">
                        <div style="background-color: #000" class=" w-24">
                            <img class="branding__logo img-fluid" src="http://localhost:8000/img/logo_ok.png"
                                max-width="95px" alt="">
                        </div>
                    </div>
                    <div class="flex justify-between w-full">
                        <div class="text-black">
                            <h2 class=" pl-10 font-bold md:text-2xl  text-white">
                                Agregar informacion de despacho
                            </h2>
                        </div>

                    </div>
                </div>
                {{-- modal body --}}
                <div class="mt-3 text-center sm:mt-0 sm:mx-10 sm:text-left pt-10">
                    <article style="" class=" col-start-1 col-end-3">

                        <div class="col-span-12  ">
                            <p class=" tracking-normal py-2 border-b-2 border-opacity-25 font-bolder
                            border-dotted">
                                <strong class="text-xl"> Completa tu dirección de despacho</strong>

                            </p>
                            <div class="grid-cols-12 grid grid-flow-row auto-rows-auto gap-2">
                                <div class="text-2xl col-span-6 ">
                                    <label class="text-base" for="NombreDireccion">Nombre:</label>
                                    <input type="text" required name="NombreDireccion" class="text-sm w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none" id="NombreDireccion">
                                </div>
                                <div class="text-2xl col-span-6 ">
                                    <label class="text-base" for="ApellidoDireccion">Apellido</label>
                                    <input type="text" required name="ApellidoDireccion" class="text-sm w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none" id="ApellidoDireccion">
                                </div>
                            </div>
                            <div class="grid-cols-12 grid grid-flow-row auto-rows-auto gap-2">
                                <div class="text-2xl col-span-6 ">
                                    <label class="text-base" for="regiones">Regiones:</label>

                                    <select id="regiones" name="regiones" formcontrolname="selectRegion" class="text-sm w-full block px-3 py-2 rounded-lg 
                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                        focus:placeholder-gray-500
                                        focus:bg-white 
                                        focus:border-gray-600  
                                        focus:outline-none">
                                    </select>

                                </div>
                                <div class="text-2xl col-span-6 ">
                                    <label class="text-base" for="comunas">Comunas:</label>
                                    <select id="comunas" name="comunas" formcontrolname="selectComuna" class="text-sm w-full block px-3 py-2 rounded-lg 
                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                        focus:placeholder-gray-500
                                        focus:bg-white 
                                        focus:border-gray-600  
                                        focus:outline-none">
                                    </select>
                                </div>
                            </div>
                            <div class="grid-cols-12 grid grid-flow-row auto-rows-auto gap-2">
                                <div class="text-2xl col-span-8 ">
                                    <label class="text-base" for="NuevaDireccion">Direccion:</label>
                                    <input type="text" required name="NuevaDireccion" class="text-sm w-full block px-3 py-2 rounded-lg 
                                                            bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                            focus:placeholder-gray-500
                                                            focus:bg-white 
                                                            focus:border-gray-600  
                                                            focus:outline-none" id="NuevaDireccion">
                                </div>
                                <div class="text-2xl col-span-4 ">
                                    <label class="text-base" for="detalle_1">numero:</label>
                                    <input type="text" name="detalle_1" class="text-sm w-full block px-3 py-2 rounded-lg 
                                                            bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                            focus:placeholder-gray-500
                                                            focus:bg-white 
                                                            focus:border-gray-600  
                                                            focus:outline-none" id="detalle_1">
                                </div>
                            </div>

                            <p class=" tracking-normal py-6">
                                <strong> Ejemplo:</strong> Avenida Kennedy 9001, Las Condes
                            </p>

                            <label class="text-base" for="detalle_2">Casa / Depto:</label>
                            <input type="text" name="detalle_2" class="text-sm w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none" id="detalle_2">


                        </div>



                    </article>
                </div>

                <!-- One big close button.  --->
                <div class="mt-5 sm:mt-6 pb-6 px-10">
                    <div class="grid-cols-12 grid grid-flow-row auto-rows-auto gap-2">
                        <div class="col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6">
                            <button id="GuardarDir" class="  font-bold 
                            bg-yellow-500 w-full    text-white rounded-lg px-6 py-3 
                            block shadow-xl hover:text-white hover:bg-black" type="button">GUARDAR CAMBIOS</button>
                        </div>
                        <input type="hidden" id="url3" name="url3" value="{{ route('direccion.add') }}">
                        @csrf

                        <div class="col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6">

                            <span class="flex w-full rounded-md shadow-sm">
                                <button @click="open = false" id="cerrar_n_direccion"
                                    class="inline-flex justify-center font-bold px-6 py-3 text-white bg-blue-700 w-full rounded hover:bg-black">
                                    VOLVER ATRAS
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- gris --}}


                {{--  --}}
            </div>
        </div>
    </div>
    {{-- Crear --}}
    @if (Auth::check())
    {{-- Seleccionar --}}

    <div class="mt-6">

        <!-- Button (blue), duh! -->
        <!-- Dialog (full screen) -->
        <div class="absolute top-0  md:fixed lg:fixed  left-0 flex items-center justify-center w-full h-1/2 md:h-full lg:h-full xl:h-full 2xl:h-full"
            style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);"
            :class="{' block': seleccionar, 'hidden': !seleccionar}">

            <!-- A basic modal dialog with title, body and one button to close -->
            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-0 lg:p-0 md:mx-0 w-full lg:mx-16 2xl:mx-16"
                @click.away="seleccionar = false" style="z-index: 9999;">

                <div style="background-color: #000" class="flex p-4">
                    <div class=" ">
                        <div style="background-color: #000" class=" w-24">
                            <img class="branding__logo img-fluid" src="http://localhost:8000/img/logo_ok.png"
                                max-width="95px" alt="">
                        </div>
                    </div>
                    <div class="flex justify-between w-full">
                        <div class="text-black">
                            <h2 class=" pl-10 font-bold md:text-2xl  text-white">
                                Direccion de despacho
                            </h2>
                        </div>

                    </div>
                </div>
                {{-- modal body --}}
                <div class="mt-3 text-center sm:mt-0 sm:mx-10 sm:text-left pt-10">
                    <article style="" class=" col-start-1 col-end-3">
                        <article style="" class=" col-start-1 col-end-3">

                            <div class="py-2">
                                <p class=" tracking-normal py-2 border-b-2 border-opacity-25 font-bolder
                        border-dotted">
                                    <strong class="text-xl"> Selecciona tu dirección de despacho</strong>

                                </p>
                            </div>

                            <div class="overflow-y-auto h-60">
                                @foreach ($direccion as $dir)
                                <label class="py-2">
                                    <div
                                        class="bg-white hover:border-green-300 my-2 box focus:bg-yellow-300 focus:border-black focus:border-2 border-2">
                                        <strong class="text-base"> {{$dir->calle , $dir->numero , $dir->depto}}</strong>
                                        <input type="radio" id="dir_id" name="dir_id" value="{{$dir->id}}">

                                    </div>
                                </label>
                                @endforeach
                            </div>

                            {{-- <a href="#" @click="seleccionar = false" @click="open = true"
                                class="sm:text-md text-sm  inline-block px-2 py-2 underline rounded-md  hover:text-yellow-300 "
                                rel="noopener noreferrer">
                                <label>
                                    <div
                                        class="bg-white hover:border-green-300 my-2 box focus:bg-yellow-300 focus:border-black focus:border-2 border-2">
                                        Por favor ingrese su dirección
                                        <input type="radio" onclick="openModal(Tipo_Entrega)" id="Tipo_Entrega"
                                            name="Tipo_Entrega" value="1">
                                        <button x-data @click="$dispatch('toggle-reassign-modal')">Toggle Reassign
                                            Modal</button>
                                    </div>
                                </label>
                            </a> --}}




                        </article>

                    </article>
                </div>

                <!-- One big close button.  --->
                <div class="mt-5 sm:mt-6 pb-6 px-10">
                    <div class="grid-cols-12 grid grid-flow-row auto-rows-auto gap-2">
                        <div class="col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6">
                            <button id="Seleccionar_Dir" class="  font-bold 
                            bg-yellow-500 w-full    text-white rounded-lg px-6 py-3 
                            block shadow-xl hover:text-white hover:bg-black" type="button">GUARDAR CAMBIOS</button>
                        </div>
                        <input type="hidden" id="url5" name="url5" value="{{ route('direccion.updte') }}">
                        @csrf

                        <div class="col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6">

                            <span class="flex w-full rounded-md shadow-sm">
                                <button @click="seleccionar = false" id="cerrar_s_direccion"
                                    class="inline-flex justify-center font-bold px-6 py-3 text-white bg-blue-700 w-full rounded hover:bg-black">
                                    VOLVER ATRAS
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- gris --}}


                {{--  --}}
            </div>
        </div>
    </div>
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
    <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
        style="background: rgba(0,0,0,.7);">
        <div class="border border-teal-500 shadow-lg modal-container bg-white mx-auto rounded z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Cambiar Dirección</p>
                </div>
                <!--Body-->
                <div class="my-5">
                    <input type="hidden" id="idDelete" value="">
                    ¿Está seguro que desea Eliminar este registro?
                </div>
                <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button
                        class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancelar</button>
                    <button
                        class="focus:outline-none px-4 bg-green-500 p-3 ml-3 rounded-lg text-white hover:bg-green-400"
                        onclick="eliminar()">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const modal = document.querySelector('.main-modal');
              const closeButton = document.querySelectorAll('.modal-close');
      
              const modalClose = () => {
                  modal.classList.remove('fadeIn');
                  modal.classList.add('fadeOut');
                  setTimeout(() => {
                      modal.style.display = 'none';
                  }, 500);
              }
      
              const openModal = () => {
                  modal.classList.remove('fadeOut');
                  modal.classList.add('fadeIn');
                  modal.style.display = 'flex';
              }
      
              for (let i = 0; i < closeButton.length; i++) {
      
                  const elements = closeButton[i];
      
                  elements.onclick = (e) => modalClose();
      
                  modal.style.display = 'none';
      
                  window.onclick = function (event) {
                      if (event.target == modal) modalClose();
                  }
              }
    </script>
    @endif
    {{-- Seleccionar --}}
</div>

{{-- {{-- <script src="{{ asset('js/Sel_Tienda.js') }}"></script> --}}

<script src="{{ asset('js/compra_usr.js') }}"></script>

<script>
    function isDialogOpen() {
    return {
        modal: false,
        open() { this.modal = true;document.body.classList.add("modal-open"); },
        close() { this.modal = false;document.body.classList.remove("modal-open"); },
        isOpen() { return this.modal === true },
    }
}

function reassignDialog() {
    return {
        reassignmodal: false,
        openReassign() { this.reassignmodal = true;document.body.classList.add("modal-open"); },
        closeReassign() { this.reassignmodal= false;document.body.classList.remove("modal-open"); },
        isOpenReassign() { return this.reassignmodal=== true },
    }
}
</script>