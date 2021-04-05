<div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8">
    <div class="col-span-1"></div>
    <div class="lg:col-span-6 md:col-span-6 xl:col-span-6 2xl:col-span-6 col-span-12 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6"
        style="background-color: white">

        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                    <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                        <span class="text-3xl"><i class="fas fa-shopping-cart"></i> Mis Productos
                            ({{ count($reserva) }})</span>
                    </h3>
                </p>
            </div>

            <div class="panel-block" style="background-color: aliceblue">

            </div>


        </article>

        @foreach ($reserva as $res)
        <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                    tecnobuy.cl
                </p>
            </div>

            <div class="panel-block" style="background-color: aliceblue">

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
                            <p class="text-sm text-gray-600 flex items-center">
                                Cantidad: {{$res->reserva}}
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </article>


        @endforeach

    </div>
    <div class="lg:col-span-5 md:col-span-5 xl:col-span-5 2xl:col-span-5 col-span-12 lx:px-8 lg:pl-12 xl:pl-12 2xl:pl-12 md:px-4 xl:px-10 2xl:px-16"
        style="background-color: white">
        <article style="background-color: aliceblue" class="panel is-primary  ">

            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                    acciones
                </p>
            </div>
            <div class="px-6">
                <div class="toolbar toolbar-bottom grid grid-cols-12 grid-flow-row auto-rows-max" role="toolbar"
                    style="text-align: right;">

                    <button class="btn col-span-6 sw-btn-prev disabled" type=" button">Volver
                        al Paso
                        anterior</button>
                    <form action="@if(isset($pago['url'])){{$pago['url']}}@endif" method="POST" class="col-span-6">
                        <input type="hidden" name="token_ws" id="token_ws"
                            value="@if(isset($pago['token'])){{$pago['token']}}@endif">

                        <div class=" grid grid-cols-12">
                            <button type="submit" id="pay"
                                class="uppercase text-center text-sm px-16 py-4 w-full rounded-md font-bold text-primary-very-light col-span-12 bg-gradient-to-r from-yellow-300 to-blue-100">Pagar</button>
                        </div>
                    </form>
                </div>
            </div>



        </article>
        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                    <span class="text-3xl">Total</span>
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
                    @php
                    $total = $total + 20000;
                    @endphp
                    <span class="text-3xl"> $
                        @php
                        echo(number_format($total, 0,'','.'));
                        @endphp
                    </span>
                </h3>
            </div>
            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                    Sub-Total
                </p>
            </div>

            <div class="block" style="background-color: aliceblue">
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
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                    Despacho
                </p>
            </div>


            <div class="block" style="background-color: aliceblue">
                <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                    <span class="text-3xl">$20.000</span>
                </h3>
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
    </div>

</div>