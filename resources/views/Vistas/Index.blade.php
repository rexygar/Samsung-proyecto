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

<body class="leading-normal tracking-normal text-gray-900 antialiased"
    style="font-family: 'Source Sans Pro', sans-serif; ">
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
    {{-- inicio pag  --}}

    <!--Nav-->
    <main class="relative py-16 py-0">

        <section class="">
            <div class="container mx-auto px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6  rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">

                            <div class="w-full lg:w-full px-4 lg:order-1">
                                <div class="justify-items-start md:justify-items-center py-4 lg:pt-4 pt-8">

                                    <section class="relative py-20">

                                        <div class="container mx-auto lg:w-full md:w-full pt-48">
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
                                        
                                                <!-- ... -->
                                                <div class="place-self-center ">
                                                    @include('Components.producto-index')
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
                                           
                                                {{-- producto card --}}
                                                <div class="place-self-center">
                                                    @include('Components.producto-index')
                                                </div>
                                                {{-- end producto card --}}

                                           
                                        </div>
                                        <div class="container mx-auto">
                                           
                                                {{-- producto card --}}
                                                <div class="place-self-center">
                                                    @include('Components.trade-in')
                                                </div>
                                                {{-- end producto card --}}

                                           
                                        </div>


                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</body>