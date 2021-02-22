
@foreach($Productos as $p)
<!-- component -->
<div class="container  mx-auto px-4 " >
    <div class="flex flex-wrap  grid grid-rows-1 md:grid-rows-1">

        <!-- Column -->
        <div class="my-1 px-1 w-full  md:w-full lg:my-4 lg:px-4 lg:w-full ">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="{{ URL('/') }}/Product/{{ $p->SKU }}">
                    <img alt="Placeholder" class="block h-auto w-full" src="https://via.placeholder.com/360x360?text=Tecnobuy.cl">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="{{ URL('/') }}/Product/{{ $p->SKU }}">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                          <span class="font-semibold leading-tight text-gray-800 hover:text-gray-800"></span>{{ $p->Descripcion }}
                        </a>
                    </h1>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="{{ URL('/') }}/Product/{{ $p->SKU }}">
                        
                        <p class="ml-2 text-sm">
                          $ {{ number_format($p->Precio, 0, ',', '.') }}
                        </p>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->
    </div>
</div>
@endforeach
