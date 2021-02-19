@extends('layouts.app')

@section('content')

<div class="container max-w-full mx-auto py-24 px-6">
    <div class="font-sans">
        <div class="max-w-sm mx-auto px-6">
            <div class="relative flex flex-wrap">
                <div class="w-full relative">
                    <div class="mt-6">
                        <div class="text-center font-semibold text-black">
                            Registro
                        </div>

                        <form class="mt-8" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mx-auto max-w-lg">
                                <div class="py-2">
                                    <span class="px-1 text-sm text-gray-600">{{ __('Nombre') }}</span>
                                    <input name="name" placeholder="" type="text"
                                        class="text-md block px-3 py-2  rounded-lg w-full 
                                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <span class="px-1 text-sm text-gray-600">{{ __('Correo Electronico') }}</span>
                                    <input name="email" placeholder="" type="text"
                                        class="text-md block px-3 py-2  rounded-lg w-full 
                                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <span class="px-1 text-sm text-gray-600">{{ __('Contraseña') }}</span>
                                    <input id="password" placeholder="" type="password"
                                        class="text-md block px-3 py-2  rounded-lg w-full 
                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="py-2" x-data="{ show: true }">
                                    <span class="px-1 text-sm text-gray-600">{{ __('Confirmar
                                        Contraseña') }}</span>
                                    <div class="relative">
                                        <input id="password-confirm" placeholder="" type="password" class="text-md block px-3 py-2 rounded-lg w-full 
                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                        focus:placeholder-gray-500
                                        focus:bg-white 
                                        focus:border-gray-600  
                                            focus:outline-none">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex justify-between"><label
                                        class="block text-gray-500 font-bold my-4"><input type="checkbox"
                                            class="leading-loose text-pink-600"> <span
                                            class="py-2 text-sm text-gray-600 leading-snug"> {{ __('Recordar
                                            Contraseña') }}</span></label> <label
                                        class="block text-gray-500 font-bold my-4"><a href="#"
                                            class="cursor-pointer tracking-tighter text-black border-b-2 border-gray-200 hover:border-gray-400"><span>{{
                                                __('¿Olvidaste tu Contraseña?') }}</span></a></label></div> <button
                                    class="mt-3 text-lg font-semibold 
                  bg-gray-800 w-full text-white rounded-lg
                  px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection