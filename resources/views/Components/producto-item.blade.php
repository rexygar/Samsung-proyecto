
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
                                                <div class="md:pr-6 lg:pr-16  md:bg-transparent lg:bg-transparent bg-gray-400 ">

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

                                                            <label class="text-base py-0 text-center"
                                                                style="z-index: 9999" for="color_group{{ $ff }}">

                                                                <div id="radio"
                                                                    class="justify-items-auto md:w-full md:px-3 px-6 "
                                                                    style="height:25px;width:25px;
                                                                    margin:5px;display:inline-block;border-width: 1px;
                                                                                border-style: solid;
                                                                                border-color: black;
                                                                                background-color: {{ $colorstock->color }}">

                                                                    <p class="inline-block"> {{ $colorstock->stock }}
                                                                    </p>

                                                                    <input type="radio" id="color_group{{ $ff++ }}"
                                                                        name="color_group"
                                                                        value="{{ $colorstock->Cod_EstiloColor }}"
                                                                        data-stock="{{ $colorstock->stock }}">

                                                                </div>

                                                            </label>


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
                                                                class="md:pl-2 text-base md:text-sm leading-relaxed md:w-full md:pb-4 md:text-gray-50 lg:text-gray-50 text-gray-600 md:text-left lg:text-left text-center">
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

                                                    <div class="md:w-1/2 lg:w-1/3 xl:w-1/3 2xl:w-1/3 w-1/2 ">
                                                        <img class="relative" src="/img/despacho.PNG" alt="">
                                                    </div>
                                                    <div class="lg:w-1/6">

                                                    </div>
                                                    <div class="md:w-1/2 lg:w-1/3 xl:w-1/3 2xl:w-1/3 w-1/2 ">
                                                        <img class="relative" src="/img/retiro.PNG" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-span-6 md:col-span-3 md:col-start-4 lg:col-start-4">

                                                <div class="grid grid-cols-2">
                                                    <div
                                                        class="md:px-0 md:py-0 col-span-1 lg:px-2 bg-gray-300 lg:py-2 px-6 py-6 grid grid-cols-2  ">
                                                        <div class="inline-block align-middle ">
                                                            <p
                                                                class="pt-3 inline-block align-middle lg:text-base font-bold md:text-sm leading-relaxed    text-black">
                                                                CANTIDAD
                                                            </p>
                                                        </div>
                                                        <div class="inline-block align-middle ">
                                                            <input type="number" id="cantidad"
                                                                style="outline:none;appearance: none;" min="1" value=""
                                                                class="text-md w-5/6 inline-block align-middle  rounded-lg md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <button id="carrito" type="button"
                                                            style="background: rgb(19,124,117);
                                                                                                    background: linear-gradient(90deg, rgba(19,124,117,1) 14%, rgba(10,82,109,1) 54%, rgba(14,69,114,1) 100%);"
                                                            class="uppercase px-2 py-5 bg-blue-500 font-bold text-white max-w-max shadow-sm hover:shadow-lg"><i
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