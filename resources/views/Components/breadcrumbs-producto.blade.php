{{-- @extends('Layouts.Contenido')
@section('content')


    <div class="lg:w-full">
        <div class="relative flex-grow max-w-full flex-1 px-4">
            <div aria-label="breadcrumb overflow-hidden py-0 rounded-lg">
                <DIV class="breadcrumb align-right"
                    style="background-color:black ;margin-bottom:0px;padding: 20px; margin-top: 10px;">
                
                <ol class="flex flex-wrap list-reset pt-3 pb-3 py-4 px-4 mb-4 bg-gray-200 rounded " style="background-color:grey ;margin-bottom:0px;padding: 20px;">
                    <li class="inline-block px-2 py-2 text-gray-700 TrT0Xe col-md-offset-1"><a href="   #">{{Home}}</a>
</li>
<li class="inline-block px-2 py-2 text-gray-700 TrT0Xe " aria-current="page"><a
    href="{{ $product['SupCategoria'] }}">{{$product->SupCategoria}}</a></li>
<li class="inline-block px-2 py-2 text-gray-700 TrT0Xe " aria-current="page"><a
    href="{{ $product['Categoria'] }}">{{$product->Categoria}}</a></li>
<li class="inline-block px-2 py-2 text-gray-700 TrT0Xe active" aria-current="page"><a
    href="{{ $product['SubCategoria'] }}">{{$product->SubCategoria}}</a></li>
</ol>
</DIV>
</DIV>
</div>
</div>

--}}
@for ($i = 0; $i < 1; $i++) <div class="pl-4 pt-6 pb-2 w-full md:w-full  dark:border-gray-700 absolute z-50"
  style="background: #464646">
  <nav class="breadcrumb" aria-label="breadcrumbs ">
    <ul>
      <li>
        <a href="{{ url('/') }}">
          <span class="text-gray-500 text-xs lg:text-base"><a href="{{ url('/') }}">Inicio</a></span>
        </a>
      </li>
      <li>
        <a href="/Categoria/{{ $product->SupCategoria }}">
          <span class="text-gray-500 text-xs lg:text-base">{{$product->SupCategoria}}</span>
        </a>
      </li>
      <li>
        <a href="/Categoria/{{ $product->SupCategoria }}/{{ $product->Categoria }}">
          <span class="text-gray-500 text-xs lg:text-base">{{$product->Categoria}}</span>
        </a>
      </li>
      <li>
        <a href="/Categoria/{{ $product->SupCategoria }}/{{ $product->Categoria }}/{{ $product->SubCategoria }}">
          <span class="text-gray-50">{{$product->SubCategoria}}</span>
        </a>
      </li>
      <li class="is-active">
        <a href="{{ $product->SKU }}">
          <span class="text-gray-50">{{$product->Descripcion}}</span>
        </a>
      </li>
    </ul>
  </nav>
  </div>
  @endfor

  {{-- 
    
    <div class="w-full">
    <div class="p-6 w-full md:w-full bg-gray-500 dark:border-gray-700 relative z-50">
        <nav class="breadcrumb" aria-label="breadcrumbs ">
            <div aria-label="breadcrumb">
                <ul class="flex justify-start">
                    <li class="breadcrumb-item TrT0Xe grid-cols-1"><a href="{{ url('/') }}">HOME</a></li>
  @foreach ($dir as $d)
  <li class="mr-6">
    <a href="{{ $d['url'] }}">{{ $d['name'] }}</a>
  </li>
  @endforeach

  </ul>
  </div>
  </nav>
  </div>
  </div>
  --}}