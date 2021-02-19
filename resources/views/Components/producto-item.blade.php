<main class="profile-page">

    <section class="relative  bg-gray-300 pt-60 top-auto">
        <div class="">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 -mt-64">
                @include('Components.breadcrumbs-producto')
                {{-- <div class="lg:px-6 md:px-0" style='background-color:#464646;
                background-size:cover auto ;z-index:0;'> --}}
                <div class="lg:px-6 md:px-0" style='background-image: url({{url('../uploads/products/5/bg.jpg')}});background-repeat: no-repeat;
                background-size: auto 500px;z-index:0;'>
                    <div class="flex flex-wrap justify-center">

                        <div class="w-full lg:w-full lg:order-1"
                            class="absolute top-0 w-full h-full bg-center bg-cover">
                            <div class="justify-items-start md:justify-items-center py-4 lg:pt-4 pt-8">


                                <section class="relative py-20 ">
                                    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                                        style="height: 80px; transform: translateZ(0px);">
                                        {{-- <svg class="absolute bottom-0 overflow-hidden"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1"
                                            viewBox="0 0 2560 100" x="0" y="0">
                                            <polygon class="text-white fill-current" points="2560 0 2560 100 0 100">
                                            </polygon>
                                        </svg> --}}
                                    </div>
                                    @for ($i = 0; $i < 1; $i++) <div class="container lg:mx-auto">
                                        <div class="grid grid-cols-7 md:grid-cols-7  gap-4 ">
                                            <div class="grid-rows-1 row-span-2 col-span-1 w-1/2">
                                                <div class="swiper-container gallery-thumbs">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide" style="height: auto;width: auto;">
                                                            <img alt="..." class="pb-12"
                                                                src="../uploads/products/1/1.jpg" />
                                                        </div>
                                                        <div class="swiper-slide" style="height: auto;width: auto;">
                                                            <img alt="..." class="" src="../uploads/products/3/1.jpg" />
                                                        </div>
                                                        <div class="swiper-slide" style="height: auto;width: auto;">
                                                            <img alt="..." class="pb-12"
                                                                src="../uploads/products/1/1.jpg" />
                                                        </div>
                                                        <div class="swiper-slide" style="height: auto;width: auto;">
                                                            <img alt="..." class="" src="../uploads/products/2/1.jpg" />
                                                        </div>
                                                        <div class="swiper-slide" style="height: auto;width: auto;">
                                                            <img alt="..." class="" src="../uploads/products/2/1.jpg" />
                                                        </div>
                                                        <div class="swiper-slide" style="height: auto;width: auto;">
                                                            <img alt="..." class="" src="../uploads/products/3/1.jpg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w-full md:w-full col-span-3 ml-auto mr-auto lg:px-4 md:pr-36">
                                                <div class="swiper-container row-span-full">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        <!-- Slides -->
                                                        <div class="swiper-slide align-middle"> <img alt="..."
                                                                class="lg:max-w-full align-middle md:max-w-md"
                                                                src="../uploads/products/1/1.jpg" /></div>
                                                        <div class="swiper-slide align-middle"> <img alt="..."
                                                                class="lg:max-w-full align-middle md:max-w-md"
                                                                src="../uploads/products/3/1.jpg" /></div>
                                                        <div class="swiper-slide align-middle"> <img alt="..."
                                                                class="lg:max-w-full align-middle md:max-w-md"
                                                                src="../uploads/products/1/1.jpg" /></div>
                                                        <div class="swiper-slide align-middle"> <img alt="..."
                                                                class="lg:max-w-full align-middle md:max-w-md"
                                                                src="../uploads/products/2/1.jpg" /></div>
                                                        <div class="swiper-slide align-middle"> <img alt="..."
                                                                class="lg:max-w-full align-middle md:max-w-md"
                                                                src="../uploads/products/2/1.jpg" /></div>
                                                        <div class="swiper-slide align-middle"> <img alt="..."
                                                                class="lg:max-w-full align-middle md:max-w-md"
                                                                src="../uploads/products/3/1.jpg" /></div>
                                                    </div>
                                                    <!-- If we need pagination -->
                                                    <div class="swiper-pagination"></div>

                                                    <!-- If we need navigation buttons -->
                                                    <div class="swiper-button-prev"></div>
                                                    <div class="swiper-button-next"></div>

                                                    <!-- If we need scrollbar -->
                                                    <div class="swiper-scrollbar"></div>
                                                </div>

                                            </div>
                                            <form method="get" action="" class="col-span-3 ">
                                                <input type="hidden" id="urlCarrito" value="{{ route('carrito.add') }}">
                                                <input type="hidden" id="urlRedireccion" value="{{ route('carrito') }}">

                                                <div
                                                    class="w-full md:min-w-full ml-auto mr-auto col-span-2  lg:px-4 md:px-0">
                                                    <div class="md:pr-6 md:-mr-16 lg:pr-16">
                                                        <h3 class="text-5xl md:text-4xl font-bold text-gray-50">
                                                            {{$product->Descripcion}}</h3>
                                                        <p class=" text-lg leading-relaxed  text-gray-50">
                                                            {{$product->SKU}}
                                                        </p>
                                                        <p class=" text-sm leading-relaxed font-light text-blue-500">
                                                            STOCK
                                                            DISPONIBLE
                                                        </p>
                                                        <div class="panel-header md:container md:mx-auto"
                                                            style="z-index: 99;background: transparent;">
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
                                                            <span class="text-gray-50 font-light">
                                                                5.0 (1)
                                                            </span>
                                                        </div>

                                                        <ul class="list-none lg:mt-6 -md:mt-2">
                                                            <li class="py-2">
                                                                <div class="flex items-center">
                                                                    <div>
                                                                        <span
                                                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                                                class="fas fa-fingerprint"></i></span>
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-gray-200 font-light">
                                                                            LCD de silicio policristalino a baja
                                                                            temperatura
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="py-2">
                                                                <div class="flex items-center">
                                                                    <div>
                                                                        <span
                                                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                                                class="fas fa-fingerprint"></i></span>
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-gray-200 font-light">S Pen con
                                                                            latencia ultrabaja</h4>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="py-2">
                                                                <div class="flex items-center">
                                                                    <div>
                                                                        <span
                                                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                                                class="fas fa-fingerprint"></i></span>
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-gray-200 font-light">Batería
                                                                            inteligente de 8000 mAh</h4>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <h3 class="text-5xl font-extrabold text-gray-50 pb-4">
                                                            ${{$product->Precio}}</h3>
                                                        <input type="hidden" id="precio" value="{{ $product->Precio }}">
                                                        <div class="flex flex-wrap">
                                                            {{ csrf_field() }}
                                                            <div class="md:w-1/2 lg:w-1/3 md:px-6 px-6 flex py-6 justify-center"
                                                                style="background: white;">

                                                                @foreach ($StockColor as $colorstock)
                                                                <div class="justify-items-auto md:w-full md:px-3" style="height:25px;width:25px;
                                                                    margin:5px;display:inline-block;border-width: 1px;
                                                                                 border-style: solid;
                                                                                 border-color: black;
                                                                    background-color: {{$colorstock['color']}}">
                                                                </div>
                                                                <input type="radio" name="color_group"
                                                                    style="outline:none;appearance: none;"
                                                                    value="{{$colorstock['color']}}">
                                                                <input type="hidden" id="stock" name="stock"
                                                                    value="{{$colorstock['stock']}}">

                                                                @endforeach
                                                                <!-- /// -->


                                                            </div>
                                                            <input type="hidden" id="id_producto" name="id_producto"
                                                                value="{{$product->SKU}}">
                                                            <div class="md:w-1/2 lg:w-1/2 lg:px-6 md:px-0 py-6">
                                                                <p
                                                                    class=" md:pl-2 text-base md:text-sm leading-relaxed md:w-full md:pb-4 text-gray-50">
                                                                    COLORES DISPONIBLES
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-wrap py-12">
                                                            <div class="md:w-auto lg:w-1/2 ">
                                                                <img class="relative" src="/img/despacho.PNG" alt="">
                                                                {{-- <img class="absolute"
                                                                    src="/public/img/despacho a domicilio.PNG" alt=""> --}}
                                                                {{-- <div class="absolute image is-128x128 ">
                                                                <img class=" is-rounded"
                                                                    src="https://bulma.io/images/placeholders/128x128.png">
                                                            </div> --}}
                                                                {{-- <div style="display:inline-block;border-width: 1px;
                                                                 border-style: solid;
                                                                 border-color: #2473b6;
                                                    background-color: #2473b6" class="lg:p-4 md:p-2">
                                                                    <p
                                                                        class=" text-sm font-extrabold leading-relaxed  text-gray-50">
                                                                        DESPACHO A DOMICILIO
                                                                    </p>

                                                                    <div style="height: 64divx; width: 64px;z-index: 999;"
                                                                        class="absolute  rounded-full bg-gray-900">
                                                                        <i class="fa fa-map-marker absolute text-gray-50"
                                                                            style="z-index: 9999;"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <h4
                                                                        class="text-yellow-300 text-xs justify-end font-light">
                                                                        VER COSTO DE
                                                                        ENVIO
                                                                    </h4>
                                                                </div> --}}
                                                            </div>
                                                            <div class="md:w-auto lg:w-1/2 ">
                                                                <img class="relative" src="/img/retiro.PNG" alt="">
                                                                {{-- <img class="absolute"
                                                                    src="/public/img/despacho a domicilio.PNG" alt=""> --}}
                                                                {{-- <div class="absolute image is-128x128 ">
                                                                <img class=" is-rounded"
                                                                    src="https://bulma.io/images/placeholders/128x128.png">
                                                            </div> --}}
                                                                {{-- <div style="display:inline-block;border-width: 1px;
                                                                 border-style: solid;
                                                                 border-color: #2473b6;
                                                    background-color: #2473b6" class="lg:p-4 md:p-2">

                                                                    <p
                                                                        class=" text-sm font-extrabold leading-relaxed  text-gray-50">
                                                                        RETIRO EN TIENDA
                                                                    </p>
                                                                    <h4
                                                                        class="text-yellow-300 text-xs justify-end font-light">
                                                                        VER TIENDAS
                                                                        DISPONIBLES</h4>
                                                                </div> --}}
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="flex flex-wrap">
                                                        <div class="md:w-1/2 px-6 py-6">
                                                            <div class="w-1/2">
                                                                <a style="display:inline-block;border-width: 1px;
                                                                    border-style: solid;
                                                                    border-color: #2473b6;
                                                       /* background-color: #2473b6" href="{{route('carrito')}}"></a>
                                                            </div>

                                                        </div>
                                                        <div class="md:w-1/2 px-6 py-6">

                                                        </div>
                                                    </div>

                                                </div>
                                        </div>

                                        </form>


                            </div>
                        </div>
                        @endfor
    </section>
    <script src="https://use.fontawesome.com/5a91d57253.js"></script>
</main>