{{-- @extends('Layouts.Contenido')
@section('content') --}}

<div class="pt-10 place-content-center md:px-6 lg:px-8">
    <section class=" mb-10">
        <!-- Hero head: will stick at the top -->
        {{-- Contenido --}}
        {{-- producto card --}}
        <div class="grid grid-flow-row auto-rows-max lg:-ml-36">
            <div class="mt-8">
                <div class="grid grid-cols-3 gap-2 place-content-center">
                    <div class="px-4 lg:-ml-0 place-self-auto">
                        <div class="text-center  uppercase text-2xl md:text-xl text-gray-600 font-bold">productos Destacados</div>
                    </div>
                    <div class="col-span-2 lg:w-5/5 lg:-ml-36 ">
                        <hr class="border-2 border-blue-300 bg-blue-300">
                    </div>

                </div>
            </div>


        </div>
        <div class="pt-10  lg:w-full md:w-full">
            <div class="grid grid-cols-3 lg:grid-cols-3 gap-4 lg:gap-8">
                <!-- ... -->
                <div class="text-black font-bold text-center col-start-1">
                    <span>Galaxy Note 20</span>
                    <figure class="image is-16by9 flex flex-wrap justify-center md:w-5/5 lg:w-4/5">
                        <img src="/img/note-20.jpg">
                    </figure>
                </div>
                <div class="text-black font-bold text-center">
                    <span>Galaxy Tab s7</span>
                    <figure class="image is-16by9 flex flex-wrap justify-center md:w-5/5 lg:w-4/5">
                         <img src="/img/Galaxy-Tab-S7.jpg">
                    </figure>
                </div>
                <div class="text-black font-bold text-center">
                    <span>Galaxy Watch Active</span>
                    <figure class="image is-16by9 flex flex-wrap justify-center md:w-5/5 lg:w-4/5">
                         <img src="/img/GalaxyWatchActive_2.jpg">
                    </figure>
                </div>
            </div>
        </div>
</div>
{{-- end producto card --}} </section>
</div>