<div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8">
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
                    <!-- modal div -->
                    <div class="mt-6" x-data="{ open: false }">

                        <!-- Button (blue), duh! -->
                        <a href="#" @click="open = true"
                            class="sm:text-md text-sm  inline-block px-2 py-2 underline rounded-md  hover:text-yellow-300 "
                            rel="noopener noreferrer">Ingresar mi dirección</a>

                        <!-- Dialog (full screen) -->
                        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
                            style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);" x-show="open">

                            <!-- A basic modal dialog with title, body and one button to close -->
                            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0 w-full md:py-12 xl:py-12 2xl:py-12 lg:py-12"
                                @click.away="open = false" style="
    z-index: 9999;
">
                                {{-- modal body --}}
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <article style="background-color: aliceblue"
                                        class="panel is-primary col-start-1 col-end-3">
                                        <div class="px-6">
                                            <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                                                border-dotted" style="background-color: aliceblue">
                                                Completa tu dirección de entrega
                                            </p>
                                        </div>

                                        <div class="grid grid-cols-12" style="background-color: aliceblue">
                                            <div class="col-span-12">
                                                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                                            border-dotted" style="background-color: aliceblue">
                                                    Nombre y apellido de quien recibe la compra:
                                                </p>
                                            </div>
                                            <div class="col-span-12">
                                                <input type="text" name="NuevoNombre"
                                                    class="form-check-input col-span-12" id="16GB">
                                                <label class="form-check-label" for="NuevoNombre">Nombre:</label>
                                                <input type="text" name="NuevoApellido"
                                                    class="form-check-input col-span-12" id="16GB">
                                                <label class="form-check-label" for="NuevoApellido">Apellido</label>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12" style="background-color: aliceblue">
                                            <div class="col-span-12">
                                                <h3>Dirección</h3>
                                                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                                                border-dotted" style="background-color: aliceblue">
                                                    Ejemplo: Avenida Kennedy 9001, Las Condes
                                                </p>
                                            </div>
                                            <div class="col-span-12">
                                                <input type="text" name="NuevaDireccion"
                                                    class="form-check-input col-span-12" id="16GB">
                                                <label class="form-check-label" for="NuevaDireccion">Direccion:</label>
                                            </div>

                                        </div>
                                        <div class="grid grid-cols-12" style="background-color: aliceblue">
                                            <div class="col-span-12">
                                                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                                                    Casa/depto:
                                                </p>
                                            </div>
                                            <div class="col-span-12">
                                                <input type="text" name="NuevaCasa" class="form-check-input col-span-12"
                                                    id="16GB">
                                                <label class="form-check-label" for="NuevaCasa">Casa:</label></div>

                                        </div>
                                    </article>
                                </div>

                                <!-- One big close button.  --->
                                <div class="mt-5 sm:mt-6">
                                    <span class="flex w-full rounded-md shadow-sm">
                                        <button @click="open = false"
                                            class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                                            Close this modal!
                                        </button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>


        <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

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
                    <!-- modal div -->
                    <div class="mt-6" x-data="{ open: false }">

                        <!-- Button (blue), duh! -->
                        <a href="#" @click="open = true"
                            class="sm:text-md text-sm  inline-block px-2 py-2 underline rounded-md  hover:text-yellow-300 "
                            rel="noopener noreferrer">Editar dirección de despacho</a>

                        <!-- Dialog (full screen) -->
                        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
                            style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);" x-show="open">

                            <!-- A basic modal dialog with title, body and one button to close -->
                            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0 w-full md:py-12 xl:py-12 2xl:py-12 lg:py-12"
                                @click.away="open = false" style="
    z-index: 9999;
