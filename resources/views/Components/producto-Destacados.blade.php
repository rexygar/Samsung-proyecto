{{-- @extends('Layouts.Contenido')
@section('content') --}}
<style>
  .blue-clr {
    color: #308fcb !important;
  }

  .blue-clr-bg {
    background-color: #308fcb;
  }

  .panel-wrapper {
    overflow: hidden;
  }

  .panel {
    border: 2px solid #308fcb;
    border-bottom: 0;
    padding: 1em;
    margin: 1em 0 0;
  }

  .panel-header {
    position: relative;
    /* top: 0.5em; */
    padding-left: 0.4em;
    padding-right: 0.4em;
    font-size: 1.2rem;
    font-weight: bold;
  }

  /* .panel-header:before, */
  .panel-header:after {
    content: "";
    /* position: absolute; */
    height: 2px;
    background: #308fcb;
    top: 50%;
  }

  /* .panel-header:before {
    width: 100px;
    left: -100px;
}
.panel-header:after {
    width: 1000px;
    right: -1000px;
} */
  .panel-content {
    margin-bottom: -0.5em;
  }
</style>
<link href="{{ asset('css/icon.css') }}" rel="stylesheet">
{{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
<div class="max-w-6xl   mx-auto sm:px-0 lg:px-4">
  <section class=" is-primary is-medium mt-8
    overflow-hidden  sm:rounded-lg">
    <!-- Hero head: will stick at the top -->
    {{-- Contenido --}}
    {{-- producto card --}}
    <div class="mt-8 overflow-hidden  sm:rounded-lg">
      <div class="grid grid-cols-5  gap-4">
        @foreach($oferta as $d)
        <div class="mb-10 md:container md:mx-auto">
          <div class="">
            <div class="content">

              <div class="w-full max-w-6xl rounded md:mb-0">
                <div class="relative panel-wrapper">
                  <div class="border-2 border-blue-300 pt-5 pb-5 panel">
                    <img src="https://via.placeholder.com/360x360?text=Tecnobuy.cl"
                      class="w-full h-auto relative z-10 md:py-8" alt="">

                    <div
                      class="panel-header z-15 tp-50  md:flex md:justify-center md:mx-6 lg:mx-10 text-center  bg:white"
                      style="z-index: 99;background: transparent;">
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-gray-600">
                        grade
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h5 class="font-bold  text-base text-center overflow-auto ">{{ $d->Descripcion }}</h5>
          <p class="text-sm font-bold text-center blue-clr ">$ {{ number_format($d->Precio, 0, ',', '.') }}</p>
          <a href="{{ URL('/') }}/Product/{{ $d->SKU }}"
            class="blue-clr-bg font-bold lowercase md:flex md:justify-center md:mx-6 lg:mx-10 text-white">Comprar</a>

          <h6 class=" UPPERCASE mb-5 text-center " style="font-weight: 100">{{ $d->SKU }}</h6>
        </div>
        @endforeach
      </div>
    </div>
    {{-- end producto card --}} </section>
</div>