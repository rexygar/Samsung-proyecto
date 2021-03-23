<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/img/logo_icon.png">
    <title>TecnoBuy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Megamenu.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<script src="{{ asset('js/lib/jquery.js') }}"></script>
<script src="{{ asset('js/dist/jquery.validate.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<link type="text/css" rel="stylesheet" href="{{ asset('css/style_for_quantity.css') }}" />
<style>
    label.error {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        padding: 1px 20px 1px 20px;
    }

    .rTable {

        display: block;
        width: 100%;

    }

    .rTableHeading,
    .rTableBody,
    .rTableFoot,
    .rTableRow {
        clear: both;
    }

    .rTableHead,
    .rTableFoot {
        color: aliceblue;
        background-color: #2473b6;
        font-weight: bold;
    }

    .rTableCell,
    .rTableHead {

        float: left;
        overflow: hidden;
        padding: 3px 1.8%;
        width: 20%;

    }

    .btn_bkg {

        background: white;

    }

    .fnt_bkg {

        color: #2473b6;

    }


    .rTable:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
    }
</style>

@include('Components.Header')
@include('Components.Megamenu')

<body class="bg-gray-100">
    <div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8">
        <div class="col-span-1"></div>
        <div class="col-span-6 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6" style="background-color: aliceblue">

            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
            border-dotted" style="background-color: aliceblue">
                        Ordenar Por
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">
                    <select class="form-control w-full" id="Ordenar">
                        <option>Mas Nuevo</option>
                        <option>Mas Viejo</option>
                        <option>Mas Economico</option>
                        <option>Mas Caro</option>
                    </select>
                </div>


            </article>

            <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                        border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                        Tamaño
                    </p>
                </div>
                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="75+pulgadas">
                    <label class="form-check-label" for="75+pulgadas">Mas de
                        75 Pulgadas</label>
                </div>
                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="65+pulgadas">
                    <label class="form-check-label" for="65+pulgadas">65" -
                        74"</label>
                </div>
                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="55+pulgadas">
                    <label class="form-check-label" for="55+pulgadas">55" -
                        64"</label>
                </div>
                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="45+pulgadas">
                    <label class="form-check-label" for="45+pulgadas">45" -
                        54"</label>
                </div>
                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="65+pulgadas">
                    <label class="form-check-label" for="65+pulgadas">65" -
                        74"</label>
                </div>
                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="55+pulgadas">
                    <label class="form-check-label" for="55+pulgadas">55" -
                        64"</label>
                </div>
            </article>

        </div>
        <div class="col-span-5 lx:px-8 lg:pl-12 xl:pl-12 2xl:pl-12 md:px-4 xl:px-10 2xl:px-16" style="background-color: aliceblue">

            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
            border-dotted" style="background-color: aliceblue">
                        Ordenar Por
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">
                    <select class="form-control w-full" id="Ordenar">
                        <option>Mas Nuevo</option>
                        <option>Mas Viejo</option>
                        <option>Mas Economico</option>
                        <option>Mas Caro</option>
                    </select>
                </div>


            </article>
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
            border-dotted" style="background-color: aliceblue">
                        Ordenar Por
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="65+pulgadas">
                    <label class="form-check-label" for="65+pulgadas">65" -
                        74"</label>
                </div>
                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="55+pulgadas">
                    <label class="form-check-label" for="55+pulgadas">55" -
                        64"</label>
                </div>
                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="65+pulgadas">
                    <label class="form-check-label" for="65+pulgadas">65" -
                        74"</label>
                </div>
                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>
                    <input type="checkbox" class="form-check-input" id="55+pulgadas">
                    <label class="form-check-label" for="55+pulgadas">55" -
                        64"</label>
                </div>


            </article>
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
            border-dotted" style="background-color: aliceblue">
                        Ordenar Por
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">
                    
                </div>
            </article>
        </div>

    </div>
</body>





<!-- /SECTION -->

<script>
    //TO DO: ajax will take place

    $('.add').click(function () {

        var product_id = $(this).val();
        $(this).prev().val(+$(this).prev().val() + 1);
        var x = $(this).prev().val();
        var token = $("input[name=_token]").val();
        var order_serial = this.getAttribute('data-rel');
        var product_price = this.getAttribute('data-rel2');


        $.ajax({
            type: 'post',
            url: url,
            dataType: "JSON",
            async: false,
            data: {
                pid: product_id,
                newQ: x,
                oSerial: order_serial,
                _token: token
            },
            success: function (msg) {
                document.getElementById("individualPrice_" + order_serial).innerHTML = x *
                    product_price + " TK";
                document.getElementById("totalCost").innerHTML = msg[2] + " TK";
            }
        });


    });
    $('.sub').click(function () {

       
        var product_id = $(this).val();
        var order_serial = this.getAttribute('data-rel');
        var product_price = this.getAttribute('data-rel2');
        if ($(this).next().val() > 1) {
            $(this).next().val(+$(this).next().val() - 1);
            var x = $(this).next().val();
            var token = $("input[name=_token]").val();


            $.ajax({
                type: 'post',
                url: url,
                dataType: "JSON",
                async: false,
                data: {
                    pid: product_id,
                    newQ: x,
                    oSerial: order_serial,
                    _token: token
                },
                success: function (msg) {
                    document.getElementById("individualPrice_" + order_serial).innerHTML =
                        x * product_price + " TK";
                    document.getElementById("totalCost").innerHTML = msg[2] + " TK";

                }
            });


        }
    });

    $('.delete_item').click(function () {
        
        var serial = $(this).val(); //serial is the forth element of sale coloumn
        var token = $("input[name=_token]").val();
        var id_holder = "deleteItem_" + serial;
        $.ajax({
            type: 'post',
            url: url,
            dataType: "JSON",
            async: false,
            data: {
                serial: serial,
                _token: token
            },
            success: function (msg) {
                if (msg == "Empty") {
                    document.getElementById("order_summary").innerHTML =
                        "<div class='order-col'><h1>Your Cart is Empty</h1></div>";
                    document.getElementById("confirm_order").style.visibility = "hidden";
                }

                //$("#deleteItem_".$p->id").load(location.href+" #refresh_div","");
                document.getElementById(id_holder).innerHTML = "";
                document.getElementById("totalCost").innerHTML = msg[2];
            }
        });


    });


    //validation

    $(document).ready(function () {
        // validate the comment form when it is submitted
        //$("#commentForm").validate();

        // validate signup form on keyup and submit
        


    });

</script>
<script>
    function myFunction() {
        //var token={{ csrf_token() }};
        var email = $("#email").val();
        var token = $("input[name=_token]").val();
   


        $.ajax({
            type: 'post',
            url: url,
            dataType: "JSON",
            async: false,
            data: {
                email: email,
                _token: token
            },
            success: function (msg) {


                if (msg == "1") {
                    document.getElementById("for_duplicate-email").innerHTML =
                        "<label class='error'>This Email Address is Already taken</label>";


                } else {
                    document.getElementById("for_duplicate-email").innerHTML = "";

                }
            }
        });

    }

</script>

<script src="{{ asset('js/carrito.js') }}"></script>
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
<script src="{{ asset('js/toastr/toastr.js') }}"></script>