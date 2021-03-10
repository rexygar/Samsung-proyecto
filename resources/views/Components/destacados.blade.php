{{-- @extends('Layouts.Contenido')
@section('content') --}}

<div class="lg:pt-6 md:pt-0 place-content-center  md:px-6 lg:px-8 relative col-span-3  block">
    <section class="">
        <!-- Hero head: will stick at the top -->
        {{-- Contenido --}}
        {{-- producto card --}}

        <div class="mt-8">
            <div class="grid grid-cols-12">
                <div class="mx-auto container col-span-12 col-start-2">

                    <div
                        class="h-full w-full bg-white tracking-wide lg:text-5xl  md:text-3xl col-start-3 text-2xl  text-left">
                        <h2 class="sm:pt-8 pt-2 pb-5 font-bold opacity-100 underline  "
                            style="color: black;text-decoration-color: #F8AF22;text-decoration-thickness: 15px">
                            Productos destacados</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class=" lg:w-full md:w-full w-full">
            <div class="grid md:grid-cols-9 grid-cols-12 lg:grid-cols-9 md:gap-4 lg:gap-3">
                <!-- ... -->
                <div class="col-span-1 col-start-1"></div>
                <div class="md:py-6 lg:col-span-7 md:col-span-8 col-span-10   lg:px-0 lg:-mx-10">

                    <div class="grid grid-cols-12 gap-4 lg:gap-4 ">
                        <div class="w-full h-full col-start-1 relative lg:col-span-4 col-span-12 md:col-span-4 "
                            style="border: none !important;">
                            <div class=" inline-block align-middle">
                                {{-- <span
                                    class="font-bolder opacity-50 object-cover bg-center bg-cover tracking-wider md:text-2xl text-xs "
                                    style="background:#06A77D; color: #FAFAFA;z-index: 999">
                                    Galaxy Note 20</span> --}}
                                <a href="/Product/8806090411946">
                                    <figure
                                        class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                        style="z-index: 100">
                                        <img src="/img/galaxy.png" class="bg-center bg-contain">
                                    </figure>
                                </a>
                            </div>
                        </div>

                        <div class="w-full h-full relative lg:col-span-4 md:col-span-4 col-span-12"
                            style="border: none !important;">

                            <div class=" inline-block align-middle">
                                {{-- <span
                                    class="font-bolder opacity-50 object-cover bg-center bg-cover tracking-wider md:text-2xl text-xs "
                                    style="background:#06A77D; color: #FAFAFA;z-index: 999">
                                    Galaxy Tab s7</span> --}}
                                <a href="/Product/8806090696299">
                                    <figure
                                        class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                        style="z-index: 100">
                                        <img src="/img/galaxy tab.png" class="bg-center bg-contain">
                                    </figure>
                                </a>
                            </div>
                        </div>

                        <div class="w-full h-full relative lg:col-span-4 md:col-span-4 col-span-12"
                            style="border: none !important;">
                            <div class=" inline-block align-middle">
                                {{-- <span
                                    class="font-bolder opacity-50 object-cover bg-center bg-cover tracking-wider md:text-2xl text-xs "
                                    style="background:#06A77D; color: #FAFAFA;z-index: 999">
                                    Galaxy Watch Active</span> --}}
                                <a href="/Product/8801643754228">
                                    <figure
                                        class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                        style="z-index: 100">
                                        <img src="/img/watch.png" class="bg-center bg-contain">
                                    </figure>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-span-1 col-start-12"></div>
                {{-- <div class="text-black rounded-sm font-bold text-center">
                    <span class="font-bolder tracking-wider md:text-2xl text-xs" style="color: #FAFAFA">Galaxy Tab s7</span>
                    <figure
                        class=" flex mx-auto bg-center bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5">
                        <img src="/img/Galaxy-Tab-S7.jpg" class="bg-center bg-contain">
                    </figure>
                </div>
                <div class="text-black rounded-sm font-bold text-center">
                    <span class="font-bolder tracking-wider md:text-2xl text-xs" style="color: #FAFAFA">Galaxy Watch Active</span>
                    <figure
                        class=" flex mx-auto bg-center bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5">
                        <img src="/img/GalaxyWatchActive_2.jpg" class="bg-center bg-contain">
                    </figure>
                </div> --}}
            </div>
        </div>

    </section>
</div>
{{-- end producto card --}}