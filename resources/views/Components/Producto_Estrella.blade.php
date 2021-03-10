{{-- @extends('Layouts.Contenido')
@section('content') --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/img/logo_icon.png">
  <title>Tecnobuy</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
  <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
  <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet">
  <link href="{{ asset('css/Megamenu.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Nunito';
    }

    .border-hr {
      border-width: 1.1px;
    }
  </style>
</head>
{{-- <div  class=" w-full py-auto relative" style="z-index: 99999">
    
@include('Components.Header')
</div>
@include('Components.Megamenu') --}}

<body class="leading-normal tracking-normal antialiased ">
  <main class="h-full flex items-center px-6 lg:px-32 bg-black  relative">
    <header class="w-full absolute left-0 top-0 p-6 lg:p-32">
      <div class="flex justify-between">
        <div>
          <h1 class="text-3xl  bg-yellow-300 font-bold"> <img class="branding__logo img-fluid"
              src="{{ asset('img/logo.png') }}" width="95" alt=""></h1>

        </div>
      </div>
    </header>
    {{-- body  --}}
    <div class="grid grid-cols-4 lg:grid-cols-4 gap-4">
      <div class="lg:w-full col-span-2  md:w-full">
        <h2 class="flex justify-center text-7xl md:text-2xl  pb-4 font-bold text-green-50 border-gray-200">
          <span class="pt-4 font-bold uppercase tracking-widest bg-yellow-300 px-6">TRADE IN</span>
        </h2>
        <figure class="image flex justify-center  pb-6 mx-auto md:w-2/5 md:h-1/5 lg:h-1 lg:w-1/5" style="z-index: 99">
          <img src="/img/logo_ok.png" class="py-2">
        </figure>

        <h5 class="flex justify-center relative md:pb-0 lg:-mb-10  font-bold text-green-50 border-gray-200">
          <span class="text-xl md:text-sm mt-6 lg:py-10 mr-1">RECAMBIA TU ANTIGUO EQUIPO ENTREGANDO TU ANTIGUO
            SMARTPHONE</span>
        </h5>

        <h6 class="flex justify-center font-extralight text-green-50 border-gray-200">
          <span class="text-base mt-6 md:mt-2  md:text-sm mr-1">Aceptamos tu Smartphone o tablet de cualquier
            marca
            como
            abono para el equipo nuevo que elijas</span>
        </h6>

      </div>
      <div class="lg:w-full col-span-2 md:w-full overflow-hidden pr-10">
        <ul class=" text-sm font-bold flex justify-center py-16 gap-3">
          <div class="pt-4 md:px-4 w-full lg:w-1/3 pb-4 border-b border-blue-500">

            <figure class="image flex justify-center absolute  mx-auto md:w-4/5 md:h-4/5" style="z-index: 0">
              <li class=" text-green-50  inline-block lg:w-full md:w-3/3">
                <img src="/img/logo_ok.png" class="py-2"><span class="inline-block">¿COMO FUNCIONA?</span>
              </li>
            </figure>
          </div>
          <div class="pt-4 md:px-4 w-full lg:w-1/3 pb-4 border-b border-blue-500">

            <figure class="image flex justify-center absolute  mx-auto md:w-4/5 md:h-4/5" style="z-index: 0">
              <li class=" text-green-50  inline-block lg:w-full md:w-3/3">
                <img src="/img/logo_ok.png" class="py-2"><span class="inline-block">QUE EQUIPOS?</span>
              </li>
            </figure>
          </div>
          <div class="pt-4 md:px-4 w-full lg:w-1/3 pb-4 border-b border-blue-500">

            <figure class="image flex justify-center absolute  mx-auto md:w-4/5 md:h-4/5" style="z-index: 0">
              <li class=" text-green-50  inline-block lg:w-full md:w-3/3">
                <img src="/img/logo_ok.png" class="py-2"><span class="inline-block">REQUISITOS</span>
              </li>
            </figure>
          </div>
        </ul>
      </div>
    </div>
    {{-- body --}}
  </main>

</body>
{{-- @include('Layouts.footer') --}}