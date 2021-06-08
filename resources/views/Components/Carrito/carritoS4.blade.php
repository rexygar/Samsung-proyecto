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
                            <div class="text-gray-900 font-bold text-base mb-2">{{ $res->descripcion }}</div>
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
                    <span class="text-2xl">Acciones</span>
                </p>
            </div>
            <div class="px-6">
                <div class="toolbar toolbar-bottom grid grid-cols-12 grid-flow-row auto-rows-max" role="toolbar"
                    style="text-align: right;">

                    <button
                        class="btn col-span-6 md:col-span-12 lg:col-span-6 xl:col-span-6 2xl:col-span-6 sw-btn-prev disabled"
                        type=" button">Volver
                        al Paso
                        anterior</button>
                    <form action="{{ route('checkout.init') }}" method="get"
                        class="col-span-6 md:col-span-12 lg:col-span-6 xl:col-span-6 2xl:col-span-6">
                        <div class=" grid grid-cols-12">
                            <button type="submit" id="pay"
                                class="uppercase text-center text-sm px-16 py-4 w-full rounded-md font-bold text-primary-very-light col-span-12   bg-yellow-300">Pagar</button>
                        </div>
                    </form>
                </div>
            </div>



        </article>
        <article style="background-color: aliceblue" class="panel is-primary  ">

            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                    <span class="text-2xl">Depositar</span>
                </p>
            </div>
            <div class="px-6 py-4">
                <div class="grid grid-cols-12" style="text-align: right;">
                    {{--  --}}


                    {{-- modal Despacho --}}
                    <div class="col-span-12" x-data="{ Despacho: false }">
                        <a class=" " href="#" @click="Despacho = true">
                            <label class="md:py-16 lg:py-16 font-bold">
                                <div class="">
                                    <button
                                        class="uppercase text-center text-sm px-16 py-4 w-full rounded-md font-bold text-primary-very-light col-span-12 bg-yellow-300"
                                        type=" button">Depositar</button>
                                </div>
                            </label>

                        </a>
                        {{--  --}}

                        <!-- modal div -->
                        <div class="mt-6" :class="{' block': Despacho, 'hidden': !Despacho}">

                            <!-- Button (blue), duh! -->
                            <!-- Dialog (full screen) -->
                            <div class="absolute top-0 md:fixed lg:fixed left-0 flex items-center justify-center w-full h-1/2 md:h-full lg:h-full xl:h-full 2xl:h-full block"
                                style="z-index: 99999;background-color: rgba(0, 0, 0, 0.5);">

                                <!-- A basic modal dialog with title, body and one button to close -->
                                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-0 lg:p-0 md:mx-0 w-full lg:mx-16 2xl:mx-16"
                                    @click.away="Despacho = false" style="z-index: 99999;">
                                    <!-- Success alert -->
                                    <div style="background-color: #000" class="flex p-4">
                                        <div class=" ">
                                            <div style="background-color: #000" class=" w-24">
                                                <img class="branding__logo img-fluid"
                                                    src="http://localhost:8000/img/logo_ok.png" max-width="95px" alt="">
                                            </div>
                                        </div>
                                        <div class="flex justify-between w-full">
                                            <div class="text-black">
                                                <h2 class=" pl-10 font-bold md:text-2xl  text-white">
                                                    Disponibilidad en
                                                    tiendas
                                                </h2>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- modal body --}}
                                    <div class="mt-3 text-center sm:mt-0 sm:mx-10 sm:text-left  ">
                                        <article style="" class=" col-start-1 col-end-3">
                                            <label class="py-2">
                                                <!--Card 1-->
                                                <div class=" w-full  lg:flex">

                                                    <div
                                                        class=" rounded-b lg:rounded-b-none  w-full lg:rounded-r p-4 leading-normal">
                                                        <div class="mb-8">
                                                            <p class=" tracking-normal py-2 border-b-2 border-opacity-25 font-bolder
                                                            border-dotted">
                                                                <strong class="text-base"> Banco:</strong>
                                                                --------
                                                            </p>
                                                            <p class=" tracking-normal py-2 border-b-2 border-opacity-25 font-bolder
                                                            border-dotted">
                                                                <strong class="text-base"> Banco:</strong>
                                                                --------
                                                            </p>
                                                            <p class=" tracking-normal py-2 border-b-2 border-opacity-25 font-bolder
                                                            border-dotted">
                                                                <strong class="text-base"> Banco:</strong>
                                                                --------
                                                            </p>
                                                            <p class=" tracking-normal py-2 border-b-2 border-opacity-25 font-bolder
                                                            border-dotted">
                                                                <strong class="text-base"> Banco:</strong>
                                                                --------
                                                            </p>
                                                            <p class=" tracking-normal py-2 border-b-2 border-opacity-25 font-bolder
                                                            border-dotted">
                                                                <strong class="text-base"> Banco:</strong>
                                                                --------
                                                            </p>



                                                            <div class="text-2xl col-span-12 ">

                                                                <span class="flex w-full rounded-md shadow-sm py-3">
                                                                    <button @click="Despacho = false"
                                                                        class="inline-flex justify-center font-boldpx-6 py-3 text-white bg-blue-700 w-full rounded hover:bg-black">
                                                                        Cerrar
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                    {{-- end modal --}}
                    {{--  --}}
                </div>
            </div>
        </article>
        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                    <span class="text-2xl">Total</span>
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
                    $total = $total + Session::get('precio_comuna');
                    @endphp
                    <span class="text-3xl" id="total_total"> $
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
                    <span class="text-3xl" id='msg'>${{ number_format(Session::get('precio_comuna'),0,'','.') }}</span>
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
                    Puedes cambiar tus productos en cualquier tienda TecnoBuy hasta 30 días después de la fecha de
                    compra.
                </p>
            </div>
        </article>
    </div>

</div>

<script>
    function getMessage() {
       $.ajax({
          type:'POST',
          url:'/getmsg',
          data:'_token = <?php echo csrf_token() ?>',
          success:function(data) {
             $("#msg").html(data.msg);
          }
       });
    }
</script>