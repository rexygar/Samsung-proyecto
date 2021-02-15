@extends('Layouts.Contenido')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">
    {{-- <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    @endif
    @endauth
    </div>
    @endif --}}



    <div class="container mx-auto lg:w-full md:w-full">
        <div class="">
            <!-- ... -->
            <div class="place-self-center ">
                @include('Components.carousel')
            </div>
        </div>
    </div>
    <div class="container mx-auto lg:w-full md:w-full">
        <div class="">
            <!-- ... -->
            <div class="place-self-center ">
                @include('Components.destacados')
            </div>
        </div>
    </div>
    <div class="container mx-auto lg:w-full md:w-full">
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 lg:gap-8">
            <!-- ... -->
            <div class="place-self-center ">
                @include('Components.loMvisto')
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 lg:gap-8">
            <!-- ... -->
            <div class="place-self-center ">
                @include('Components.producto-card')
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 lg:gap-8">
            <div class="place-self-center ">
                @include('Components.loMvendido')
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 lg:gap-8">
            {{-- producto card --}}
            <div class="place-self-center">
                @include('Components.producto-card')
            </div>
            {{-- end producto card --}}

        </div>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 lg:gap-8">
            {{-- producto card --}}
            <div class="place-self-center">
                @include('Components.trade-in')
            </div>
            {{-- end producto card --}}

        </div>
    </div>

</body>

</html>