<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/img/logo_icon.png">
    <title>TecnoBuy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Megamenu.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<script src="{{ asset('js/lib/jquery.js') }}"></script>
<script src="{{ asset('js/dist/jquery.validate.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<link type="text/css" rel="stylesheet" href="{{ asset('css/style_for_quantity.css') }}" />
<style>
    label.error {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        padding: 1px 20px 1px 20px;
    }

    .rTable {

        display: block;
        width: 100%;

    }

    .rTableHeading,
    .rTableBody,
    .rTableFoot,
    .rTableRow {
        clear: both;
    }

    .rTableHead,
    .rTableFoot {
        color: aliceblue;
        background-color: #2473b6;
        font-weight: bold;
    }

    .rTableCell,
    .rTableHead {

        float: left;
        overflow: hidden;
        padding: 3px 1.8%;
        width: 20%;

    }

    .btn_bkg {

        background: white;

    }

    .fnt_bkg {

        color: #2473b6;

    }


    .rTable:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
    }
</style>

<body class="bg-gray-100">
    <div class="grid grid-cols-12  ">
        <div class="col-span-12">
            <main class="h-full flex items-center px-6 py-24 lg:px-32 bg-black  relative">
                <section class="w-full md:w-10/12 lg:w-11/12 py-8 ">
                    <span class="font-bold uppercase tracking-widest bg-yellow-300 ">TECNOBUY</span>
                    <h1 class="text-3xl lg:text-8xl font-bold bg-yellow-300 ">
                        Su Carrito se encuentra vacio por el momento
                    </h1>
                    <p class="font-bold mb-1 bg-yellow-300 ">¿Quieres continuar con tu compra?...</p>
                    <a href="/">
                        <h1 class="font-bold mb-1 bg-yellow-300  text-3xl lg:text-5xl">ir al inicio</h1>
                    </a>
                </section>
                <footer class="absolute right-0 bg-yellow-300  bottom-0 p-6 lg:p-32 ">
                    <p class="font-bold mb-1">Atte.</p>
                    <p>Tecnobuy</p>
                </footer>
            </main>

        </div>

    </div>
</body>