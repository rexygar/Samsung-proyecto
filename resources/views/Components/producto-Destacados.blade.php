{{-- @extends('Layouts.Contenido')
@section('content') --}}
{{-- <style>
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
} 
  .panel-content {
    margin-bottom: -0.5em;
  }
</style> */ --}}
<link href="{{ asset('css/icon.css') }}" rel="stylesheet">
{{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
<div class="max-w-6xl   mx-auto sm:px-0 lg:px-4">
  <section class=" is-primary is-medium mt-8
    overflow-hidden  sm:rounded-lg">
    <!-- Hero head: will stick at the top -->
    {{-- Contenido --}}
    {{-- producto card --}}
    <div class="overflow-hidden  sm:rounded-lg">
      <div class="grid md:grid-cols-5 grid-cols-2 md:gap-4 gap-1">
        @foreach($destacados as $d)
        <div class="mb-10 md:container md:mx-auto px-4 md:px-0">
          <div class="">
            <a href="{{ URL('/') }}/Product/{{ $d->SKU }}">
              <div class="content">

                <div class="w-full max-w-6xl rounded md:mb-0  ">
                  <div class="relative panel-wrapper">
                    <div class=" ">
                      <figure class="image is-3by4">
                        <img src="https://via.placeholder.com/360x360?text=Tecnobuy.cl" class=" absolute z-10 " alt="">

                      </figure>

                      <h5 style="font-weight: 700;
                    font-size: 16px;" class="font-bold text-black text-base text-center overflow-auto">
                        {{ $d->Descripcion }}</h5>
                      <p style="font-weight: 700;
                      font-size: 18px;" class=" text-center text-black ">$ {{ number_format($d->Precio, 0, ',', '.') }}
                      </p>
                      <h6 class=" UPPERCASE text-center text-black" style="font-weight: 100">{{ $d->SKU }}</h6>
                      {{-- <a href="{{ URL('/') }}/Product/{{ $d->SKU }}"
                      class="bg-black font-bold transform skew-x-6 lowercase md:flex md:justify-center md:mx-6 lg:mx-10
                      text-white">Comprar
            </a> --}}

          </div>
        </div>
      </div>
    </div>
    </a>

</div>

</div>
@endforeach
</div>
</div>
{{-- end producto card --}} </section>
</div>