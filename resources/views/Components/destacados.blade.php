{{-- @extends('Layouts.Contenido')
@section('content') --}}

<div class="lg:pt-16 md:pt-0 place-content-center  md:px-6 lg:px-8 relative col-span-3  block">

    <div class="mt-8 no_mostrar mostrar_xl">
        <div class="mx-auto container col-span-12 col-start-2 px-4">
            <div class="grid grid-cols-12">

                <div
                    class="lg:pl-10 h-full w-full bg-white tracking-wide lg:text-4xl  md:text-2xl  xs:text-sm  col-start-1  col-span-5 md:col-span-5 lg:col-span-6 xl:col-span-5  2xl:col-span-4 text-left">
                    <h2 class="sm:pt-8 pt-2 pb-5 font-bold opacity-100 sm:text-3xl lg:text-3xl xl:text-4xl 2xl:text-4xl md:text-2xl"
                        style="color: black;text-decoration-color: #F8AF22;text-decoration-thickness: 15px">
                        PRODUCTOS DESTACADOS</h2>

                </div>

                <div
                    class=" inline-block sm:pt-8 lg:pt-10 pb-0 font-bold opacity-100  col-span-7 lg:col-span-6 md:col-span-6 2xl:col-span-7 xl:col-span-7">
                    <div class=" h-2 flex col-span-12 md:col-span-5  lg:col-span-5 ">
                        {{-- <div style="background-color: #F5DF4D" class="h-2  flex-1 hidden sm:block"></div>
                        <div style="background-color: #F5DF4D" class="h-2  flex-1 hidden sm:block"></div> --}}
                        <div style="background-color: #F5DF4D" class="h-2  flex-1 "></div>
                        <div style="background-color: #F5DF4D" class="h-2  flex-1"></div>
                        <div style="background-color: #F5DF4D" class="h-2  flex-1"></div>
                        <div style="background-color: #F5DF4D" class="h-2  flex-1"></div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="-mt-3  mostrar no_mostrar_xl">

        <div class="col-span-12 col-start-1 text-left py-4 px-6 bg-black text-white">
            <h2><strong class="uppercase">PRODUCTOS DESTACADOS</strong></h2>
        </div>
    </div>
    <div class=" lg:w-full md:w-full">
        <div class="grid md:grid-cols-9 grid-cols-4 lg:grid-cols-9 gap-4 lg:gap-3">
            <!-- ... -->
            <div class="py-6 col-span-10 md:col-span-10 lg:pl-24" style="border-color: gray">

                <div class="grid grid-cols-12 gap-4 lg:gap-4 ">
                    <div class="w-full h-full col-start-1 relative col-span-12 md:col-span-4  lg:col-span-4  xl:col-span-4  2xl:col-span-4 mx-auto "
                        style="border: none !important;">
                        <div class=" text-center inline-block">
                            <span
                                class="font-bolder  tracking-wider xs:text-xl text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-3xl "
                                style="background:#ffa726; color: #FAFAFA;z-index: 999">
                                Galaxy Note 20</span>
                            <figure
                                class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                style="z-index: 100">
                                <img src="/img/note-20.jpg" class="bg-center bg-contain">
                            </figure>
                        </div>
                    </div>

                    <div class="w-full h-full relative col-span-12 md:col-span-4  lg:col-span-4  xl:col-span-4  2xl:col-span-4 mx-auto "
                        style="border: none !important;">

                        <div class=" text-center inline-block">
                            <span
                                class="font-bolder  tracking-wider xs:text-xl text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-3xl "
                                style="color: #ffa726;z-index: 999">
                                Galaxy Tab s7</span>
                            <figure
                                class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                style="z-index: 100">
                                <img src="/img/Galaxy-Tab-S7.jpg" class="bg-center bg-contain">
                            </figure>
                        </div>
                    </div>

                    <div class="w-full h-full relative col-span-12 md:col-span-4  lg:col-span-4  xl:col-span-4  2xl:col-span-4 mx-auto "
                        style="border: none !important;">
                        <div class=" text-center inline-block">
                            <span
                                class="font-bolder  tracking-wider xs:text-xl text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-3xl "
                                style="background:#ffa726; color: #FAFAFA;;z-index: 999">
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
                    <span class="font-bolder tracking-wider xs:text-xl text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-3xl" style="color: #FAFAFA">Galaxy Tab s7</span>
                    <figure
                        class=" flex mx-auto bg-center bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5">
                        <img src="/img/Galaxy-Tab-S7.jpg" class="bg-center bg-contain">
                    </figure>
                </div>
                <div class="text-black rounded-sm font-bold text-center">
                    <span class="font-bolder tracking-wider xs:text-xl text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-3xl" style="color: #FAFAFA">Galaxy Watch Active</span>
                    <figure
                        class=" flex mx-auto bg-center bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5">
                        <img src="/img/GalaxyWatchActive_2.jpg" class="bg-center bg-contain">
                    </figure>
                </div> --}}
        </div>
    </div>
</div>
{{-- end producto card --}}