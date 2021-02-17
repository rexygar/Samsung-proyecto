@extends('layouts.Contenido')
@section('content')
    <div class="col">
        <div aria-label="breadcrumb">
            <ul class="breadcrumb align-right"
                style="background-color:grey ;margin-bottom:0px;padding: 20px; margin-top: 10px;">
                <li class="breadcrumb-item TrT0Xe grid-cols-1"><a href="{{ url('/') }}">HOME</a>
                    @foreach ($dir as $d)
                    / &nbsp;
                <ul class="align-right">
                    <li class="breadcrumb-item TrT0Xe" aria-current="page">
                        <a href="{{ $d['url'] }}">{{ $d['name'] }}</a>
                    </li>
                </ul>
                @endforeach
                </li>
            </ul>
        </div>
    </div>
    </div>
    <div class="section overflow-hidden ">
        <div class="container-fluid">
            <div class="grid grid-cols-1">
                <div class="grid grid-cols-4">
                    <div class="grid-rows-1">
                        <div class="grid-cols-6">
                            <div class="grid-cols-4">
                                <div class="grid-cols-4">
                                    <div class="row-fluid">
                                        <div class="grid-cols-2">
                                            <h5>Filtros</h5>
                                        </div>
                                        <div class="grid-cols-2">
                                            <h5>{{ count($productos) }} Resultados</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-cols-4">
                                    <div class="form-group">
                                        <select style="max-width: fit-content;" class="form-control" id="Ordenar">
                                            <option>Mas Nuevo</option>
                                            <option>Mas Viejo</option>
                                            <option>Mas Economico</option>
                                            <option>Mas Caro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="section" style="padding-top: 0;">
                                    <div class="container-fluid">
                                        <div class="grid">
                                            <div class="grid-cols-12">
                                                <div class="grid-cols-3">
                                                    <div class="grid-cols-6">
                                                        <div class="container-fluid">
                                                            <button type="button" class="form-control"
                                                                style="border: 0;font-weight: bold;" data-toggle="collapse"
                                                                data-target="#Resolucion">Resolucion</button>
                                                            <div id="Resolucion" class="collapse">
                                                                <br>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="GalaxyTabS">
                                                                    <label class="form-check-label"
                                                                        for="GalaxyTabS">Resolucion Full HD</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="GalaxyTabA">
                                                                    <label class="form-check-label"
                                                                        for="GalaxyTabA">Resolucion 4k</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="GalaxyTabActive">
                                                                    <label class="form-check-label"
                                                                        for="GalaxyTabActive">Resolucion 8k</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-cols-6 col-centered">
                                                        <div class="container-fluid">
                                                            <button type="button" class="form-control"
                                                                style="border: 0;font-weight: bold;" data-toggle="collapse"
                                                                data-target="#Tamaño">Tamaño</button>
                                                            <div id="Tamaño" class="collapse">
                                                                <br>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="75+pulgadas">
                                                                    <label class="form-check-label" for="75+pulgadas">Mas de
                                                                        75 Pulgadas</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="65+pulgadas">
                                                                    <label class="form-check-label" for="65+pulgadas">65" -
                                                                        74"</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="55+pulgadas">
                                                                    <label class="form-check-label" for="55+pulgadas">55" -
                                                                        64"</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="45+pulgadas">
                                                                    <label class="form-check-label" for="45+pulgadas">45" -
                                                                        54"</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-cols-6 col-centered">
                                                        <div class="container-fluid">
                                                            <button type="button" class="form-control"
                                                                style="border: 0;font-weight: bold;" data-toggle="collapse"
                                                                data-target="#Memoria">Memoria</button>
                                                            <div id="Memoria" class="collapse">
                                                                <br>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="16GB">
                                                                    <label class="form-check-label"
                                                                        for="75+pulgadas">16GB</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="32GB">
                                                                    <label class="form-check-label"
                                                                        for="65+pulgadas">32GB</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="64GB">
                                                                    <label class="form-check-label"
                                                                        for="55+pulgadas">64GB</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="128GB">
                                                                    <label class="form-check-label"
                                                                        for="45+pulgadas">128GB</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="256GB">
                                                                    <label class="form-check-label"
                                                                        for="45+pulgadas">256GB</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-cols-6 col-centered">
                                                        <div class="container-fluid">
                                                            <button type="button" class="form-control"
                                                                style="border: 0;font-weight: bold;" data-toggle="collapse"
                                                                data-target="#Camara">Camara</button>
                                                            <div id="Camara" class="collapse">
                                                                <br>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="~4.9MP">
                                                                    <label class="form-check-label"
                                                                        for="~4.9MP">~4.9MP</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="5~6.9MP">
                                                                    <label class="form-check-label"
                                                                        for="5~6.9MP">5~6.9MP</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="7~8.9MP">
                                                                    <label class="form-check-label"
                                                                        for="7~8.9MP">7~8.9MP</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="9~12.9MP">
                                                                    <label class="form-check-label"
                                                                        for="9~12.9MP">9~12.9MP</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="13~18.9MP">
                                                                    <label class="form-check-label"
                                                                        for="13~18.9MP">13~18.9MP</label>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="24MP ~">
                                                                    <label class="form-check-label" for="24MP ~">24MP
                                                                        ~</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-span-3 ">

                        <div class="grid col-rows-1">




                            <section class="relative pt-36 tp-48">
                                <div class="container mx-auto top-72">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                                        <div class="px-6">
                                            <div class="flex flex-wrap justify-center">

                                                <div class="w-full lg:w-full lg:order-1">
                                                    <div
                                                        class="justify-items-start md:justify-items-center py-4 lg:pt-4 pt-8">

                                                        <section class="relative py-36">

                                                            <div
                                                                class="grid grid-cols-3 gaps-4  w-full  md:w-full md:grid-cols-3">

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

    </div>

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

