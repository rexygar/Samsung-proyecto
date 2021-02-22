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
                                <span class="px-1 text-sm text-gray-600">{{ __('Nombre') }}</span>
                                <div class="py-2">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <span class="px-1 text-sm text-gray-600">{{ __('Correo Electronico') }}</span>
                                <div class="py-2">
                                    
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <span class="px-1 text-sm text-gray-600">{{ __('Contraseña') }}</span>
                                <div class="py-2">
                                    
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <span class="px-1 text-sm text-gray-600">{{ __('Confirmar
                                    Contraseña') }}</span>
                                <div class="py-2" x-data="{ show: true }">
                                    
                                    <div class="relative">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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