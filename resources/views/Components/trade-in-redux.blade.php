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

<div class="leading-normal tracking-normal antialiased block ">
  <main class="grid grid-cols-12 md:grid-cols-12 lg:grid-cols-12 gap-4 lg:py-40 lg:px-32   relative"
    style="background-image: url({{url('../uploads/products/8/slide-3.jpg')}});">
    {{-- div  --}}
    <div class="grid grid-cols-12 md:grid-cols-12 lg:grid-cols-12 gap-4 lg:py-36">
      <div class="w-full col-span-full"></div>
    </div>
    {{-- div --}}
  </main>

</div>
{{-- @include('Layouts.footer') --}}