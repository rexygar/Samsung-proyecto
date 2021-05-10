<style>
    input[type="radio"],
    input[type="checkbox"] {
        position: relative;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        outline: none;
    }

    input[type="checkbox"]+span:before {
        width: 16px;
        height: 16px;
        border: 1px solid #000;
        content: "\2714";
        color: transparent;
        display: inline-block;
        font-size: 13px;
        margin-right: 5px;
        text-align: center;
        /* new code notice me! */
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
</style>

@for ($i = 0; $i < 1; $i++) <main class="profile-page">

    <section class="relative  bg-gray-300 pt-60 top-auto">
        <div class="">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 -mt-64">
                @include('Components.breadcrumbs-producto')

                <div class="lg:px-6 md:px-0" style="background-image: url({{ url('../uploads/products/5/bg.jpg') }});background-repeat: no-repeat; background-size: auto
                        500px;z-index:0;">
                    <div class="flex flex-wrap justify-center">

                        <div class="w-full lg:w-full lg:order-1"
                            class="absolute top-0 w-full h-full bg-center bg-cover">
                            <div class="justify-items-start md:justify-items-center py-4 lg:pt-4 md:pt-8">


                                <section class="relative pt-10 md:py-20 lg:py-20 md:pb-0 lg:pb-16  ">
                                    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                                        style="height: 80px; transform: translateZ(0px);">
                                        {{-- <svg class="absolute bottom-0 overflow-hidden"
                                                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                                                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                                                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100">
                                                </polygon>
                                            </svg> --}}
                                    </div>


                                    <div class="container mx-auto">
                                        <div
                                            class="grid grid-cols-6 md:grid-cols-6 lg:grid-cols-6 md:auto-rows-min  gap-4">
                                            <div
                                                class="  md:col-span-3 lg:col-span-3 md:row-span-1 lg:row-span-1  col-span-6 float-right md:col-start-4  lg:col-start-4 lg:px-4 md:px-0">

                                                <h3
                                                    class="lg:text-2xl md:text-2xl text-2xl font-bold text-center sm:text-left text-gray-50 py-16 md:py-0 lg:py-0">
                                                    {{ $product->Descripcion }}</h3>

                                            </div>
                                            <div
                                                class="w-full md:w-full col-span-6 md:col-span-3 lg:col-span-3 md:col-start-1 md:row-span-2 lg:row-span-2 lg:col-start-1  md:px-4 lg:px-4 px-0 lg:-mt-16 md:-mt-16 -mt-16">
                                                <img alt="..." class="max-w-full rounded-lg"
                                                    src="/uploads/products/1/1.jpg" />
                                            </div>

                                            <div
                                                class="w-full md:min-w-full md:col-span-3 md:float-right lg:float-right md:row-span-1 lg:row-span-1 lg:col-span-3 col-span-6  lg:px-4 md:px-0">
                                                <div
                                                    class="md:pr-6 lg:pr-16  md:bg-transparent lg:bg-transparent bg-gray-400 ">

                                                    <p
                                                        class=" text-lg leading-relaxed text-center sm:text-left text-gray-50">
                                                        {{ $product->SKU }}
                                                    </p>
                                                    <p id="stockdisponible"
                                                        class=" text-xl leading-relaxed text-center sm:text-left md:w-2/4 lg:w-1/4  py-3 md:py-0 lg:py-0 xl:py-0 2xl:py-0  w-full font-bold bg-yellow-500  text-white">
                                                        STOCK
                                                        DISPONIBLE
                                                    </p>
                                                    <div class="md:container md:mx-auto text-center sm:text-left  md:bg-transparent lg:bg-transparent bg-gray-400 md:mb-0"
                                                        style="z-index: 99;">
                                                        <span class="material-icons text-xl text-yellow-300">
                                                            grade
                                                        </span>
                                                        <span class="material-icons text-xl text-yellow-300">
                                                            grade
                                                        </span>
                                                        <span class="material-icons text-xl text-yellow-300">
                                                            grade
                                                        </span>
                                                        <span class="material-icons text-xl text-yellow-300">
                                                            grade
                                                        </span>
                                                        <span class="material-icons text-xl text-gray-600">
                                                            grade
                                                        </span>
                                                        <span class="text-gray-50 font-light md:visible invisible">
                                                            5.0 (1)
                                                        </span>
                                                    </div>
                                                    <h3
                                                        class="md:text-5xl lg:text-5xl  text-3xl font-extrabold text-gray-50 pb-4  md:bg-transparent lg:bg-transparent bg-gray-400  text-center sm:text-left">
                                                        ${{ number_format($product->Precio, 0, ',', '.') }}
                                                    </h3>
                                                </div>
                                                <form method="get" action="" class="col-span-3 ">
                                                    <input type="hidden" id="urlCarrito"
                                                        value="{{ route('carrito.add') }}">
                                                    <input type="hidden" id="urlRedireccion"
                                                        value="{{ route('carrito') }}">
                                                    <input type="hidden" id="id_producto" name="id_producto"
                                                        value="{{ $product->SKU }}">
                                                    <input type="hidden" id="descripcion" name="descripcion"
                                                        value="{{ $product->Descripcion }}">
                                                    <input type="hidden" id="precio" value="{{ $product->Precio }}">
                                                    <div class="flex flex-wrap md:pt-44 lg:pt-44 xl:pt-44">
                                                        {{ csrf_field() }}
                                                        <div class="md:w-1/2 lg:w-1/3 xl:w-1/3 2xl:w-1/3  w-1/3 md:px-6 px-6 flex py-6 justify-center "
                                                            style="background: white;">
                                                            @php
                                                            $ff = 0;
                                                            @endphp
                                                            @foreach ($StockColor as $colorstock)
                                                            @if ($colorstock->stock > 0)

                                                            <div>
                                                                <label id="radio"
                                                                    class="rounded-full h-12 w-12 flex items-center justify-center border-2 border-dotted border-gray-500"
                                                                    style="z-index: 9999;
                                                                        background-color: {{ $colorstock->color }}"
                                                                    for="color_group{{ $ff }}">

                                                                    {{ $colorstock->stock }}
                                                                    <input type="radio" id="color_group{{ $ff++ }}"
                                                                        name="color_group" style="appearance: none"
                                                                        value="{{ $colorstock->Cod_EstiloColor }}"
                                                                        data-stock="{{ $colorstock->stock }}">


                                                                </label>
                                                            </div>


                                                            @endif
                                                            {{-- <input type="text" class=" " id="stock"
                                                                                                                    name="stock"
                                                                                                                    value="{{ $colorstock->stock }}"
                                                            disabled>
                                                            --}}


                                                            @endforeach
                                                        </div>
                                                        <!-- /// -->

                                                        <div
                                                            class="md:w-1/2 lg:w-1/3 xl:w-1/3 2xl:w-1/3  w-1/3lg:px-6 md:px-0 py-6 md:py-6 ">
                                                            <p
                                                                class="md:pl-2 text-base md:text-base leading-relaxed md:w-full md:pb-4 md:text-gray-50 lg:text-gray-50 text-gray-600 md:text-left lg:text-left text-center">
                                                                COLORES DISPONIBLES
                                                            </p>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-6 md:grid-cols-6 lg:-mb-20 gap-4 lg:-mt-5 md:-mt-2">
                                            <div
                                                class=" col-span-6 md:col-span-3  lg:col-span-6   lg:col-start-4  md:col-start-4 py-8 lg:py-0 md:py-0">
                                                <div class="md:flex md:flex-wrap  flex flex-wrap">

                                                    {{-- modal Despacho --}}
                                                    <div class="md:w-1/2 lg:w-1/2 xl:w-1/2 2xl:w-1/2 w-1/2 "
                                                        x-data="{ Despacho: false }">
                                                        <a class=" " href="#" @click="Despacho = true">
                                                            <label class="md:py-16 lg:py-16 font-bold">
                                                                <div class="">
                                                                    <button type="button"
                                                                        class="sm:text-md text-sm no-underline inline-block uppercase md:px-12 lg:px-12 xl:px-12 2xl:px-12 py-5 px-3  font-bold max-w-max shadow-sm hover:shadow-lg rounded-md bg-black text-white hover:text-yellow-300 "
                                                                        style="border-color: #F5DF4D">
                                                                        COSTOS DE DESPACHO
                                                                        <i class="fas fa-truck text-5xl"
                                                                            style="font-size: 16px"></i></button>
                                                                </div>
                                                            </label>

                                                        </a>
                                                        {{--  --}}

                                                        <!-- modal div -->
                                                        <div class="mt-6"
                                                            :class="{' block': Despacho, 'hidden': !Despacho}">

                                                            <!-- Button (blue), duh! -->
                                                            <!-- Dialog (full screen) -->
                                                            <div class="absolute top-0 left-0 flex items-center  pt-40 md:pt-16 justify-center w-full h-1/2 md:h-full lg:h-full xl:h-full 2xl:h-full"
                                                                style="z-index: 99999;">

                                                                <!-- A basic modal dialog with title, body and one button to close -->
                                                                <div class="h-auto   mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-0 lg:p-0 md:mx-0 md:pr-0   lg:mx-0 w-full   md:-mt-16 xl:-mt-16 2xl:-mt-16 lg:-mt-16"
                                                                    @click.away="Despacho = false"
                                                                    style="z-index: 9999;">
                                                                    <!-- Success alert -->
                                                                    <div style="background-color: #000"
                                                                        class="flex p-4">
                                                                        <div class=" ">
                                                                            <div style="background-color: #000"
                                                                                class=" w-24">
                                                                                <img class="branding__logo img-fluid"
                                                                                    src="http://localhost:8000/img/logo_ok.png"
                                                                                    max-width="95px" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex justify-between w-full">
                                                                            <div class="text-black">
                                                                                <h2
                                                                                    class=" pl-10 font-bold md:text-2xl  text-white">
                                                                                    Disponibilidad en
                                                                                    tiendas
                                                                                </h2>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    {{-- modal body --}}
                                                                    <div
                                                                        class="mt-3 text-center sm:mt-0 sm:mx-10 sm:text-left  ">
                                                                        <article style=""
                                                                            class=" col-start-1 col-end-3">
                                                                            <label class="py-2">
                                                                                <!--Card 1-->
                                                                                <div class=" w-full  lg:flex">

                                                                                    <div
                                                                                        class=" rounded-b lg:rounded-b-none  w-full lg:rounded-r p-4 leading-normal">
                                                                                        <div class="mb-8">
                                                                                            <div
                                                                                                class="py-4 font-bold font-xl uppercase">
                                                                                                <h2><span>Selecciona la
                                                                                                        Región de
                                                                                                        despacho</span>
                                                                                                </h2>
                                                                                            </div>

                                                                                            <select id="regiones"
                                                                                                formcontrolname="selectRegion"
                                                                                                class="text-sm w-full block px-3 py-2 rounded-lg bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white  focus:border-gray-600  focus:outline-none">
                                                                                            </select>
                                                                                            <div class="py-2"></div>
                                                                                            <select id="comunas"
                                                                                                formcontrolname="selectComuna"
                                                                                                class="text-sm w-full block px-3 py-2 rounded-lg bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white  focus:border-gray-600  focus:outline-none">

                                                                                            </select>
                                                                                            <div class="py-2">
                                                                                                <p
                                                                                                    class=" tracking-normal py-1 ">
                                                                                                    El valor de despacho
                                                                                                    para la comuna
                                                                                                    seleccionada es:
                                                                                                    <br><strong
                                                                                                        class="text-xl"
                                                                                                        id="RegionSlected"></strong>
                                                                                                    <br>
                                                                                                    <strong
                                                                                                        class="text-xl"
                                                                                                        id="ComunaSlected"></strong>
                                                                                                    <br>
                                                                                                    <strong
                                                                                                        class="text-xl"
                                                                                                        id="pre_despacho"></strong>
                                                                                                </p>



                                                                                            </div>
                                                                                            {{-- <input type="hidden"
                                                                                                id="urlGuardar"
                                                                                                value="{{ route('comuna') }}">
                                                                                            --}}

                                                                                            <div
                                                                                                class="text-2xl col-span-12 ">

                                                                                                <span
                                                                                                    class="flex w-full rounded-md shadow-sm py-3">
                                                                                                    <button
                                                                                                        @click="Despacho = false" 
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

                                                    {{-- modal retiro --}}
                                                    <div class="md:w-1/2 lg:w-1/2 xl:w-1/2 2xl:w-1/2 w-1/2 "
                                                        x-data="{ Retiro: false }">
                                                        <a class=" " href="#" @click="Retiro = true">
                                                            <label class="md:py-16 lg:py-16 font-bold">

                                                                <div class="">
                                                                    <button type="button"
                                                                        class="sm:text-md text-sm no-underline inline-block uppercase md:px-12 lg:px-12 xl:px-12 2xl:px-12 py-5 px-3  font-bold max-w-max shadow-sm hover:shadow-lg rounded-md bg-black text-white hover:text-yellow-300 "
                                                                        style="border-color: #F5DF4D">
                                                                        DISPONIBILIDAD EN TIENDAS
                                                                        <i class="fa fa-map-marker text-5xl"
                                                                            aria-hidden="true"
                                                                            style="font-size: 16px"></i></button>
                                                                </div>
                                                            </label>

                                                        </a>
                                                        {{--  --}}

                                                        <!-- modal div -->
                                                        <div class="mt-6"
                                                            :class="{' block': Retiro, 'hidden': !Retiro}">

                                                            <!-- Button (blue), duh! -->
                                                            <!-- Dialog (full screen) -->
                                                            <div class="absolute top-0 left-0 flex items-center justify-center pt-36 md:pt-16 w-full h-1/2 md:h-full lg:h-full xl:h-full 2xl:h-full"
                                                                style="z-index: 99999;">

                                                                <!-- A basic modal dialog with title, body and one button to close -->
                                                                <div class="h-auto   mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-0 lg:p-0 md:mx-0 md:pr-0   lg:mx-0 w-full   md:-mt-16 xl:-mt-16 2xl:-mt-16 lg:-mt-16"
                                                                    @click.away="Retiro = false" style="z-index: 9999;">
                                                                    <!-- Success alert -->
                                                                    <div style="background-color: #000"
                                                                        class="flex p-4">
                                                                        <div class=" ">
                                                                            <div style="background-color: #000"
                                                                                class=" w-24">
                                                                                <img class="branding__logo img-fluid"
                                                                                    src="http://localhost:8000/img/logo_ok.png"
                                                                                    max-width="95px" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex justify-between w-full">
                                                                            <div class="text-black">
                                                                                <h2
                                                                                    class=" pl-10 font-bold md:text-2xl  text-white">
                                                                                    Disponibilidad en
                                                                                    tiendas
                                                                                </h2>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    {{-- modal body --}}
                                                                    <div
                                                                        class="mt-3 text-center sm:mt-0 sm:mx-10 sm:text-left ">
                                                                        <article style=""
                                                                            class=" col-start-1 col-end-3">

                                                                            @foreach ($tiendaStock as $tienda)
                                                                            <label class="py-2">
                                                                                <div
                                                                                    class="bg-white hover:border-green-300 my-2 box focus:bg-yellow-300 focus:border-black focus:border-2 border-2 font-bolder">

                                                                                    <strong
                                                                                        class="text-base">{{$tienda->Tienda}}</strong>
                                                                                    <br>
                                                                                    <strong class="text-base"> Unidades
                                                                                        Disponibles:
                                                                                        {{$tienda->stock}}</strong>



                                                                                </div>
                                                                            </label>
                                                                            @endforeach





                                                                        </article>
                                                                    </div>

                                                                    <!-- One big close button.  --->
                                                                    <div class="mt-5 sm:mt-6 pb-6 px-10 ">

                                                                        <div
                                                                            class="grid-cols-12 grid grid-flow-row auto-rows-auto gap-2">
                                                                            <div class="text-2xl col-span-12 ">

                                                                                <span
                                                                                    class="flex w-full rounded-md shadow-sm">
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


                                                        {{--  --}}
                                                    </div>

                                                    {{-- end modal --}}

                                                </div>
                                            </div>

                                            <div class=" col-span-6 md:col-span-3 md:col-start-4 lg:col-start-4">

                                                <div class="grid grid-cols-2">
                                                    <div
                                                        class="md:px-0 md:py-0 col-span-1 lg:px-2 bg-gray-300 lg:py-2 px-6 py-6 grid grid-cols-2  ">
                                                        <div
                                                            class="inline-block md:col-span-2 lg:col-span-1 align-middle ">
                                                            <p
                                                                class="pt-3 inline-block align-middle lg:text-base font-bold md:text-sm leading-relaxed    text-black">
                                                                CANTIDAD
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="inline-block md:col-span-2 lg:col-span-1 align-middle ">
                                                            <input type="hidden" name="Cod_Tienda"
                                                                value="{{$tiendaStock[0]->Cod_Tienda}}" id="Cod_Tienda">
                                                            <input type="number" id="cantidad"
                                                                style="outline:none;appearance: none;" min="1" value=""
                                                                class="text-md w-5/6 inline-block align-middle  rounded-lg md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <button id="carrito" type="button"
                                                            style="background: rgb(19,124,117);
                                                                                                    background: linear-gradient(90deg, rgba(19,124,117,1) 14%, rgba(10,82,109,1) 54%, rgba(14,69,114,1) 100%);"
                                                            class="uppercase px-2 py-5  font-bold text-white max-w-max shadow-sm hover:shadow-lg   bg-gradient-to-r hover:from-green-400 hover:to-blue-500"><i
                                                                class="fas fa-shopping-cart"></i> AGREGAR A MIS
                                                            COMPRAS</button>
                                                    </div>
                                                </div>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://use.fontawesome.com/5a91d57253.js"></script>
    </main>
    @endfor
    <link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
    <script src="{{ asset('js/toastr/toastr.js') }}"></script>
    <script src="{{ asset('js/producto.js') }}"></script>