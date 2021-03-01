{{-- @extends('Layouts.Contenido')
@section('content') --}}
<div class="max-w-full mx-auto place-content-center sm:px-6 lg:px-8">
  <section class=" md:container md:mx-auto">
    <!-- Hero head: will stick at the top -->
    {{-- Contenido --}}
    {{-- producto card --}}
    <div class="grid grid-cols-1 gap-2 place-content-center ">
      <div class="sm:rounded-lg">
        <div class="grid grid-cols-1 gap-2 place-content-center">
          <div class="text-center  uppercase text-2xl tracking-wide text-black font-bold  pb-2">Productos en oferta
          </div>
        </div>

        <div class="grid grid-cols-3 gap-2 place-content-center align-middle">
          <div class="inline-block col-span-3 align-middle ">
            <div class="inline-block relative align-middle">
              <hr class="border-hr col-span-1 w-full px-24 align-bottom border-blue-500 bg-blue-500">
            </div>
            <div class="px-4  inline-block align-middle">
              <h1 class="text-3xl col-span-1  bg-yellow-300 font-bold"> <img class="branding__logo img-fluid"
                  src="{{ asset('img/logo.png') }}" width="95" alt=""></h1>
            </div>
            <div class="inline-block relative align-middle">
              <hr class="border-hr col-span-1 w-full px-24 align-bottom border-blue-500 bg-blue-500">
            </div>
          </div>

        </div>
      </div>


    </div>
</div>
{{-- end producto card --}} </section>
</div>