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
    <main class="h-full flex items-center px-6 py-60 lg:px-32 bg-black  relative">
        <header class="w-full absolute left-0 top-0 p-6 lg:p-32">
            <div class="flex justify-between">
              <div>
                <h1 class="text-3xl  bg-yellow-300 font-bold"> <img class="branding__logo img-fluid" src="{{ asset('img/logo.png') }}" width="95" alt=""></h1>
              
              </div>
            </div>
          </header>
          <section class="w-full md:w-9/12 py-8 xl:w-8/12">
            <span class="font-bold uppercase tracking-widest bg-yellow-300 ">TECNOBUY</span>
            <h1 class="text-3xl lg:text-8xl font-bold bg-yellow-300 ">
              Error 404 <br>Pagina no encontrada
            </h1>
            <p class="font-bold mb-1 bg-yellow-300 ">YA VOLVEMOS...</p>
          </section>
          <footer class="absolute right-0 bg-yellow-300  bottom-0 p-6 lg:p-32">
            <p class="font-bold mb-1">Atte.</p>
            <p>Tecnobuy</p>
          </footer>
        </main>
     
</body>
{{-- @include('Layouts.footer') --}}