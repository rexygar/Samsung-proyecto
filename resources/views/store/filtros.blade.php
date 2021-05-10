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
                        @if (!isset($image->imagen))
                        @foreach ($image as $img)
                        <div class="absolute top-0 w-full h-full bg-center bg-cover"
                            style="background-image: url({{ asset('/storage/'.$img->imagen) }});">
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
                        @endforeach
                        @else
                        <div class="absolute top-0 w-full h-full bg-center bg-cover"
                            style="background-image: url({{ asset('/uploads/products/4/1.jpg') }});">
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
                        @endif
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

        <div
            class="lg:col-span-9   lg:col-start-3  md:col-span-9  md:col-start-3 col-span-10 md:px-6 lg:px-6 px-0 pl-10 lg:pl-0 xl:pl-0 2xl:pl-0">
            <div class=" grid md:col-rows-1 lg:col-rows-1 grid-cols-1 mb-60 ">
                <section class="relative ">
                    <div class="container mx-auto ">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg ">
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

<script defer data-require="jquery@3.1.1" data-semver="3.1.1"
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

@endsection