">
                                {{-- modal body --}}
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <article style="background-color: aliceblue"
                                        class="panel is-primary col-start-1 col-end-3">
                                        <div class="px-6">
                                            <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                                                border-dotted" style="background-color: aliceblue">
                                                Completa tu dirección de entrega
                                            </p>
                                        </div>

                                        <div class="panel-block" style="background-color: aliceblue">
                                            <div>
                                                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                                            border-dotted" style="background-color: aliceblue">
                                                    Nombre y apellido de quien recibe la compra:
                                                </p>
                                            </div>
                                            <div><input type="text" name="NuevoNombre" class="form-check-input"
                                                    id="16GB">
                                                <label class="form-check-label" for="NuevoNombre">Nombre:</label>
                                                <input type="text" name="NuevoApellido" class="form-check-input"
                                                    id="16GB">
                                                <label class="form-check-label" for="NuevoApellido">Apellido</label>
                                            </div>
                                        </div>
                                        <div class="panel-block" style="background-color: aliceblue">
                                            <div>
                                                <h3>Dirección</h3>
                                                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                                                border-dotted" style="background-color: aliceblue">
                                                    Ejemplo: Avenida Kennedy 9001, Las Condes
                                                </p>
                                            </div>
                                            <div><input type="text" name="NuevaDireccion" class="form-check-input"
                                                    id="16GB">
                                                <label class="form-check-label" for="NuevaDireccion">Direccion:</label>
                                            </div>

                                        </div>
                                        <div class="panel-block" style="background-color: aliceblue">
                                            <div>
                                                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                                                    Casa/depto:
                                                </p>
                                            </div>
                                            <div>
                                                <input type="text" name="NuevaCasa" class="form-check-input" id="16GB">
                                                <label class="form-check-label" for="NuevaCasa">Casa:</label></div>

                                        </div>
                                    </article>
                                </div>

                                <!-- One big close button.  --->
                                <div class="mt-5 sm:mt-6">
                                    <span class="flex w-full rounded-md shadow-sm">
                                        <button @click="open = false"
                                            class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                                            Close this modal!
                                        </button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 grid-flow-row">
                <div class="col-span-6">

                    <div class="panel-block" style="background-color: aliceblue">

                        <!--Card 1-->
                        <div class=" w-full lg:max-w-full lg:flex">
                            <div class="h-24 lg:h-24 lg:w-24 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                style="background-image: url({{ url('../uploads/products/1/46mm.jpg') }});">
                            </div>
                            <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                                style="background-color: aliceblue">
                                <div class="">
                                    <p class="text-sm text-gray-600 flex items-center">
                                        $259.990
                                    </p>
                                    <div class="text-gray-900 font-bold text-xl mb-2">BASE DE CARGA INALMBRICA TRIPLE
                                        PARA SMARTPHONE SMARTWATCH Y AUDFONOS DUSTED NEGRO</div>
                                    <a type="button" id="borrar"
                                        class="btn font-semibold hover:text-red-500 text-gray-500 text-xs">Quitar</a>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="panel-block" style="background-color: aliceblue">

                        <!--Card 1-->
                        <div class=" w-full lg:max-w-full lg:flex">
                            <div class="h-24 lg:h-24 lg:w-24 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                style="background-image: url({{ url('../uploads/products/1/46mm.jpg') }});">
                            </div>
                            <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                                style="background-color: aliceblue">
                                <div class="">
                                    <p class="text-sm text-gray-600 flex items-center">
                                        $259.990
                                    </p>
                                    <div class="text-gray-900 font-bold text-xl mb-2">GALAXY WATCH 46 MM</div>
                                    <a type="button" id="borrar"
                                        class="btn font-semibold hover:text-red-500 text-gray-500 text-xs">Quitar</a>
                                    {{-- <a type="button" id="borrar" class="btn font-semibold hover:text-red-500 text-gray-500 text-xs" onclick="eliminar({{ $res->sku }})">Quitar</a>
                                    --}}
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="panel-block" style="background-color: aliceblue">

                        <!--Card 1-->
                        <div class=" w-full lg:max-w-full lg:flex">
                            <div class="h-24 lg:h-24 lg:w-24 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                style="background-image: url({{ url('../uploads/products/1/46mm.jpg') }});">
                            </div>
                            <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                                style="background-color: aliceblue">
                                <div class="">
                                    <p class="text-sm text-gray-600 flex items-center">
                                        $259.990
                                    </p>
                                    <div class="text-gray-900 font-bold text-xl mb-2">GALAXY WATCH 46 MM</div>
                                    <a type="button" id="borrar"
                                        class="btn font-semibold hover:text-red-500 text-gray-500 text-xs">Quitar</a>
                                    {{-- <a type="button" id="borrar" class="btn font-semibold hover:text-red-500 text-gray-500 text-xs" onclick="eliminar({{ $res->sku }})">Quitar</a>
                                    --}}
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-span-6">
                    <!--Card 1-->
                    <div class=" w-full lg:max-w-full lg:flex">
                        <div class="grid grid-cols-12 md:pt-6 xl:pt-6 2xl:pt-6 lg:pt-6">
                          
                                <article style="background-color: aliceblue"
                                    class="lg:py-6 xl:py-6 2xl:py-6 hover:border-2 hover:border-gray-700  col-span-12">
                                    <div class="px-6">

                                        <label class="form-check-label" >
                                            Retiro en tienda Costo:
                                            $0
                                            <input type="radio"  x-on:click="Entrega = 'true'"   value="1">

                                        </label>
                                        <label for="plan-monthly">
                                            <input x-on:click="selected = 'opt2'" id="plan-monthly" type="radio" name="plan" value="premium-monthly">
                                            Monthly - <strong></strong> / month
                                        </label>

                                        <div :class="{' hidden': selected, 'block': !selected}" x-cloak>
                                            <label :class="{' hidden': selected, 'block': !selected}" x-cloak for="card-element">
                                                Credit or debit card
                                            </label>
                                            <div :class="{' hidden': selected, 'block': !selected}" x-cloak id="card-element">
                                                <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                        </div>

                                        <!-- modal div -->
                                        <div class="mt-6" x-show="Entrega !== 'false'" x-cloak  x-data="{ Entrega: false }">

                                            <!-- Button (blue), duh! -->
                                            <!-- Dialog (full screen) -->
                                            <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
                                                style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);"
                                                x-show="Entrega">

                                                <!-- A basic modal dialog with title, body and one button to close -->
                                                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0 w-full md:py-12 xl:py-12 2xl:py-12 lg:py-12"
                                                    @click.away="Entrega = false"  style="
