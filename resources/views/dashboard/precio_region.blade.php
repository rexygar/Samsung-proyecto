@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Precio de despacho')

@section('content')
    <div class="col-span-10 col-start-3 px-6">
        <div class="mx-auto container">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-32">
                  <div class="w-11/12 mx-auto">
                    <div class="flex items-center space-x-5">
                      <div class="h-14 w-14 bg-black rounded-full flex flex-shrink-0 justify-center items-center text-yellow-600 text-2xl font-mono">E</div>
                      <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                        @if (isset($precio->region))
                          <h2 class="leading-relaxed">Editar Precio</h2>
                        @else
                        <h2 class="leading-relaxed">Generar Precio</h2>
                        @endif
                        
                      </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="flex flex-col">
                          <input type="hidden" id="region" value="@if (isset($precio->region)) {{ $precio->region }} @endif">
                          <input type="hidden" id="comuna" value="@if (isset($precio->comuna)) {{ $precio->comuna }} @endif">
                            <input type="hidden" id="url" value="{{ route('upload.price') }}">
                            <input type="hidden" id="id" value="@if(isset($precio->id)){{ $precio->id }}@endif">
                            <select id="regiones">
                                @if (isset($precio->region))
                                    <option value="{{ $precio->region }}" selected>{{ $precio->region }}</option>
                                @endif
                            </select>
                            <br>
                            <select id="comunas">
                                @if (isset($precio->comuna))
                                    <option value="{{ $precio->comuna }}" selected>{{ $precio->comuna }}</option>
                                @endif
                            </select>
                            <br>
                            <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Precio del despacho</span>
                            <input type="text" class="mr-16 border border-gray-700" id="precio" value="@if(isset($precio->precio)){{ $precio->precio }}@endif">
                            <div class="pt-4 flex items-center space-x-4">
                              <button id="crear" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                                @if (isset($precio->id))
                                  Editar
                                @else
                                  Generar
                                @endif
                                </button>
                              <a href="{{ route('list.price') }}" class="bg-red-700 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Cancelar</a>
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
<script src="{{ asset('js/edit_precio.js') }}"></script>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
@endsection

@section('vendor-script')
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
@endsection