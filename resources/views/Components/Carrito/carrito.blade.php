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

<body class="bg-white">
    <div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8">
        <div class="col-span-1"></div>
        <div class="col-span-6 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6" style="background-color: white">

            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                        <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                            <span class="text-3xl"><i class="fas fa-shopping-cart"></i> Mis Productos (1)</span>
                        </h3>
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">

                </div>


            </article>

            <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                        border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                        tecnobuy.cl
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">

                    <!--Card 1-->
                    <div class=" w-full lg:max-w-full lg:flex">
                        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                            style="background-image: url({{ url('../uploads/products/1/buds.jpg') }});">
                        </div>
                        <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                            style="background-color: aliceblue">
                            <div class="mb-8">
                                <p class="text-sm text-gray-600 flex items-center">
                                    $149.990
                                </p>
                                <div class="text-gray-900 font-bold text-xl mb-2">GALAXY BUDS+</div>
                                <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem
                                    praesentium nihil.</p>
                            </div>

                        </div>
                    </div>

                </div>
            </article>

            <article style="background-color: aliceblue" class="panel is-primary col-start-1 col-end-3">

                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25  text-gray-600
                        border-dotted" style="background-color: aliceblue"><i class="fas fa-expand-alt"></i>
                        tecnobuy.cl
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">

                    <!--Card 1-->
                    <div class=" w-full lg:max-w-full lg:flex">
                        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                            style="background-image: url({{ url('../uploads/products/1/46mm.jpg') }});">
                        </div>
                        <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                            style="background-color: aliceblue">
                            <div class="mb-8">
                                <p class="text-sm text-gray-600 flex items-center">
                                    $259.990
                                </p>
                                <div class="text-gray-900 font-bold text-xl mb-2">GALAXY WATCH 46 MM</div>
                                <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem
                                    praesentium nihil.</p>
                            </div>

                        </div>
                    </div>

                </div>
            </article>

        </div>
        <div class="col-span-5 lx:px-8 lg:pl-12 xl:pl-12 2xl:pl-12 md:px-4 xl:px-10 2xl:px-16"
            style="background-color: white">
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
            border-dotted" style="background-color: aliceblue">
                        Seguir con la compra
                    </p>
                </div>


                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>

                    <span class="form-check-label">El costo de entrega se calculará al añadir la dirección</span>
                </div>


            </article>
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
            border-dotted" style="background-color: aliceblue">
                        Sub-Total
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">
                    <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                        <span class="text-3xl">$410.000</span>
                    </h3>
                </div>


            </article>
            
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
            border-dotted" style="background-color: aliceblue">
                        Despacho
                    </p>
                </div>


                <div class="panel-block" style="background-color: aliceblue">
                    <span class="panel-icon">

                    </span>

                    <span class="form-check-label">El costo de entrega se calculará al añadir la dirección</span>
                </div>


            </article>
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
            border-dotted" style="background-color: aliceblue">
                        Metodos de pago
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">
                    <img src="../img/Metodos_Pago.PNG" alt="">
                </div>
            </article>
            <article style="background-color: aliceblue" class="panel is-primary  ">
                <div class="px-6">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
            border-dotted" style="background-color: aliceblue">
                        Cambios y devoluciones
                    </p>
                </div>

                <div class="panel-block" style="background-color: aliceblue">
                    <p class=" tracking-normal py-1 border-b-2 border-opacity-25 
                    border-dotted" style="background-color: aliceblue">
                        Puedes cambiar tus productos en cualquier tienda Paris hasta 30 días después de la fecha de
                        compra.
                    </p>
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