{{-- @extends('Layouts.Contenido')
@section('content') --}}

<div class="pt-10 max-w-screen-xl  mx-auto place-content-center sm:px-6 lg:px-8">
    <section class=" mb-10 md:container md:mx-auto">
        <!-- Hero head: will stick at the top -->
        {{-- Contenido --}}
        {{-- producto card --}}
        <div class="grid grid-flow-row auto-rows-max">
            <div class="mt-8   sm:rounded-lg">
                <div class="grid grid-cols-3 gap-2 place-content-center">
                    <div class="px-4 place-self-auto">
                        <div class="text-center  uppercase text-2xl text-gray-600 font-bold">productos Destacados</div>
                    </div>
                    <div class="col-span-2">
                        <hr class="border-2 border-blue-300 bg-blue-300">
                    </div>

                </div>
            </div>


        </div>
        <div class="pt-10 max-w-screen-xl  container mx-auto lg:w-full md:w-full">
            <div class="grid grid-cols-3 lg:grid-cols-3 gap-4 lg:gap-8">
                <!-- ... -->
                <div class="text-bold text-center col-start-1">
                    <span>Galaxy Note 20</span>
                    <figure class="image is-16by9 flex flex-wrap justify-center md:w-5/5 lg:w-4/5">
                        <img src="/img/note-20.jpg">
                    </figure>
                </div>
                <div class="text-bold text-center">
                    <span>Galaxy Tab s7</span>
                    <figure class="image is-16by9 flex flex-wrap justify-center md:w-5/5 lg:w-4/5">
                         <img src="/img/Galaxy-Tab-S7.jpg">
                    </figure>
                </div>
                <div class="text-bold text-center">
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