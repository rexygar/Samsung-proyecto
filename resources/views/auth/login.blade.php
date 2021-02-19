@extends('layouts.app')

@section('content')

<div class="container max-w-full mx-auto py-24 px-6">
    <div class="font-sans">
        <div class="max-w-sm mx-auto px-6">
            <div class="relative flex flex-wrap">
                <div class="w-full relative">
                    <div class="mt-6">
                        <div class="text-center font-semibold text-black">
                            Bienvenido a Tecno Buy
                        </div>

                        <form class="mt-8" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mx-auto max-w-lg">
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
                                <div class="py-2" x-data="{ show: true }">
                                    <span class="px-1 text-sm text-gray-600">{{ __('Contraseña') }}</span>
                                    <div class="relative">
                                        <input name="password" placeholder="" type="password" class="text-md block px-3 py-2 rounded-lg w-full 
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection