@extends('layouts.Contenido')
@section('content')
{{-- <div class="mx-auto w-1/2 absolute md:w-full" style="z-index: 0;background-color: #F8F1F1">
    <div aria-label="breadcrumb overflow-hidden">
        <ul class="breadcrumb align-right"
            style="background-color:black ;margin-bottom:0px;padding: 20px; margin-top: 10px;">
            <li class="breadcrumb-item text-black grid-cols-1"><a href="{{ url('/') }}"><span
    class="text-black md:text-base tracking-tight">HOME</span></a>
@foreach ($dir as $d)
/
<ul class="align-right">
    <li class="breadcrumb-item text-black" aria-current="page">
        <a href="{{ $d['url'] }}"><span class="text-black  md:text-base tracking-tight">{{ $d['name'] }}</span></a>
    </li>
</ul>
@endforeach
</li>
</ul>
</div>
</div>
</div> --}}
<style>
    .banner-font {
        color: #F8AF22;
        font-family: 'Helvetica Neue', sans-serif;
        font-weight: bold;
        /* letter-spacing: -1px;
        line-height: 1; */
        text-align: center;
         !important
    }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<div class="h-full overflow-visible z-50">
    <div class="grid grid-cols-1">
        <div class="lg:mt-0">
            <div class="lg:mx-auto lg:container">
                <div class="border-opacity-100 border-t border-dotted border-1" style="border-color: black">

                    <section class="relative block  md:h-1/2 lg:h-1/5   w-full" style="height: 290px;width: 100%">
                        <div class="absolute top-0 w-full h-full bg-center bg-cover"
                            style='background-image: url("/img/trade-in_banner.jpg");'>
                            <span id="blackOverlay" class="w-full h-full absolute opacity-75 object-cover "
                                style="background-color: #0a0a0a">
                                <div class="md:w-full md:container mx-auto lg:pt-36 md:pt-0">
                                    <div class="grid grid-cols-4 lg:grid-cols-4 gap-4">
                                        <div class="lg:w-full col-span-4  md:w-full">
                                            @foreach ($dir as $d)
                                            @if ($loop->last)

                                            <h2
                                                class="pt-16 md:pt-8 pb-5 font-bold opacity-100 banner-font text-5xl lg:text-9xl md:text-9xl uppercase tracking-wider text-center">{{ $d['name']
                                                }}
                                            </h2>
                                            @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>

                    </section>
                </div>

                <div class="border-opacity-25 border-t border-dotted border-1" style="border-color: gray">


                    <div class="h-full w-full bg-white tracking-wide text-5xl text-center">
                        <div class="grid grid-cols-12">
                            <div class="col-span-2 pt-8 pb-5">
                                <div class="grid grid-cols-12 ">
                                    <div class="lg:px-10 grid col-span-6 md:px-0">
                                        <div aria-label="breadcrumb  w-1/2">
                                            <ul class="breadcrumb align-right" style=" ">
                                                <li class="breadcrumb-item text-black grid-cols-1"><a
                                                        href="{{ url('/') }}"><span
                                                            class="text-black md:text-sm text-xs pl-6 md:pl-6 lg:pl-6 tracking-tight font-bold lg:text-sm">HOME</span></a>
                                                    @foreach ($dir as $d)
                                                    @if ($loop->last)



                                                    @else

                                                    <ul class="align-right">
                                                        <li class="breadcrumb-item text-black" aria-current="page">
                                                            <a href="{{ $d['url'] }}"><span
                                                                    class="text-black  lg:text-sm md:text-sm text-xs tracking-tight font-bold"><span
                                                                        style="color: #F8AF22">&nbsp;>> &nbsp;</span>{{ $d['name']
                    }}</span></a>
                                                        </li>
                                                    </ul>

                                                    @endif
                                                    @endforeach
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- 
                            <div
                                class="lg:col-start-5 lg:col-span-4 md:col-start-6 md:col-span-6 col-start-4 col-span-7">
                                <h2 class="pt-16 md:pt-8 pb-5 font-bold opacity-100  text-2xl lg:text-5xl md:text-5xl uppercase tracking-wider"
                                    style="color: #F8AF22">{{ $d['name']
                                }}
                            </h2>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-12">
        <div class="md:col-span-3 lg:col-start-1 md:visible invisible  lg:col-span-2">
            <div class="md:grid-rows-1 lg:grid-rows-1 ml-16 md:ml-8">
                <div class="mx-auto md:w-full" style="z-index: 0;background-color: white">
                    <aside class="menu">
                        {{-- <div aria-label="breadcrumb overflow-hidden py-0 rounded-lg">
                                <ul class="breadcrumb align-right"
                                    style="background-color:black ;margin-bottom:0px;padding: 20px; margin-top: 10px;">
                                    <li class="breadcrumb-item text-black grid-cols-1"><a href="{{ url('/') }}"><span
                            class="text-black md:text-base tracking-tight">HOME</span></a>
                        @foreach ($dir as $d)
                        /
                        <ul class="align-right">
                            <li class="breadcrumb-item text-black" aria-current="page">
                                <a href="{{ $d['url'] }}"><span class="text-black  md:text-base tracking-tight">{{ $d['name']
                                                    }}</span></a>
                            </li>
                        </ul>
                        @endforeach
                        </li>
                        </ul>
                </div> --}}
            </div>
            <div class="mx-auto md:col-span-1 pb-60 overflow-visible md:visible invisible" style="z-index: 0;">

                <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3 ">
                    <div class="px-6">
                        <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                        border-dotted" style="background-color: aliceblue">
                            Ordenar Por
                        </p>
                    </div>

                    <div class="panel-block" style="background-color: aliceblue">
                        <select style="max-width: fit-content;" class="form-control" id="Ordenar">
                            <option>Mas Nuevo</option>
                            <option>Mas Viejo</option>
                            <option>Mas Economico</option>
                            <option>Mas Caro</option>
                        </select>
                    </div>


                </article>
                <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

                    <div class="px-6">
                        <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                            border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                            Resolucion
                        </p>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="GalaxyTabS">
                        <label class="form-check-label" for="GalaxyTabS">Resolucion
                            Full HD</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="GalaxyTabA">
                        <label class="form-check-label" for="GalaxyTabA">Resolucion
                            4k</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="GalaxyTabActive">
                        <label class="form-check-label" for="GalaxyTabActive">Resolucion
                            8k</label>
                    </div>
                </article>
                <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

                    <div class="px-6">
                        <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                            border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                            Tamaño
                        </p>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="75+pulgadas">
                        <label class="form-check-label" for="75+pulgadas">Mas de
                            75 Pulgadas</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="65+pulgadas">
                        <label class="form-check-label" for="65+pulgadas">65" -
                            74"</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="55+pulgadas">
                        <label class="form-check-label" for="55+pulgadas">55" -
                            64"</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="45+pulgadas">
                        <label class="form-check-label" for="45+pulgadas">45" -
                            54"</label>
                    </div>
                </article>

                <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">
                    <div class="px-6">
                        <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                            border-dotted" style="background-color: aliceblue">
                            Memoria
                        </p>
                    </div>

                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="16GB">
                        <label class="form-check-label" for="75+pulgadas">16GB</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="32GB">
                        <label class="form-check-label" for="65+pulgadas">32GB</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="64GB">
                        <label class="form-check-label" for="55+pulgadas">64GB</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="128GB">
                        <label class="form-check-label" for="45+pulgadas">128GB</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="256GB">
                        <label class="form-check-label" for="45+pulgadas">256GB</label>
                    </div>
                </article>
                <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

                    <div class="px-6">
                        <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                            border-dotted" style="background-color: aliceblue">
                            Camara
                        </p>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="~4.9MP">
                        <label class="form-check-label" for="~4.9MP">~4.9MP</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="5~6.9MP">
                        <label class="form-check-label" for="5~6.9MP">5~6.9MP</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="7~8.9MP">
                        <label class="form-check-label" for="7~8.9MP">7~8.9MP</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="9~12.9MP">
                        <label class="form-check-label" for="9~12.9MP">9~12.9MP</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="13~18.9MP">
                        <label class="form-check-label" for="13~18.9MP">13~18.9MP</label>
                    </div>
                    <div class="panel-block" style="background-color: aliceblue">
                        <span class="panel-icon">

                        </span>
                        <input type="checkbox" class="form-check-input" id="24MP ~">
                        <label class="form-check-label" for="24MP ~">24MP
                            ~</label>
                    </div>
                </article>

                </aside>
            </div>
        </div>
    </div>
    <div class="lg:col-span-9  md:col-span-9 col-span-10 md:px-6 lg:px-6 px-0 ">
        <div class=" grid md:col-rows-1 lg:col-rows-1 grid-cols-1 mb-60 ">
            <section class="relative ">
                <div class="container mx-auto ">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg ">
                        <div class="md:px-6">
                            <div class="flex flex-wrap justify-center animate__fadeInUp animate__animated wow">

                                <div
                                    class="w-full lg:w-full lg:order-1  border-opacity-25 border-t border-dotted border-1">
                                    <div class="justify-items-start md:justify-items-center py-4 lg:pt-4 pt-8">

                                        <section class="relative">
                                            <div
                                                class="lg:grid grid md:grid md:grid-cols-3 md:gap-6 gap-1 w-full  md:w-full grid-cols-2 pb-60">

                                                @include('Components.producto-card', ['Productos' =>
                                                $productos])

                                                @include('Components.producto-card', ['Productos' =>
                                                $productos])
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
</div>
</div>


</div>

@include('Components.trade-in-cat')

<script data-require="jquery@3.1.1" data-semver="3.1.1"
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@endsection