@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Generar Usuario-admin')

@section('content')
<div class="col-span-10 col-start-3 px-6">
    <div class="mx-auto container">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-32">
              <div class="w-11/12 mx-auto">
                <div class="flex items-center space-x-5">
                  <div class="h-14 w-14 bg-black rounded-full flex flex-shrink-0 justify-center items-center text-yellow-600 text-2xl font-mono">E</div>
                  <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                    @if (isset($user->id))
                        <h2 class="leading-relaxed">Editar Usuario</h2>
                    @else
                        <h2 class="leading-relaxed">Crear Usuario</h2>
                    @endif
                    
                  </div>
                </div>
                <div class="divide-y divide-gray-200">
                  <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="flex flex-col">
                        <input type="hidden" id="url" value="{{ route('upload.user') }}">
                        <input type="hidden" id="id" value="@if(isset($user->id)){{ $user->id }}@endif">
                        <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Nombre</span>
                        <input type="text" class="mr-16 border border-gray-700" id="nombre" value="@if(isset($user->name)){{ $user->name }}@endif">
                        <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Correo Electronico</span>
                        <input type="text" class="mr-16 border border-gray-700" id="email" value="@if(isset($user->email)){{ $user->email }}@endif" @if (isset($user->email)) disabled @endif>
                        <div class="pt-4 flex items-center space-x-4">
                          <button id="crear" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-7 py-4 rounded-md focus:outline-none">
                              @if (isset($user->id))
                                  Editar
                              @else
                                Generar
                              @endif
                            
                            </button>
                          <a href="{{ route('list.user') }}" class="bg-red-700 flex justify-center items-center w-full text-white px-7 py-4 rounded-md focus:outline-none">Cancelar</a>
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
<script src="{{ asset('js/edit_user.js') }}"></script>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
@endsection

@section('vendor-script')
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
@endsection