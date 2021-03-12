{{-- @extends('Layouts.Contenido')
@section('content') --}}

<div class="lg:pt-16 md:pt-0 place-content-center  md:px-6 lg:px-8 relative col-span-3  block">

    <div class="mt-8">
        <div class="mx-auto container col-span-12 col-start-2">
            <div class="grid grid-cols-12">

                <div
                    class="lg:pl-10 h-full w-full bg-white tracking-wide lg:text-4xl  md:text-3xl col-start-1  col-span-5 lg:col-span-4 text-2xl  text-left">
                    <h2 class="sm:pt-8 pt-2 pb-5 font-bold opacity-100 "
                        style="color: black;text-decoration-color: #F8AF22;text-decoration-thickness: 15px">
                        PRODUCTOS DESTACADOS</h2>

                </div>
                <div class=" inline-block sm:pt-8 lg:pt-10 pb-5 font-bold opacity-100  col-span-7 ">
                    <div class=" h-2 flex col-span-5 ">
                        <div class="h-2 bg-yellow-500 flex-1"></div>
                        <div class="h-2 bg-yellow-500 flex-1"></div>
                        <div class="h-2 bg-yellow-500 flex-1"></div>
                        <div class="h-2 bg-yellow-500 flex-1"></div>
                        <div class="h-2 bg-yellow-500 flex-1"></div>
                        <div class="h-2 bg-yellow-500 flex-1"></div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class=" lg:w-full md:w-full">
        <div class="grid md:grid-cols-9 grid-cols-4 lg:grid-cols-9 gap-4 lg:gap-3">
            <!-- ... -->
            <div class="py-6 col-span-7 md:col-span-8 lg:pl-24"
                style="border-color: gray">

                <div class="grid grid-cols-12 gap-4 lg:gap-4 ">
                    <div class="w-full h-full col-start-1 relative col-span-3 md:col-span-4 mx-auto "
                        style="border: none !important;">
                        <div class=" text-center inline-block">
                            <span class="font-bolder  tracking-wider text-2xl "
                                style="background:#ffa726; color: #FAFAFA;z-index: 999">
                                Galaxy Note 20</span>
                            <figure
                                class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                style="z-index: 100">
                                <img src="/img/note-20.jpg" class="bg-center bg-contain">
                            </figure>
                        </div>
                    </div>

                    <div class="w-full h-full relative col-span-3 md:col-span-4 mx-auto "
                        style="border: none !important;">

                        <div class=" text-center inline-block">
                            <span class="font-bolder  tracking-wider text-2xl " style="color: #ffa726;z-index: 999">
                                Galaxy Tab s7</span>
                            <figure
                                class=" flex mx-auto bg-center   bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5"
                                style="z-index: 100">
                                <img src="/img/Galaxy-Tab-S7.jpg" class="bg-center bg-contain">
                            </figure>
                        </div>
                    </div>

                    <div class="w-full h-full relative col-span-3 md:col-span-4 mx-auto "
                        style="border: none !important;">
                        <div class=" text-center inline-block">
                            <span class="font-bolder  tracking-wider text-2xl "
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
                    <span class="font-bolder tracking-wider text-2xl" style="color: #FAFAFA">Galaxy Tab s7</span>
                    <figure
                        class=" flex mx-auto bg-center bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5">
                        <img src="/img/Galaxy-Tab-S7.jpg" class="bg-center bg-contain">
                    </figure>
                </div>
                <div class="text-black rounded-sm font-bold text-center">
                    <span class="font-bolder tracking-wider text-2xl" style="color: #FAFAFA">Galaxy Watch Active</span>
                    <figure
                        class=" flex mx-auto bg-center bg-contain flex-wrap justify-center md:w-5/5 lg:w-5/5">
                        <img src="/img/GalaxyWatchActive_2.jpg" class="bg-center bg-contain">
                    </figure>
                </div> --}}
        </div>
    </div>
</div>
{{-- end producto card --}}