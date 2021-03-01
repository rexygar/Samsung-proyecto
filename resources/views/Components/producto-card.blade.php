 
    @foreach($Productos as $p) 
    <div class="mb-10 md:container md:mx-auto lg:container lg:mx-auto ">
<a href="{{ URL('/') }}/Product/{{ $p->SKU }}">
        <div class="content">
            <div class="w-full max-w-6xl rounded md:mb-0  ">
                <div class="relative panel-wrapper">
                    <div class=" ">
                        <figure class="image is-3by4">
                            <img src="https://via.placeholder.com/360x360?text=Tecnobuy.cl" class=" absolute z-10 "
                                alt="">

                        </figure>

                        <h5 style="font-weight: 700;
              font-size: 18px;" class="font-bold text-black text-base text-center overflow-auto">
                            {{ $p->Descripcion }}</h5>
                        
                        <p style="font-weight: 700;
              font-size: 18px;" class=" text-center UPPERCASE text-black ">$ {{ number_format($p->Precio, 0, ',', '.') }}
                        </p>

                        <h6 class=" UPPERCASE text-center text-black" style="font-weight: 100;">{{ $p->SKU }}</h6>
                        {{-- <a href="{{ URL('/') }}/Product/{{ $d->SKU }}"
                        class="bg-black font-bold transform skew-x-6 lowercase md:flex md:justify-center md:mx-6
                        lg:mx-10
                        text-white">Comprar</a> --}}

                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>

    @endforeach
 