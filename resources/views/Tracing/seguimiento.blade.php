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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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

@include('Components.Header')
@include('Components.Megamenu')

<body class="bg-gray-100">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8">
        <div class="col-span-1"></div>
        <div class="lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 col-span-12 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6"
            style="background-color: white">
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                        <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                            <span class="text-3xl"> Por favor, ingresa el número de orden</span>
                        </h3>
                    </p>
                </div>

            </article>

            <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                    border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                        usuario no logeado
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">


                    <!--Card hidden-->
                    <div class=" w-full lg:max-w-full lg:flex">
                        <div class="grid grid-cols-12 w-full lg:max-w-full" style="background-color: aliceblue">
                            <div class="col-span-12 grid grid-cols-12 px-6">
                                <div class="xl:col-span-6 2xl:col-span-6 lg:col-span-6 col-span-6 md:col-span-12">
                                    <label class="form-check-label" for="NuevoNombre">Numero de Orden:
                                    </label>
                                    <input type="text" required name="NuevoNombre" id="NuevoNombre" class="text-md w-full block px-3 py-2 rounded-lg 
                                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                                        focus:placeholder-gray-500
                                                        focus:bg-white 
                                                        focus:border-gray-600  
                                                        focus:outline-none">
                                </div>
                            </div>

                            <div class="col-span-12 grid grid-cols-12 px-6 md:grid-flow-row md:auto-rows-max">

                                <div
                                    class="xl:col-span-5 2xl:col-span-5 lg:col-span-5 col-span-12 md:col-span-12 px-6 pt-3">
                                    <button id="editar" class="text-lg font-semibold 
                                bg-green-500 w-full text-white rounded-lg px-6 py-3 
                                 block shadow-xl hover:text-white hover:bg-black" type="button">Buscar Orden</button>
                                    <input type="hidden" id="url" value="{{ route('usr.create') }}">
                                    @csrf

                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </article>
        </div>
    </div>

</body><!-- /SECTION -->