<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8">
    <div class="col-span-1"></div>
    <div class="lg:col-span-6 md:col-span-6 xl:col-span-6 2xl:col-span-6 col-span-12 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6"
        style="background-color: white">
        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                    <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                        <span class="text-3xl"> Por favor, ingresa tu región y comuna</span>
                    </h3>
                </p>
            </div>

        </article>

        <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                  border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                    tecnobuy.cl
                </p>
            </div>

            <div class="panel-block" style="background-color: aliceblue">

                <!--Card 1-->
                <div class="w-full flex lg:max-w-full lg:flex">

                    <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                        style="background-color: aliceblue">
                        <div class="mb-8">

                            Al seleccionar las opciones podrás ver los tipos de entrega


                            Región

                            {{-- <select id="regiones" formcontrolname="selectRegion" class="divide-y divide-gray-100 inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                            </select>
                            <div class="py-5"></div>
                            <select id="comunas" formcontrolname="selectComuna" class="divide-y divide-gray-100 inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                
                            </select> --}}
                            <div class="py-5"></div>
                            <input type="hidden" id="urlGuardar" value="{{ route('comuna') }}">
                            <button id="guardar" class="text-lg font-semibold 
                                bg-green-500 w-full text-white rounded-lg px-6 py-3 
                                 block shadow-xl hover:text-white hover:bg-black" type="button">Guardar
                                cambios</button>
                            <div class="toolbar toolbar-bottom grid grid-cols-12 grid-flow-row auto-rows-max"
                                role="toolbar" style="text-align: right;">

                                <button class="btn col-span-6 sw-btn-prev disabled" type=" button">Volver
                                    al Paso
                                    anterior</button>
                                <button class="btn col-span-6 sw-btn-next " type=" button">Ir al
                                    siguiente
                                    Paso</button>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </article>

    </div>
    <div class="lg:col-span-5 md:col-span-5 xl:col-span-5 2xl:col-span-5 col-span-12 lx:px-8 lg:pl-12 xl:pl-12 2xl:pl-12 md:px-4 xl:px-10 2xl:px-16"
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
                            Mi Carrito  ({{ count($reserva) }})</h4>
                        <div x-show="selected == 0" class="border py-4 px-2 overflow-y-auto h-32">

                            @foreach ($reserva as $res)
                            <div class="py-1" role="none">
                                <div class="panel-block" style="background-color: aliceblue">

                                    <!--Card 1-->
                                    <div class="w-full flex lg:max-w-full lg:flex">
                                        <div class="h-24 lg:h-24 lg:w-24 w-24 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                            style="background-image: url({{ url('/uploads/products/1/buds.jpg') }});background-repeat: no-repeat;background-size: contain;">
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

</div>