z-index: 9999;
">
                                                    {{-- modal body --}}
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <article style="background-color: aliceblue"
                                                            class="panel is-primary col-start-1 col-end-3">
                                                            <div class="px-6">
                                                                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                            border-dotted" style="background-color: aliceblue">
                                                                    Completa tu dirección de entrega
                                                                </p>
                                                            </div>

                                                            <div class="panel-block"
                                                                style="background-color: aliceblue">
                                                                <div>
                                                                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                        border-dotted" style="background-color: aliceblue">
                                                                        Nombre y apellido de quien recibe la compra:
                                                                    </p>
                                                                </div>
                                                                <div><input type="text" name="NuevoNombre"
                                                                        class="form-check-input" id="16GB">
                                                                    <label class="form-check-label"
                                                                        for="NuevoNombre">Nombre:</label>
                                                                    <input type="text" name="NuevoApellido"
                                                                        class="form-check-input" id="16GB">
                                                                    <label class="form-check-label"
                                                                        for="NuevoApellido">Apellido</label>
                                                                </div>
                                                            </div>
                                                            <div class="panel-block"
                                                                style="background-color: aliceblue">
                                                                <div>
                                                                    <h3>Dirección</h3>
                                                                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                            border-dotted" style="background-color: aliceblue">
                                                                        Ejemplo: Avenida Kennedy 9001, Las Condes
                                                                    </p>
                                                                </div>
                                                                <div><input type="text" name="NuevaDireccion"
                                                                        class="form-check-input" id="16GB">
                                                                    <label class="form-check-label"
                                                                        for="NuevaDireccion">Direccion:</label>
                                                                </div>

                                                            </div>
                                                            <div class="panel-block"
                                                                style="background-color: aliceblue">
                                                                <div>
                                                                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
border-dotted" style="background-color: aliceblue">
                                                                        Casa/depto:
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <input type="text" name="NuevaCasa"
                                                                        class="form-check-input" id="16GB">
                                                                    <label class="form-check-label"
                                                                        for="NuevaCasa">Casa:</label></div>

                                                            </div>
                                                        </article>
                                                    </div>

                                                    <!-- One big close button.  --->
                                                    <div class="mt-5 sm:mt-6">
                                                        <span class="flex w-full rounded-md shadow-sm">
                                                            <button @click="Entrega = false"
                                                                class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                                                                Close this modal!
                                                            </button>
                                                        </span>
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
                                        <label class="form-check-label"> Despacho programado Costo:
                                            $7.990
                                            <input type="radio"  value="2">
                                        </label>

                                    </div>

                                    <div class="panel-block" style="background-color: aliceblue">
                                        Fecha de retiro desde el 23 de marzo de 2021
                                        Que otra persona retire por mi
                                    </div>


                                </article>
                             
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
                                                    $149.990
                                                </p>
                                                <div class="text-gray-900 font-bold text-xl mb-2">GALAXY BUDS+</div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="py-1" role="none">
                                <div class="panel-block" style="background-color: aliceblue">

                                    <!--Card 1-->
                                    <div class=" w-full lg:max-w-full lg:flex">
                                        <div class="h-24 lg:h-24 lg:w-24 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                            style="background-image: url({{ url('../uploads/products/1/46mm.jpg') }});">
                                        </div>
                                        <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                                            style="background-color: aliceblue">
                                            <div class="mb-8">
                                                <p class="text-sm text-gray-600 flex items-center">
                                                    $259.990
                                                </p>
                                                <div class="text-gray-900 font-bold text-xl mb-2">GALAXY WATCH 46 MM
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
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
                    <span class="text-3xl">$410.000</span>
                </h3>
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
                    Puedes cambiar tus productos en cualquier tienda Paris hasta 30 días después de la fecha de
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

</div>


<script>
    const modal = document.querySelector('.modal');

    const showModal = document.querySelector('.show-modal');
    const closeModal = document.querySelectorAll('.close-modal');

    showModal.addEventListener('click', function (){
      modal.classList.remove('hidden')
    });

    closeModal.forEach(close => {
      close.addEventListener('click', function (){
        modal.classList.add('hidden')
      });
    });
</script>