<div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8">
    <div class="col-span-1"></div>
    <div class="lg:col-span-6 md:col-span-6 xl:col-span-6 2xl:col-span-6 col-span-12 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6"
        style="background-color: white">

        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                    <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                        <span class="text-3xl"> Datos Personales</span>
                    </h3>
                </p>
            </div>

        </article>

        @if (Auth::user())

        <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                    border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                    usuario logeado
                </p>
            </div>

            <div class="panel-block grid grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6 md:grid-cols-6"
                style="background-color: aliceblue">

                <!--Card 1-->
                <div class="col-span-3 lg:px-2 xl:px-2 2xl:px-4">
                    <div class="text-gray-900 font-bold text-xl mb-2">Ingresa Con tus datos</div>
                    <form class="mt-8" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mx-auto max-w-lg">
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">{{ __('Correo Electronico') }}</span>
                                <input name="email" placeholder="" type="text"
                                    class="text-md block px-3 py-2  rounded-lg w-full 
                              bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">

                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">{{ __('Correo Electronico') }}</span>
                                <input name="email" placeholder="" type="text"
                                    class="text-md block px-3 py-2  rounded-lg w-full 
                              bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">

                            </div>


                        </div>
                    </form>
                </div>


                <div class="col-span-3 lg:px-2 xl:px-2 2xl:px-4">
                    <div class="text-gray-900 font-bold text-xl mb-2">Ingresa Con tus datos</div>
                    <form class="mt-8" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mx-auto max-w-lg">
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">{{ __('Correo Electronico') }}</span>
                                <input name="email" placeholder="" type="text"
                                    class="text-md block px-3 py-2  rounded-lg w-full 
                              bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">

                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">{{ __('Correo Electronico') }}</span>
                                <input name="email" placeholder="" type="text"
                                    class="text-md block px-3 py-2  rounded-lg w-full 
                              bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">

                            </div>


                        </div>
                    </form>
                </div>

            </div>
        </article>
        @else

        <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                    border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                    usuario no logeado
                </p>
            </div>

            <div class="panel-block" x-data="{ isOpen : true}" style="background-color: aliceblue">

                <!--Card 1-->
                <div class=" w-full lg:max-w-full lg:flex" :class="{' block': isOpen, 'hidden': !isOpen}">
                    <div class="grid grid-cols-2">
                        <div class="col-span-1 lg:px-2 xl:px-2 2xl:px-4">
                            <div class="text-gray-900 font-bold text-xl mb-2">Ingresa Con tus datos</div>
                            <form class="mt-8" method="POST" action="{{ route('lgn.usr') }}">
                                @csrf
                                <div class="mx-auto max-w-lg">
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">{{ __('Correo Electronico') }}</span>
                                        <input name="correo_lgn" placeholder="" type="text"
                                            class="text-md block px-3 py-2  rounded-lg w-full 
                              bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                        @error('correo_lgn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="py-2" x-data="{ show: true }">
                                        <span class="px-1 text-sm text-gray-600">{{ __('Contraseña') }}</span>
                                        <div class="relative">
                                            <input name="pwd_lgn" placeholder="" type="password" class="text-md block px-3 py-2 rounded-lg w-full 
                              bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                              focus:placeholder-gray-500
                              focus:bg-white 
                              focus:border-gray-600  
                              focus:outline-none">
                                            @error('pwd_lgn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <div
                                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                                <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                                    :class="{'hidden': !show, 'block':show }"
                                                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                                    <path fill="currentColor"
                                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between"><label
                                            class="block text-gray-500 font-bold my-4"><input type="checkbox"
                                                class="leading-loose text-pink-600"> <span
                                                class="py-2 text-sm text-gray-600 leading-snug">
                                                {{ __('Recordar Contraseña') }}</span></label> <label
                                            class="block text-gray-500 font-bold my-4"><a href="#"
                                                class="cursor-pointer tracking-tighter text-black border-b-2 border-gray-200 hover:border-gray-400"><span>{{
                                            __('¿Olvidaste tu Contraseña?') }}</span></a></label>
                                    </div> <button class="mt-3 text-lg font-semibold 
                              bg-gray-800 w-full text-white rounded-lg
                              px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                        {{ __('Iniciar Sesión') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-span-1 lg:px-2 xl:px-2 2xl:px-4 md:px-2">

                            <div class="px-6">
                                <div class="text-gray-900 font-bold text-xl mb-2">Compra sin registro</div>
                                <p class=" tracking-normal py-1  text-gray-600" style="background-color: aliceblue"><i
                                        class="fas fa-expand-alt"></i>
                                    Compra sin guardar tus datos,registrarse es opcional
                                </p>
                            </div>
                            <button @click="isOpen = !isOpen" :class="{' sm:block': isOpen, 'hidden': !isOpen}" class="mt-3 text-lg font-semibold 
                              bg-gray-800 w-full text-white rounded-lg
                              px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                Continuar Como invitado
                            </button>
                        </div>
                    </div>
                </div>

                <!--Card hidden-->
                <div class=" w-full lg:max-w-full lg:flex" x-cloak :class="{' hidden': isOpen, 'block': !isOpen}">
                    <div class="grid grid-cols-12 w-full lg:max-w-full" style="background-color: aliceblue">
                        <div class="col-span-12 grid grid-cols-12 gap-2 px-6">
                            <div class="xl:col-span-6 2xl:col-span-6 lg:col-span-6 col-span-6 md:col-span-12">
                                <label class="form-check-label" for="NuevoNombre">Nombre de quien recibe la compra:
                                </label>
                                <input type="text" required name="NuevoNombre" id="NuevoNombre" class="text-md w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none">
                            </div>
                            <div class="xl:col-span-6 2xl:col-span-6 lg:col-span-6 col-span-6 md:col-span-12">
                                <label class="form-check-label" for="NuevoApellido">Apellido de quien recibe la compra:
                                </label>
                                <input type="text" required name="NuevoApellido" id="NuevoApellido" class="text-md w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none">
                            </div>

                        </div>
                        <div class="col-span-12 grid grid-cols-12 gap-2 px-6">
                            <div class="xl:col-span-6 2xl:col-span-6 lg:col-span-6 col-span-6 md:col-span-12">
                                <label class="form-check-label" for="NuevoEmail">Email:

                                </label>
                                <input type="email" requiredname="NuevoEmail" id="NuevoEmail"
                                    placeholder="Tucorreo@dominio.cl" class="text-md block w-full px-3 py-2 rounded-lg 
                          bg-white border-2 border-gray-300 placeholder-gray-600   shadow-md
                          focus:placeholder-gray-500
                          focus:bg-white 
                          focus:border-gray-600  
                          focus:outline-none">
                            </div>
                            <div class="xl:col-span-6 2xl:col-span-6 lg:col-span-6 col-span-6 md:col-span-12">
                                <label class="form-check-label" for="NuevoRut">Rut:
                                    <p class="text-info" id="msgerror"></p>
                                </label>
                                <input type="text" requiredname="NuevoRut" id="NuevoRut" class=" text-md block w-full px-3 py-2 rounded-lg 
                                  bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                  focus:placeholder-gray-500
                                  focus:bg-white 
                                  focus:border-gray-600  
                                  focus:outline-none">
                            </div>

                        </div>
                        <div class="col-span-12 grid grid-cols-12 gap-2 px-6 md:grid-flow-row md:auto-rows-max">
                            <div class="xl:col-span-2 2xl:col-span-2 lg:col-span-2 col-span-4 md:col-span-4">
                                <label class="form-check-label" for="codigo_nmro">Codigo:
                                </label>
                                <select class="text-md block px-3 py-2 rounded-lg  
                                bg-white border-2 border-gray-300 placeholder-gray-600 w-full shadow-md
                                focus:placeholder-gray-500
                                focus:bg-white 
                                focus:border-gray-600  
                                focus:outline-none" id="codigo_nmro" name="codigo_nmro">
                                    <option class="select-option" label="+569" value="+569" selected="selected">+569
                                    </option>
                                    <option class="select-option" label="+562" value="+562">+562</option>
                                    <option class="select-option" label="+54" value="+54">+54</option>
                                </select>
                            </div>
                            <div class="xl:col-span-5 2xl:col-span-5 lg:col-span-5 col-span-8 md:col-span-8">
                                <label class="form-check-label" for="Nuevo_nmro">Numero de telefono:
                                </label>
                                <input type="number" requiredname="Nuevo_nmro" id="Nuevo_nmro" id="Nuevo_nmro" class="  text-md block px-3 py-2 rounded-lg 
                                      bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                      focus:placeholder-gray-500
                                      focus:bg-white 
                                      focus:border-gray-600  
                                      focus:outline-none">
                            </div>
                            <div
                                class="xl:col-span-5 2xl:col-span-5 lg:col-span-5 col-span-12 md:col-span-12 px-6 pt-3">
                                <button id="editar" class="text-lg font-semibold 
                                bg-green-500 w-full text-white rounded-lg px-6 py-3 
                                 block shadow-xl hover:text-white hover:bg-black" type="button">Guardar
                                    cambios</button>
                                <input type="hidden" id="url" value="{{ route('usr.create') }}">
                                @csrf

                            </div>

                        </div>

                        <div class="col-span-12 grid grid-cols-12 gap-2 px-6 md:mx-auto">
                            <div class="toolbar col-span-12 toolbar-bottom" role="toolbar" style="text-align: right;">
                                <button class="btn sw-btn-next w-full" type="button" id="buttonSig">ir al siguiente
                                    Paso</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </article>
        @endif


    </div>
    <div class="lg:col-span-5 md:col-span-5 xl:col-span-5 2xl:col-span-5 col-span-12  lx:px-8 lg:pl-12 xl:pl-12 2xl:pl-12 md:px-4 xl:px-10 2xl:px-16"
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
        <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

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
                            Mi Carrito</h4>
                        <div x-show="selected == 0" class="border py-4 px-2 overflow-y-auto h-32">

                            @foreach ($reserva as $res)
                            <div class="py-1" role="none">
                                <div class="panel-block" style="background-color: aliceblue">

                                    <!--Card 1-->
                                    <div class=" w-full lg:max-w-full lg:flex">
                                        <div class="h-24 lg:h-24 lg:w-24 flex-none  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
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

        <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

            <div class="px-6">
                <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                    border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                    Compra 100% segura
                </p>
            </div>

            <div class="panel-block" style="background-color: aliceblue">

                <!--Card 1-->
                <div class=" w-full lg:max-w-full lg:flex">
                    <img src="../img/seguro.png" alt="" srcset="">

                </div>

            </div>
        </article>



    </div>

</div>

<script src="{{ asset('js/compra_usr.js') }}"></script>
<script src="{{ asset('js/util/jquery.rut.chileno.min.js') }}"></script>
<script>
    jQuery(document).ready(function($){
		$('#NuevoRut').rut();
	});
</script>