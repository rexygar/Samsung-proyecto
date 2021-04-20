@extends('Layouts.Contenido')
@section('content')

<div class="container max-w-full mx-auto py-16 px-6 bg-gray-700">
    <div class="font-sans">
        <div class="grid grid-col-12 px-6 ">
            <div></div>
            <div class="relative col-span-10 grid grid-cols-12  ">
                <div></div>
                <div class="w-full col-span-10 grid  grid-cols-12 relative">

                    <div class="  w-full col-span-12 p-8   bg-white lg:ml-4">
                        <div class="text-center w-full text-6xl tracking-wide font-bold col-span-10 text-black ">
                            <h3>Perfil</h3>
                        </div>
                        <input type="hidden" id="url" value="{{ route('perfil.update') }}">
                        <input type="hidden" id="id_user" value="@if (isset( Auth::user()->id )) {{ Auth::user()->id }} @endif">

                        <div class="pb-6 w-full col-span-12">
                            <label for="rut" class="font-semibold text-gray-700 block pb-1">RUT</label>
                            <div class="w-full col-span-12">
                                <input id="rut" class="text-sm w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none" type="text" />
                            </div>
                        </div>
                        <div class="pb-6 w-full col-span-12">
                            <label for="nombre" class="font-semibold text-gray-700 block pb-1">Nombre</label>
                            <div class="w-full col-span-12">
                                <input id="nombre" class="text-sm w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none" type="text" />
                            </div>
                        </div>
                        <div class="pb-6 w-full col-span-12">
                            <label for="apellido" class="font-semibold text-gray-700 block pb-1">Apellido</label>
                            <div class="w-full col-span-12">
                                <input id="apellido" class="text-sm w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none" type="text" />
                            </div>
                        </div>
                        <div class="pb-6 w-full col-span-12">
                            <label for="telefono" class="font-semibold text-gray-700 block pb-1">Telefono</label>
                            <input id="telefono" class="text-sm w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none" type="text" />
                        </div>
                        <div class="w-full col-span-12 justify-between">
                            <button id="editar"
                                class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">Crear</button>
                        </div>

                    </div>

                </div>
                <div></div>
            </div>
            <div></div>
        </div>
    </div>
</div>

<script src="{{ asset('js/perfil.js') }}"></script>
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
<script src="{{ asset('js/toastr/toastr.js') }}"></script>

@endsection