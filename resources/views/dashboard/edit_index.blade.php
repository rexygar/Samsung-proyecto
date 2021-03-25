@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')


@section('content')
<div class="col-span-10 col-start-3 h-auto">
    <div class="min-h-screen bg-gray-100 py-24 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-32">
            <div class="w-11/12 mx-auto">
              <div class="flex items-center space-x-5">
                <div class="h-14 w-14 bg-black rounded-full flex flex-shrink-0 justify-center items-center text-yellow-600 text-2xl font-mono">E</div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                  <h2 class="leading-relaxed">Editar Imagenes</h2>
                </div>
              </div>
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                  <div class="flex flex-col">
                    <form action="{{ route('image.edit') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <select name="tipo" id="tipo">
                          <option disabled selected>Seleccione</option>
                          <option value="megaMenu">Mega Menu</option>
                          <option value="header">Header por Categoria</option>
                          <option value="fondoEquipos">Fondo de Equipos</option>
                      </select>
                      <br><br>
                      <select name="mega" id="mega" hidden>
                        <option value="SMARTPHONES">telefonos</option>
                        <option value="TABLETS">tablets</option>
                        <option value="WEARABLES">wearables</option>
                        <option value="ACCESORIOS">accesorios</option>
                        <option value="COMPUTADORES">computadores</option>
                        <option value="CONSOLAS Y JUEGOS">consolas y juegos</option>
                      </select>
                      <select name="headerCat" id="headerCat" hidden>
                        <option value="SMARTPHONES">telefonos</option>
                        <option value="TABLETS">tablets</option>
                        <option value="WEARABLES">wearables</option>
                        <option value="ACCESORIOS">accesorios</option>
                        <option value="COMPUTADORES">computadores</option>
                        <option value="CONSOLAS Y JUEGOS">consolas y juegos</option>
                      </select>
                      <select name="fondoEq" id="fondoEq" hidden>
                        <option value="SMARTPHONES">telefonos</option>
                        <option value="TABLETS">tablets</option>
                        <option value="WEARABLES">wearables</option>
                        <option value="ACCESORIOS">accesorios</option>
                        <option value="COMPUTADORES">computadores</option>
                        <option value="CONSOLAS Y JUEGOS">consolas y juegos</option>
                      </select>
                      <br>
                      <label class="leading-loose">Imagen nueva para el slider</label>
                      <input type="file" name="slide" accept="image/" multiple class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title">
                      <div class="pt-4 flex items-center space-x-4">
                        <button id="crear" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Crear</button>
                        <a href="{{ route('admin.index') }}" class="bg-red-700 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Cancelar</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@stop

@section('page-script')
<script src="{{ asset('js/edit_images.js') }}"></script>
@stop