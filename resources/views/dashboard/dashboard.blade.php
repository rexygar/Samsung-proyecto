@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')


@section('content')
    <div class="col-span-7 col-start-3 px-6 ">
        <div class="mx-auto container">
            <div class=" border-b flex px-6 py-2 items-center">
                <div class="ml-auto hidden md:block">
                    <input type="search" placeholder="Search" class="border border-grey rounded-lg p-2" />
                </div>


                <!-- Chat messages -->
                <div class="px-6 py-4 flex-1 overflow-scroll-x">
                    <!-- A message -->
                    <div class="flex items-start mb-4">
                        <img src="https://avatars2.githubusercontent.com/u/343407?s=460&v=4"
                            class="w-10 h-10 rounded mr-3" />
                        <div class="flex flex-col">
                            <div class="flex items-end">
                                <span class="font-bold text-md mr-2 font-sans">killgt</span>
                                <span class="text-grey text-xs font-light">11:46</span>
                            </div>
                            <p class="font-light text-md text-grey-darkest pt-1">The slack from the other side.</p>
                        </div>
                    </div>

                    <!-- A message -->
                    <div class="flex items-start mb-4">
                        <img src="https://i.imgur.com/8Km9tLL.jpg" class="w-10 h-10 rounded mr-3" />
                        <div class="flex flex-col">
                            <div class="flex items-end">
                                <span class="font-bold text-md mr-2 font-sans">Olivia Dunham</span>
                                <span class="text-grey text-xs font-light">12:45</span>
                            </div>
                            <p class="font-light text-md text-grey-darkest pt-1">How are we supposed to control the marquee
                                space
                                without an utility for it? I propose this:</p>
                            <div class="bg-grey-lighter border border-grey-light font-mono rounded p-3 mt-2 whitespace-pre">
                                .marquee-lightspeed { -webkit-marquee-speed: fast; }
                                .marquee-lightspeeder { -webkit-marquee-speed: faster; }</div>
                        </div>
                    </div>

                    <!-- A message -->
                    <div class="flex items-start">
                        <img src="https://i.imgur.com/qACoKgY.jpg" class="w-10 h-10 rounded mr-3" />
                        <div class="flex flex-col">
                            <div class="flex items-end">
                                <span class="font-bold text-md mr-2 font-sans">Adam Bishop</span>
                                <span class="text-grey text-xs font-light">12:46</span>
                            </div>
                            <p class="font-light text-md text-grey-darkest pt-1"><a href="#" class="text-blue">@Olivia
                                    Dunham</a>
                                the
                                size of the generated CSS is creating a singularity in space/time, we must stop adding more
                                utilities
                                before its too late!</p>
                        </div>
                    </div>

                    <!-- Ignore -->
                    <br><br><br><br><br><br><br><br><br><br><br>

                </div>

                <div class="flex m-6 rounded-lg border-2 border-grey overflow-hidden">
                    <span class="text-3xl text-grey px-3 border-r-2 border-grey">+</span>
                    <input type="text" class="w-full px-4" placeholder="Message to #general" />
                </div>

            </div>
        </div>
    </div>


@stop

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">
@stop

@section('vendor-script')
    <script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
@stop

@section('page-script')
    <script src="{{ asset('assets/js/index.js') }}"></script>
@stop
