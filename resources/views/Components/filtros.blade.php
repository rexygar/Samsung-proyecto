@extends('layouts.Contenido')
@section('content')
{{-- <div class="mx-auto w-1/2 absolute md:w-full" style="z-index: 0;background-color: #F8F1F1">
    <div aria-label="breadcrumb overflow-hidden">
        <ul class="breadcrumb align-right"
            style="background-color:black ;margin-bottom:0px;padding: 20px; margin-top: 10px;">
            <li class="breadcrumb-item text-gray-50 grid-cols-1"><a href="{{ url('/') }}"><span
    class="text-gray-50 md:text-base">HOME</span></a>
@foreach ($dir as $d)
/ &nbsp;
<ul class="align-right">
    <li class="breadcrumb-item text-gray-50" aria-current="page">
        <a href="{{ $d['url'] }}"><span class="text-gray-50  md:text-base">{{ $d['name'] }}</span></a>
    </li>
</ul>
@endforeach
</li>
</ul>
</div>
</div>
</div> --}}
<div class="h-full overflow-visible z-50">
    <div class="grid grid-cols-1">
        <div class="grid lg:grid-cols-9 md:grid-cols-7">
            <div class="md:col-span-2 lg:col-span-2">
                <div class="grid-rows-1  ">
                    <div class="mx-auto md:w-full" style="z-index: 0;background-color: white">
                        <aside class="menu">
                            <div aria-label="breadcrumb overflow-hidden py-0 rounded-lg">
                                <ul class="breadcrumb align-right"
                                    style="background-color:black ;margin-bottom:0px;padding: 20px; margin-top: 10px;">
                                    <li class="breadcrumb-item text-gray-50 grid-cols-1"><a href="{{ url('/') }}"><span
                                                class="text-gray-50 md:text-base">HOME</span></a>
                                        @foreach ($dir as $d)
                                        / &nbsp;
                                        <ul class="align-right">
                                            <li class="breadcrumb-item text-gray-50" aria-current="page">
                                                <a href="{{ $d['url'] }}"><span class="text-gray-50  md:text-base">{{ $d['name']
                                                    }}</span></a>
                                            </li>
                                        </ul>
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <div class="mx-auto col-span-1 pb-60 overflow-visible" style="z-index: 0;">

                        <article class="panel is-primary ">
                            <p class="panel-heading" style="background-color: rgb(248, 175, 34)">
                                Ordenar Por
                            </p>

                            <div class="panel-block">
                                <select style="max-width: fit-content;" class="form-control" id="Ordenar">
                                    <option>Mas Nuevo</option>
                                    <option>Mas Viejo</option>
                                    <option>Mas Economico</option>
                                    <option>Mas Caro</option>
                                </select>
                            </div>


                        </article>
                        <article class="panel is-primary">
                            <p class="panel-heading" style="background-color:black">
                                Resolucion
                            </p>

                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="GalaxyTabS">
                                <label class="form-check-label" for="GalaxyTabS">Resolucion
                                    Full HD</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="GalaxyTabA">
                                <label class="form-check-label" for="GalaxyTabA">Resolucion
                                    4k</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="GalaxyTabActive">
                                <label class="form-check-label" for="GalaxyTabActive">Resolucion
                                    8k</label>
                            </div>
                        </article>
                        <article class="panel is-primary">
                            <p class="panel-heading" style="background-color: rgb(248, 175, 34)">
                                Tamaño
                            </p>

                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="75+pulgadas">
                                <label class="form-check-label" for="75+pulgadas">Mas de
                                    75 Pulgadas</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="65+pulgadas">
                                <label class="form-check-label" for="65+pulgadas">65" -
                                    74"</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="55+pulgadas">
                                <label class="form-check-label" for="55+pulgadas">55" -
                                    64"</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="45+pulgadas">
                                <label class="form-check-label" for="45+pulgadas">45" -
                                    54"</label>
                            </div>
                        </article>

                        <article class="panel is-primary">
                            <p class="panel-heading" style="background-color:black">
                                Memoria
                            </p>

                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="16GB">
                                <label class="form-check-label" for="75+pulgadas">16GB</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="32GB">
                                <label class="form-check-label" for="65+pulgadas">32GB</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="64GB">
                                <label class="form-check-label" for="55+pulgadas">64GB</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="128GB">
                                <label class="form-check-label" for="45+pulgadas">128GB</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="256GB">
                                <label class="form-check-label" for="45+pulgadas">256GB</label>
                            </div>
                        </article>
                        <article class="panel is-primary">
                            <p class="panel-heading" style="background-color: rgb(248, 175, 34)">
                                Camara
                            </p>

                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="~4.9MP">
                                <label class="form-check-label" for="~4.9MP">~4.9MP</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="5~6.9MP">
                                <label class="form-check-label" for="5~6.9MP">5~6.9MP</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="7~8.9MP">
                                <label class="form-check-label" for="7~8.9MP">7~8.9MP</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="9~12.9MP">
                                <label class="form-check-label" for="9~12.9MP">9~12.9MP</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="13~18.9MP">
                                <label class="form-check-label" for="13~18.9MP">13~18.9MP</label>
                            </div>
                            <div class="panel-block">
                                <span class="panel-icon">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <input type="checkbox" class="form-check-input" id="24MP ~">
                                <label class="form-check-label" for="24MP ~">24MP
                                    ~</label>
                            </div>
                        </article>

                        </aside>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7  md:col-span-5 px-6">
                <div class="grid col-rows-1 mb-60">
                    <section class="relative ">
                        <div class="container mx-auto ">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg ">
                                <div class="md:px-6">
                                    <div class="flex flex-wrap justify-center">

                                        <div class="w-full lg:w-full lg:order-1">
                                            <div class="justify-items-start md:justify-items-center py-4 lg:pt-4 pt-8">

                                                <section class="relative">
                                                    <div
                                                        class="grid grid-cols-3 gaps-4  w-full  md:w-full md:grid-cols-3 pb-60">

                                                        @include('Components.producto-card', ['Productos' =>
                                                        $productos])
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>


                </div>
            </div>
        </div>
    </div>


</div>

@include('Components.trade-in-cat')

<script data-require="jquery@3.1.1" data-semver="3.1.1"
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
    //////////////////////////////////////
        $(document).ready(function() {

            $("#order_form").validate({

                submitHandler: function(form) {
                    if ($('input[name=color]:checked').val() == undefined) {

                        document.getElementById("for_error").innerHTML =
                            "<label class='error' style=' '>Invalid Variation Input</label>";

                    } else {
                        return true;
                    }

                }
            });


        });

        $('.add').click(function() {

            $(this).prev().val(+$(this).prev().val() + 1);

        });
        $('.sub').click(function() {
            if ($(this).next().val() > 1) {
                $(this).next().val(+$(this).next().val() - 1);
            }
        });

</script>


@endsection