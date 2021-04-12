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
    <link href="{{ asset('css/panels.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" defer rel="stylesheet">
    <link href="{{ asset('css/Megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" defer rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
 

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

<div class=" w-full py-auto relative" style="z-index: 99999">
    @include('Components.nav-mobile')
    @include('Components.Header')
    {{-- @include('Components.Header') --}}
</div>
@include('Components.Megamenu')

<body class="bg-gray-100">

    @if (count($reserva) > 0 )
    <div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8">
        <div class="col-span-1"></div>
        <div class="lg:col-span-6 md:col-span-6 xl:col-span-6 2xl:col-span-6 col-span-12 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6"
            style="background-color: white">

            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                        <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                            <span class="text-3xl"><i class="fas fa-shopping-cart"></i> Mis Productos
                                ({{ count($reserva) }})</span>
                        </h3>
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">

                </div>


            </article>
            @foreach ($reserva as $res)
            <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                    border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                        tecnobuy.cl
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">

                    <!--Card 1-->
                    <div class=" w-full lg:max-w-full lg:flex">
                        <div class="h-48 lg:h-auto lg:w-48 flex-none   rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                            style="background-image: url({{ url('../uploads/products/1/buds.jpg') }});background-repeat: no-repeat;background-size: contain;">
                        </div>
                        <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                            style="background-color: aliceblue">
                            <div class="mb-8">
                                <p class="text-sm text-gray-600 flex items-center">
                                    ${{ number_format($res->monto, 0,'','.') }}
                                </p>
                                <div class="text-gray-900 font-bold text-xl mb-2">{{ $res->descripcion }}</div>
                                <input type="hidden" id="urlQuitar" value="{{ route('carrito.delete') }}">
                                <a type="button" id="borrar"
                                    class="btn font-semibold hover:text-red-500 text-gray-500 text-xs"
                                    onclick="eliminar({{ $res->sku }})">Quitar</a>
                                <p class="text-sm text-gray-600 flex items-center">
                                    Cantidad: {{$res->reserva}}
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </article>


            @endforeach
        </div>
        <div class="lg:col-span-5 md:col-span-5 xl:col-span-5 2xl:col-span-5 col-span-12 lx:px-8 lg:pl-12 xl:pl-12 2xl:pl-12 md:px-4 xl:px-10 2xl:px-16"
            style="background-color: white">
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                        Seguir con la compra
                    </p>
                </div>


                <div class="panel-block grid grid-cols-12" style="background-color: aliceblue">
                    <div class="col-span-12 mx-auto">
                        <a href="/Stepper" class="mt-3 text-lg font-semibold 
               bg-gray-800 w-full text-white rounded-lg
               px-6 py-3 block shadow-xl hover:text-white hover:bg-black">Continuar con la compra</a></div>

                </div>
            </article>
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                        Sub-Total
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">
                    <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                        @php
                        $total = 0;

                        @endphp
                        @foreach ($reserva as $res)
                        @php
                        $total = $res->Total + $total
                        @endphp


                        @endforeach
                        <span class="text-3xl"> $
                            @php
                            echo(number_format($total, 0,'','.'));
                            @endphp
                        </span>
                    </h3>
                </div>


            </article>

            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                        Despacho
                    </p>
                </div>


                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>

                    <span class="form-check-label">El costo de entrega se calculará al añadir la dirección</span>
                </div>
            </article>
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
        border-dotted" style="background-color: aliceblue">
                        Cambios y devoluciones
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                border-dotted" style="background-color: aliceblue">
                        Puedes cambiar tus productos en cualquier tienda Paris hasta 30 días después de la fecha de
                        compra.
                    </p>
                </div>
            </article>
        </div>

    </div>
    @else
    @include('Components.Carrito.CarritoVacio')
    @endif

</body><!-- /SECTION -->
 

<script defer src="{{ asset('js/carrito.js') }}"></script>
<link defer rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
<script defer src="{{ asset('js/toastr/toastr.js') }}"></script>