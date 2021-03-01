{{-- @extends('Layouts.Contenido')
@section('content') --}}

<div class="lg:pt-16 md:pt-0 place-content-center  md:px-6 lg:px-8 relative col-span-3  block">
    <section class="">
        <!-- Hero head: will stick at the top -->
        {{-- Contenido --}}
        {{-- producto card --}}

        <div class="mt-8">
            <div class="mx-auto container">
                <div class="border-opacity-25 border-t border-dotted border-1" style="border-color: gray">
                    <div class="h-full w-full bg-white tracking-wide md:text-5xl text-3xl text-center">
                        <h2 class="pt-8 pb-5 font-bold opacity-100" style="color: #F8AF22">Productos destacados</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class=" lg:w-full md:w-full w-full">
            <div class="grid md:grid-cols-9 grid-cols-12 lg:grid-cols-9 md:gap-4 lg:gap-3">
                <!-- ... -->
                <div class="col-span-1 col-start-1"></div>
                 <div class="md:py-6 lg:col-span-7 md:col-span-8 col-span-10 border-t border-dotted border-1 border-opacity-25" style="border-color: gray"> 

                    <div class="grid grid-cols-12 gap-4 lg:gap-4 ">
                        <div class="w-full h-full col-start-1 relative lg:col-span-4 col-span-12 md:col-span-4 " style="border: none !important;">
                            <div class=" inline-block align-middle">
                                <span
                                    class="font-bolder opacity-50 object-cover bg-center bg-cover tracking-wider md:text-2xl text-xs "
                                    style="background:#06A77D; color: #FAFAFA;z-index: 999">
                                    Galaxy Note 20</span>
                                <figure
                                    class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                    style="z-index: 100">
                                    <img src="/img/note-20.jpg" class="bg-center bg-contain">
                                </figure>
                            </div>
                        </div>

                        <div class="w-full h-full relative lg:col-span-4 md:col-span-4 col-span-12" style="border: none !important;">

                            <div class=" inline-block align-middle">
                                <span
                                    class="font-bolder opacity-50 object-cover bg-center bg-cover tracking-wider md:text-2xl text-xs "
                                    style="background:#06A77D; color: #FAFAFA;z-index: 999">
                                    Galaxy Tab s7</span>
                                <figure
                                    class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                    style="z-index: 100">
                                    <img src="/img/Galaxy-Tab-S7.jpg" class="bg-center bg-contain">
                                </figure>
                            </div>
                        </div>

                        <div class="w-full h-full relative lg:col-span-4 md:col-span-4 col-span-12" style="border: none !important;">
                            <div class=" inline-block align-middle">
                                <span
                                    class="font-bolder opacity-50 object-cover bg-center bg-cover tracking-wider md:text-2xl text-xs "
                                    style="background:#06A77D; color: #FAFAFA;z-index: 999">
                                    Galaxy Watch Active</span>
                                <figure
                                    class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                    style="z-index: 100">
                                    <img src="/img/GalaxyWatchActive_2.jpg" class="bg-center bg-contain">
                                </figure>
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