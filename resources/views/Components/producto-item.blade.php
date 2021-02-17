<main class="profile-page">

    <section class="relative py-16 bg-gray-300 pt-60 top-auto">
        <div class="container mx-auto">
            <div
                class="relative flex flex-col min-w-0 break-words pt-10 bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                @include('Components.breadcrumbs-producto')
                <div class="px-6 " style='background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");background-repeat: no-repeat;
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
                                    @for ($i = 0; $i < 1; $i++) <div class="container mx-auto">
                                        <div class="grid grid-cols-2 md:grid-cols-2  gap-4 ">
                                            <div class="w-full md:w-full ml-auto mr-auto px-4">
                                                <img alt="..." class="max-w-full rounded-lg"
                                                    src="../uploads/products/1/1.jpg" />
                                            </div>
                                            <form method="post" action="/addCarrito">
                                                <div class="w-full md:w-full ml-auto mr-auto px-4">
                                                    <div class="md:pr-12">
                                                        <h3 class="text-5xl font-bold text-gray-50">
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

                                                        <ul class="list-none mt-6">
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
                                                                                class="fab fa-html5"></i></span>
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
                                                                                class="far fa-paper-plane"></i></span>
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-gray-200 font-light">Batería
                                                                            inteligente de 8000 mAh</h4>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <h3 class="text-5xl font-extrabold text-gray-50">
                                                            ${{$product->Precio}}</h3>

                                                        <div class="flex flex-wrap">
                                                            {{ csrf_field() }}
                                                            <div class="md:w-1/3 px-6 flex py-6 justify-center"
                                                                style="background: white;">
                                                                <div class="justify-items-auto" style="height:25px;width:25px;
                                                    margin:5px;display:inline-block;border-width: 1px;
                                                                 border-style: solid;
                                                                 border-color: #2271b3;
                                                    background-color: #2271b3;">
                                                                </div>
                                                                <div class="justify-items-auto" style="height:25px;width:25px;
                                                    margin:5px;display:inline-block;border-width: 1px;
                                                                 border-style: solid;
                                                                 border-color: #464646;
                                                    background-color: #464646;">
                                                                </div>
                                                                <div class="justify-items-auto" style="height:25px;width:25px;
                                                    margin:5px;display:inline-block;border-width: 1px;
                                                                 border-style: solid;
                                                                 border-color: black;
                                                    background-color: black;">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" id="id_producto"
                                                            name="id_producto" value="{{$product->SKU}}">
                                                            <div class="md:w-1/2 px-6 py-6">
                                                                <p class=" text-base leading-relaxed  text-gray-50">
                                                                    COLORES DISPONIBLES
                                                                </p>


                                                            </div>
                                                        </div>
                                                        <div class="flex flex-wrap">
                                                            <div class="md:w-1/2">

                                                                {{-- <img class="absolute"
                                                                    src="/public/img/despacho a domicilio.PNG" alt=""> --}}
                                                                {{-- <div class="absolute image is-128x128 ">
                                                                <img class=" is-rounded"
                                                                    src="https://bulma.io/images/placeholders/128x128.png">
                                                            </div> --}}
                                                            <div style="display:inline-block;border-width: 1px;
                                                                 border-style: solid;
                                                                 border-color: #2473b6;
                                                    background-color: #2473b6" class="p-4 ">

                                                                <p class=" text-base font-extrabold leading-relaxed  text-gray-50">
                                                                    DESPACHO A DOMICILIO
                                                                </p>
                                                                <h4 class="text-yellow-300 text-xs justify-end font-light">VER COSTO DE
                                                                    ENVIO
                                                                </h4>
                                                            </div>
                                                            </div>
                                                            <div class="md:w-1/2">
                                                                {{-- <img class="absolute"
                                                                    src="/public/img/despacho a domicilio.PNG" alt=""> --}}
                                                                {{-- <div class="absolute image is-128x128 ">
                                                                <img class=" is-rounded"
                                                                    src="https://bulma.io/images/placeholders/128x128.png">
                                                            </div> --}}
                                                            <div style="display:inline-block;border-width: 1px;
                                                                 border-style: solid;
                                                                 border-color: #2473b6;
                                                    background-color: #2473b6" class="p-4 ">

                                                                <p class=" text-base font-extrabold leading-relaxed  text-gray-50">
                                                                    RETIRO EN TIENDA
                                                                </p>
                                                                <h4 class="text-yellow-300 text-xs justify-end font-light">VER TIENDAS
                                                                    DISPONIBLES</h4>
                                                            </div>
                                                            </div>

                                                        </div>
                                                        <div class="flex flex-wrap">
                                                            <div class="md:w-1/2 px-6 py-6">
                                                                <div class="w-1/2">
                                                                    <a style="display:inline-block;border-width: 1px;
                                                                    border-style: solid;
                                                                    border-color: #2473b6;
                                                       /* background-color: #2473b6" href="{{route('carrito')}}"></a> */
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


    </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </section>
</main>