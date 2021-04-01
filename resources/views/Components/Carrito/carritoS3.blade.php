<div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8"
    x-data="{ open: false ,seleccionar: false }">
    <div class="col-span-1"></div>
    <div class="col-span-6 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6" style="background-color: white">

        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="grid grid-cols-8">
                <div class="col-span-6">
                    <div class="px-6">
                        <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                            La comuna seleccionada es: <strong>Las Cruces, Región De Valparaíso</strong>
                        </p>

                        <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                            Si no es la ubicación donde quieres recibir tu compra, cámbiala aquí.
                        </p>

                    </div>
                </div>
                <div class="col-span-2">
                    @if (sizeof($direccion) == 0)
                    <a href="#" @click="open = true"
                        class="sm:text-md text-sm  inline-block px-2 py-2 underline rounded-md  hover:text-yellow-300 "
                        rel="noopener noreferrer">Por favor ingrese su dirección</a>
                    @else
                    <a href="#" @click="seleccionar = true"
                        class="sm:text-md text-sm  inline-block px-2 py-2 underline rounded-md  hover:text-yellow-300 "
                        rel="noopener noreferrer">Por favor seleecione su dirección</a>
                    @endif
                </div>
            </div>

        </article>


        <article style="background-color: aliceblue" class="col-start-1 col-end-3">

            <div class="grid grid-cols-8 lg:pb-6 2xl:pb-6 xl:pb-6 md:pb-6 border-b-2">
                <div class="col-span-5">
                    <div class="px-6">
                        <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                            <strong>Entrega 1 de 1 :</strong>Despacho a domicilio
                        </p>
                        <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                            Calera, Región De Valparaíso
                        </p>

                    </div>
                </div>
                <div class="col-span-3">
                    <!-- Button (blue), duh! -->
                    <a href="#" @click="open = true"
                        class="sm:text-md text-sm  inline-block px-2 py-2 underline rounded-md  hover:text-yellow-300 "
                        rel="noopener noreferrer">Editar dirección de despacho</a>
                </div>
            </div>
            <div class="grid grid-cols-12 grid-flow-row">
                <div class="col-span-6">
                    @foreach ($reserva as $res) <div class="panel-block" style="background-color: aliceblue">

                        <!--Card 1-->
                        <div class=" w-full lg:max-w-full lg:flex">
                            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                style="background-image: url({{ url('../uploads/products/1/buds.jpg') }});">
                            </div>
                            <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                                style="background-color: aliceblue">
                                <div class="mb-8">
                                    <p class="text-sm text-gray-600 flex items-center">
                                        ${{ number_format($res->monto, 0,'','.') }}
                                    </p>
                                    <div class="text-gray-900 font-bold text-xl mb-2">{{ $res->descripcion }}</div>
                                    <input type="hidden" id="urlQuitar" value="{{ route('carrito.delete') }}">
                                    <a type="button" id="borrar"
                                        class="btn font-semibold hover:text-red-500 text-gray-500 text-xs"
                                        onclick="eliminar({{ $res->sku }})">Quitar</a>
                                </div>

                            </div>
                        </div>

                    </div> @endforeach
                </div>
                <div class="col-span-6">
                    <!--Card 1-->
                    <div class=" w-full lg:max-w-full lg:flex">
                        <div class="grid grid-cols-12 md:pt-6 xl:pt-6 2xl:pt-6 lg:pt-6">
                            <fieldset class="col-span-12">
                                <article style="background-color: aliceblue"
                                    class="lg:pt-6 xl:pt-6 2xl:pt-6 hover:border-2 hover:border-gray-700  col-span-12"
                                    x-data="{ Retiro: false }">
                                    <div class="px-6">
                                        <a href="#" @click="Retiro = true">
                                            <label>
                                                Retiro en tienda Costo:
                                                $0
                                                <input type="radio" name="Tipo_Entrega" value="1">
                                            </label>

                                        </a>

                                        <!-- modal div -->
                                        <div class="mt-6" :class="{' block': Retiro, 'hidden': !Retiro}">

                                            <!-- Button (blue), duh! -->
                                            <!-- Dialog (full screen) -->
                                            <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
                                                style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);">

                                                <!-- A basic modal dialog with title, body and one button to close -->
                                                <div class="h-auto   mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-0 lg:p-0 md:mx-0 md:pr-0   lg:mx-0 w-full   md:-mt-20 xl:-mt-36 2xl:-mt-36 lg:-mt-36"
                                                    @click.away="Retiro = false" style="z-index: 9999;">
                                                    <!-- Success alert -->
                                                    <div style="background-color: #F5DF4D" class="flex   py-6 px-6 ">
                                                        <div class=" ">
                                                            <div style="background-color: #F5DF4D"
                                                                class="h-10 w-10 text-white  rounded-full flex justify-center items-center">
                                                                <i class="material-icons">done</i>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between w-full">
                                                            <div class="text-black">
                                                                <p class="mb-2 font-bold">
                                                                    Succes alert
                                                                </p>
                                                                <p class="text-xs">
                                                                    description text
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    {{-- modal body --}}
                                                    <div class="mt-3 text-center sm:mt-0 sm:mx-10 sm:text-left pt-10">
                                                        <article style="" class=" col-start-1 col-end-3">



                                                            @foreach ($tiendas as $tienda)
                                                            <label>
                                                                <div
                                                                    class="bg-white hover:border-green-300 box focus:bg-yellow-300 focus:border-black focus:border-2 border-2">
                                                                    {{$tienda->Direccion , $tienda->Comuna , $tienda->Ciudad}}
                                                                    <input type="radio" id="tienda_id" name="tienda_id"
                                                                        value="{{$tienda->Tienda}}">

                                                                </div>
                                                            </label>
                                                            @endforeach





                                                        </article>
                                                    </div>

                                                    <!-- One big close button.  --->
                                                    <div class="mt-5 sm:mt-6 pb-6 px-10 ">

                                                        <div class="grid-cols-12 grid grid-flow-row auto-rows-auto">
                                                            <div class="text-2xl col-span-6 ">
                                                                <button id="GuardarTienda"
                                                                    class=" font-bold  bg-yellow-500 w-full  text-white rounded-lg px-6 py-3 
                                                                                    block shadow-xl hover:text-white hover:bg-black"
                                                                    type="button">Guardar
                                                                    cambios</button>
                                                                <input type="hidden" id="url2" name="url2"
                                                                    value="{{ route('tienda.update') }}">
                                                                @csrf
                                                            </div>
                                                            <div class="text-2xl col-span-6 ">

                                                                <span class="flex w-full rounded-md shadow-sm">
                                                                    <button @click="Retiro = false"
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
                                <article style="background-color: aliceblue"
                                    class="lg:py-6 xl:py-6 2xl:py-6 hover:border-2 col-span-12">
                                    <div class="px-6">
                                        <a href="#" @click="open = true">
                                            <label>
                                                Despacho programado Costo:
                                                $7.990
                                                <input type="radio" name="Tipo_Entrega" value="2">
                                            </label>

                                        </a>

                                    </div>

                                    <div class="panel-block" style="background-color: aliceblue">
                                        Fecha de retiro desde el 23 de marzo de 2021
                                        Que otra persona retire por mi
                                    </div>


                                </article>


                            </fieldset>


                        </div>
                    </div>
                </div>
            </div>

        </article>

    </div>
    <div class="col-span-5 lx:px-8 lg:pl-12 xl:pl-12 2xl:pl-12 md:px-4 xl:px-10 2xl:px-16"
        style="background-color: white">
        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
      border-dotted" style="background-color: aliceblue">
                    Tu carro (2 Productos)
                </p>
            </div>


            <div class="panel-block" style="background-color: aliceblue">
                <ul class="block w-11/12 my-4 mx-auto" x-data="{selected:null}">
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 0 ? selected = 0 : selected = null"
                            class="cursor-pointer px-5 py-3 text-white text-center inline-block hover:opacity-75 bg-yellow-300 hover:shadow hover:-mb-3 rounded-t">
                            Mi Carrito</h4>
                        <div x-show="selected == 0" class="border py-4 px-2">

                            @foreach ($reserva as $res)
                            <div class="py-1" role="none">
                                <div class="panel-block" style="background-color: aliceblue">

                                    <!--Card 1-->
                                    <div class=" w-full lg:max-w-full lg:flex">
                                        <div class="h-24 lg:h-24 lg:w-24 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                            style="background-image: url({{ url('../uploads/products/1/buds.jpg') }});">
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
                    Sub-Total
                </p>
            </div>

            <div class="panel-block" style="background-color: aliceblue">
                <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                    @foreach ($reserva as $res)

                    <span class="text-3xl">${{number_format($res->Total, 0,'','.')}}</span>
                    @endforeach</h3>
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
        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;"><button
                        class="btn sw-btn-prev disabled" type="button">Volver al paso
                        anterior</button><button class="btn sw-btn-next" type="button">Next</button></div>
            </div>

        </article>
    </div>
    {{--  --}}

    <div class="mt-6">

        <!-- Button (blue), duh! -->
        <!-- Dialog (full screen) -->
        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
            style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);" :class="{' block': open, 'hidden': !open}">

            <!-- A basic modal dialog with title, body and one button to close -->
            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-0 lg:p-0 md:mx-0 w-full lg:mx-16 2xl:mx-16 xl:mx-16 md:-mt-20 xl:-mt-36 2xl:-mt-36 lg:-mt-36"
                @click.away="open = false" style="z-index: 9999;">

                <div style="background-color: #F5DF4D" class="flex   py-6 px-6 ">
                    <div class=" ">
                        <div style="background-color: #F5DF4D"
                            class="h-10 w-10 text-white  rounded-full flex justify-center items-center">
                            <i class="material-icons">done</i>
                        </div>
                    </div>
                    <div class="flex justify-between w-full">
                        <div class="text-black">
                            <p class="mb-2 font-bold">
                                Succes alert
                            </p>
                            <p class="text-xs">
                                description text
                            </p>
                        </div>
                        <div class="text-sm text-gray-500">
                            <span>x</span>
                        </div>
                    </div>
                </div>
                {{-- modal body --}}
                <div class="mt-3 text-center sm:mt-0 sm:mx-10 sm:text-left pt-10">
                    <article style="" class=" col-start-1 col-end-3">

                        <div class="col-span-12  ">

                            <p class=" tracking-normal">
                                Completa tu dirección de despacho
                            </p>
                            <div class="grid-cols-12 grid grid-flow-row auto-rows-auto">
                                <div class="text-2xl col-span-6 ">
                                    <label class="text-base" for="NombreDireccion">Nombre:</label>
                                    <input type="text" required name="NombreDireccion" class="text-md w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none" id="NombreDireccion">
                                </div>
                                <div class="text-2xl col-span-6 ">
                                    <label class="text-base" for="ApellidoDireccion">Apellido</label>
                                    <input type="text" required name="ApellidoDireccion" class="text-md w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none" id="ApellidoDireccion">
                                </div>
                            </div>
                            <div class="grid-cols-12 grid grid-flow-row auto-rows-auto">
                                <div class="text-2xl col-span-8 ">
                                    <label class="text-base" for="NuevaDireccion">Direccion:</label>
                                    <input type="text" required name="NuevaDireccion" class="text-md w-full block px-3 py-2 rounded-lg 
                                                            bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                            focus:placeholder-gray-500
                                                            focus:bg-white 
                                                            focus:border-gray-600  
                                                            focus:outline-none" id="NuevaDireccion">
                                </div>
                                <div class="text-2xl col-span-4 ">
                                    <label class="text-base" for="detalle_1">numero:</label>
                                    <input type="text" name="detalle_1" class="text-md w-full block px-3 py-2 rounded-lg 
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
                            <input type="text" name="detalle_2" class="text-md w-full block px-3 py-2 rounded-lg 
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
                    <div class="grid-cols-12 grid grid-flow-row auto-rows-auto">
                        <div class="  col-span-6 ">
                            <button id="GuardarDir" class="  font-bold 
                            bg-yellow-500 w-full    text-white rounded-lg px-6 py-3 
                            block shadow-xl hover:text-white hover:bg-black" type="button">GUARDAR CAMBIOS</button>
                        </div>
                        <input type="hidden" id="url3" name="url3" value="{{ route('direccion.add') }}">
                        @csrf

                        <div class=" col-span-6 ">

                            <span class="flex w-full rounded-md shadow-sm">
                                <button @click="open = false"
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
        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
            style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);"
            :class="{' block': seleccionar, 'hidden': !seleccionar}">

            <!-- A basic modal dialog with title, body and one button to close -->
            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-0 lg:p-0 md:mx-0 w-full lg:mx-16 2xl:mx-16 xl:mx-16 md:-mt-20 xl:-mt-36 2xl:-mt-36 lg:-mt-36"
                @click.away="seleccionar = false" style="z-index: 9999;">

                <div style="background-color: #F5DF4D" class="flex   py-6 px-6 ">
                    <div class=" ">
                        <div style="background-color: #F5DF4D"
                            class="h-10 w-10 text-white  rounded-full flex justify-center items-center">
                            <i class="material-icons">done</i>
                        </div>
                    </div>
                    <div class="flex justify-between w-full">
                        <div class="text-black">
                            <p class="mb-2 font-bold">
                                Succes alert
                            </p>
                            <p class="text-xs">
                                description text
                            </p>
                        </div>
                        <div class="text-sm text-gray-500">
                            <span>x</span>
                        </div>
                    </div>
                </div>
                {{-- modal body --}}
                <div class="mt-3 text-center sm:mt-0 sm:mx-10 sm:text-left pt-10">
                    <article style="" class=" col-start-1 col-end-3">
                        <article style="" class=" col-start-1 col-end-3">



                            @foreach ($direccion as $dir)
                            <label>
                                <div
                                    class="bg-white hover:border-green-300 box focus:bg-yellow-300 focus:border-black focus:border-2 border-2">
                                    {{$dir->calle , $dir->numero , $dir->depto}}
                                    <input type="radio" id="tienda_id" name="tienda_id" value="{{$dir->id}}">

                                </div>
                            </label>
                            @endforeach
                            <a href="#" @click="seleccionar = false"   @click="open = true" 
                                class="sm:text-md text-sm  inline-block px-2 py-2 underline rounded-md  hover:text-yellow-300 "
                                rel="noopener noreferrer">
                                <label>
                                    <div
                                        class="bg-white hover:border-green-300 box focus:bg-yellow-300 focus:border-black focus:border-2 border-2">
                                        Por favor ingrese su dirección
                                        <input type="radio" name="Tipo_Entrega" value="1">
                                        <button x-data @click="$dispatch('toggle-reassign-modal')">Toggle Reassign Modal</button>
                                    </div>
                                </label>
                            </a>




                        </article>

                    </article>
                </div>

                <!-- One big close button.  --->
                <div class="mt-5 sm:mt-6 pb-6 px-10">
                    <div class="grid-cols-12 grid grid-flow-row auto-rows-auto">
                        <div class="  col-span-6 ">
                            <button id="GuardarDir" class="  font-bold 
                            bg-yellow-500 w-full    text-white rounded-lg px-6 py-3 
                            block shadow-xl hover:text-white hover:bg-black" type="button">GUARDAR CAMBIOS</button>
                        </div>
                        <input type="hidden" id="url3" name="url3" value="{{ route('direccion.add') }}">
                        @csrf

                        <div class=" col-span-6 ">

                            <span class="flex w-full rounded-md shadow-sm">
                                <button @click="seleccionar = false"
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