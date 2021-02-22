@extends('Layouts.Contenido')
@section('content')

<div class="container max-w-full mx-auto py-24 px-6">
    <div class="font-sans">
        <div class="max-w-sm mx-auto px-6">
            <div class="relative flex flex-wrap">
                <div class="w-full relative">
                    <div class="mt-6">
                        <div class="text-center font-semibold text-black">
                            <h3>Perfil</h3>
                        </div>
                        <div class=" md:w-3/5 p-8 bg-white lg:ml-4 shadow-md">
                            <input type="hidden" id="url" value="{{ route('perfil.update') }}">
                            <input type="hidden" id="id_perfil" value="@if (isset($perfil->id)) {{ $perfil->id }} @endif">
                            <div class="rounded  shadow p-6">
                                <div class="pb-6">
                                    <label for="rut" class="font-semibold text-gray-700 block pb-1">RUT</label>
                                    <div class="flex">
                                        <input id="rut" class="border-1  rounded-r px-4 py-2" type="text"/>
                                    </div>
                                </div>
                                <div class="pb-6">
                                    <label for="nombre" class="font-semibold text-gray-700 block pb-1">Nombre</label>
                                    <div class="flex">
                                        <input id="nombre" class="border-1  rounded-r px-4 py-2" type="text"/>
                                    </div>
                                </div>
                                <div class="pb-6">
                                    <label for="apellido" class="font-semibold text-gray-700 block pb-1">Apellido</label>
                                    <div class="flex">
                                        <input id="apellido" class="border-1  rounded-r px-4 py-2" type="text"/>
                                    </div>
                                </div>
                                <div class="pb-6">
                                    <label for="telefono" class="font-semibold text-gray-700 block pb-1">Telefono</label>
                                    <input id="telefono" class="border-1  rounded-r px-4 py-2" type="text" />
                                </div>
                                <div class="flex justify-between">
                                    <button id="editar" class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">Editar</button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/perfil.js') }}"></script>
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
<script src="{{ asset('js/toastr/toastr.js') }}"></script>

@endsection