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
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito';
        }

        .bnr-fnt {
            @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap');
            font-family: 'Lato', sans-serif !important;
        }

        .border-hr {
            border-width: 1.1px;
        }
    </style>
</head>
<div class=" w-full py-auto relative" style="z-index: 99999">

    @include('Components.brandHeader')
    @include('Components.Header')
</div>
@include('Components.Megamenu')

<body class="leading-normal tracking-normal text-gray-900 antialiased"
    style="font-family: 'Source Sans Pro', sans-serif; background-color: #F8F1F1">
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
    <main class="relative -mt-64">

        <div class="md:px-0 lg:px-0 sm:px-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6  rounded-lg -mt-65">
                <div class="flex flex-wrap justify-center">

                    <div class="md:w-full lg:w-full sm:w-full">
                        <div class="justify-items-start md:justify-items-center lg:pt-4 pt-4">
                            <div class="lg:w-full md:w-full pt-48">
                                <div class="">
                                    <!-- ... -->
                                    <div class="place-self-center ">
                                        @include('Components.carousel')
                                    </div>
                                </div>
                            </div>
                            <div class="lg:w-full md:w-full lg:-mt-10   md:pr-0">
                                <div class="">
                                    <!-- ... -->
                                    <div class="place-self-center ">
                                        @include('Components.CTA')
                                    </div>
                                </div>
                            </div>
                            <div class="lg:w-full md:w-full lg:-mt-10   md:pr-0">
                                <div class="">
                                    <!-- ... -->
                                    <div class="place-self-center ">
                                        @include('Components.categorias')
                                    </div>
                                </div>
                            </div>
                            <div
                                class="lg:w-full md:w-full lg:-mt-10   md:pr-0 animate__fadeInUp animate__animated wow">
                                <div class="">
                                    <!-- ... -->
                                    <div class="place-self-center ">
                                        @include('Components.destacados')
                                    </div>
                                </div>
                            </div>
                            <div class="container mx-auto animate__fadeInUp animate__animated wow">
                                <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 lg:gap-8">
                                    <div class="place-self-center ">
                                        @include('Components.loMvisto')
                                    </div>
                                </div>
                            </div>
                            <div class="container mx-auto md:px-0 sm:px-6 animate__fadeInUp animate__animated wow">

                                {{-- producto card --}}
                                <div class="place-self-center ">
                                    @include('Components.producto-oferta', ['oferta' => $oferta])
                                </div>
                                {{-- end producto card --}}


                            </div>
                            <div class="container mx-auto lg:w-full md:w-full animate__fadeInUp animate__animated wow">
                                <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 lg:gap-8">
                                    <!-- ... -->
                                    <div class="place-self-center ">
                                        @include('Components.loMvendido')
                                    </div>
                                </div>
                            </div>
                            <div
                                class="container mx-auto sm:container sm:mx-auto md:px-0 sm:px-6 animate__fadeInUp animate__animated wow">

                                <!-- ... -->
                                <div class="place-self-center  ">
                                    @include('Components.producto-Destacados', ['destacados' => $destacados])
                                </div>

                            </div>


                            <div class=" px-16 py-16">

                                <hr class="self-center border-hr border-gray-600 bg-gray-600 w-5/5">

                            </div>
                            <div class="animate__fadeInUp animate__animated wow">

                                {{-- producto card --}}
                                <div class="place-self-center">
                                    @include('Components.trade-in-redux')
                                </div>
                                {{-- end producto card --}}


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
</body>
@include('layouts.Footer')