@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Cuenta a Depositar')

@section('content')
<div class="col-span-10 col-start-3 h-auto">
    <div class="min-h-screen bg-gray-100 py-24 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-32">
            <div class="w-11/12 mx-auto">
              <div class="flex items-center space-x-5">
                <div class="h-14 w-14 bg-black rounded-full flex flex-shrink-0 justify-center items-center text-yellow-600 text-2xl font-mono">E</div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                  <h2 class="leading-relaxed">Cuenta a Depositar</h2>
                </div>
              </div>
              <input type="hidden" id="url" value="{{ route('add.deposito') }}">
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                  <div class="flex flex-col">
                    <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Nombre del Banco</span>
                    <input type="text" class="mr-16 border border-gray-700" id="nombreBanco" value="@if(isset($cuenta->nombreBanco)) {{ $cuenta->nombreBanco }} @endif">
                    <br>
                    <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Numero de la Cuenta</span>
                    <input type="text" class="mr-16 border border-gray-700" id="numeroCuenta" value="@if(isset($cuenta->cuentaDestino)) {{ $cuenta->cuentaDestino }} @endif">
                    <br>
                    <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Tipo de Cuenta</span>
                    <input type="text" class="mr-16 border border-gray-700" id="tipoCuenta" value="@if(isset($cuenta->tipoCuenta)) {{ $cuenta->tipoCuenta }} @endif">
                    <br>
                    <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Nombre de Cuenta</span>
                    <input type="text" class="mr-16 border border-gray-700" id="nombreCuenta" value="@if(isset($cuenta->nombreCuenta)) {{ $cuenta->nombreCuenta }} @endif">
                    <br>
                    <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Email de Cuenta</span>
                    <input type="text" class="mr-16 border border-gray-700" id="emailCuenta" value="@if(isset($cuenta->correoCuenta)) {{ $cuenta->correoCuenta }} @endif">
                    <br>
                    <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Descuento a aplicar</span>
                    <input type="text" class="mr-16 border border-gray-700" id="descuento" value="@if(isset($cuenta->descuento)) {{ $cuenta->descuento }} @endif">
                    <br>
                    <div class="pt-4 flex items-center space-x-4">
                      <button id="crear" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Crear</button>
                      <a href="{{ route('admin.index') }}" class="bg-red-700 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Cancelar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@section('page-script')
<script src="{{ asset('js/cuenta.js') }}"></script>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
@endsection

@section('vendor-script')
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
@endsection