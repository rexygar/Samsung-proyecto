@@ -0,0 +1,66 @@
{{-- @extends('Layouts.Contenido')
@section('content')


 --}}

<div class="pl-4 pt-6 pb-2 w-full md:w-full  dark:border-gray-700 absolute z-50" style="background: #464646" >
    <nav class="breadcrumb" aria-label="breadcrumbs ">
      <ul>
        <li>
          <a href="#" >
            <span class="icon is-small">
              <i class="fas fa-home" aria-hidden="true"></i>
            </span>
            <span class="text-gray-500">Bulma</span>
          </a>
        </li>
        <li>
          <a href="#" >
            <span class="icon is-small">
              <i class="fas fa-book" aria-hidden="true"></i>
            </span>
            <span class="text-gray-500">Documentation</span>
          </a>
        </li>
        <li>
          <a href="#" >
            <span class="icon is-small">
              <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
            </span>
            <span class="text-gray-500">Components</span>
          </a>
        </li>
        <li class="is-active">
          <a href="#" >
            <span class="icon is-small">
              <i class="fas fa-thumbs-up" aria-hidden="true"></i>
            </span>
            <span class="text-gray-50">Breadcrumb</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>


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