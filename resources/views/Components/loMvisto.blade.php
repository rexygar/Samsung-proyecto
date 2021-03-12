{{-- @extends('Layouts.Contenido')
@section('content') --}}
<div class="max-w-full mx-auto place-content-center sm:px-6 lg:px-8">
  <section class=" md:container md:mx-auto">
    <!-- Hero head: will stick at the top -->
    {{-- Contenido --}}
    {{-- producto card --}}
    <div class="grid grid-cols-1 gap-2 place-content-center">
      <div class="mt-8  sm:rounded-lg">
        <div class="grid grid-cols-12 mx-auto">
          <div class="mx-auto container col-span-12 col-start-3">
            <div class="grid-cols-12 grid">
              <div class="mt-8 col-span-6">
                <div class="grid grid-cols-1 gap-2 place-content-center">
                  <div class="text-center uppercase tracking-wide text-2xl font-bold bg-black pb-6 px-6"
                    style="color: #FAFAFA">
                    <span class="inline-block align-middle"> Productos Destacados</span>
                  </div>
                </div>
        
              </div>
              <div class=" inline-block sm:pt-8 lg:pt-6 pb-5 font-bold opacity-100  col-span-4 ">
                <div class=" h-2 flex col-span-5 ">
                  <div>&nbsp;</div>
                  <div class="h-2 bg-yellow-500 flex-1"></div>
                  <div class="h-2 bg-yellow-500 flex-1"></div>
                  <div class="h-2 bg-yellow-500 flex-1"></div>
                  <div class="h-2 bg-yellow-500 flex-1"></div>
                  <div class="h-2 bg-yellow-500 flex-1"></div>
                  <div class="h-2 bg-yellow-500 flex-1"></div>
                </div>
              </div>
              <div
                class="h-full w-full bg-white tracking-wide lg:text-4xl  md:text-3xl col-start-1  col-span-1 lg:col-span-1 text-2xl  text-left">
                <img class="img-fluid" src="{{ asset('img/logo.png') }}" max-width="95px" alt="">

              </div>
              <div class=" inline-block sm:pt-8 lg:pt-6 pb-5 font-bold opacity-100  col-span-4 ">
                <div class=" h-2 flex col-span-5 ">
                  <div>&nbsp;</div>
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
      </div>


    </div>
</div>
{{-- end producto card --}} </section>
</div>