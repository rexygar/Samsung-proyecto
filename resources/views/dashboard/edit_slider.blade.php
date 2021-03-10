@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Editar Carrusel')

@section('content')
    <div class="col-span-10 col-start-3 h-auto">
      <input type="hidden" id="url" value="{{ route('slider.upload') }}">
      <input type="hidden" id="tipo" value="slider">
        <div class="min-h-screen bg-gray-100 py-24 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
              <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-32">
                <div class="w-11/12 mx-auto">
                  <div class="flex items-center space-x-5">
                    <div class="h-14 w-14 bg-black rounded-full flex flex-shrink-0 justify-center items-center text-yellow-600 text-2xl font-mono">E</div>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                      <h2 class="leading-relaxed">Editar el Slider</h2>
                    </div>
                  </div>
                  <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                      <div class="flex flex-col">
                        <label class="leading-loose">Imagen nueva (puede ser más de 1)</label>
                        <input type="file" id="slide" accept="image/" multiple class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title">
                      </div>
                    </div>
                    <div class="pt-4 flex items-center space-x-4">
                        <button id="crear" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Crear</button>
                        <button class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancelar
                        </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
@endsection

@section('vendor-script')
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
@endsection

@section('page-script')
<script src="{{ asset('js/slider.js') }}"></script>
@stop