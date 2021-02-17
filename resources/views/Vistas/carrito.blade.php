@extends('Layouts.Contenido')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<script src="{{ asset('js/lib/jquery.js') }}"></script>
<script src="{{ asset('js/dist/jquery.validate.js') }}"></script>
<script data-require="jquery@3.1.1" data-semver="3.1.1"
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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

<body class="antialiased bg-primary-very-light font-sans">
    <div class="lg:w-custom w-full rounded-lg pt-36">
        <section class="flex flex-col lg:flex-row items-start  lg:justify-auto w-full lg:px-4">
            <article class="bg-white w-full lg:w-custom mb-10 lg:px-4 px-6 text-center text-primary-dark rounded-lg">
                <div class="container mx-auto sm:px-4">
                    <!-- row -->

                    <div class="md:w-full pr-4 pl-4">
                        <div class="md:w-full pr-4 pl-4 order-details">
                            <div class="section-title text-center">
                                <h3 class="title">Mi Carrito</h3>
                            </div>
                            <div class="rTable row-fluid">
                                <div class="rTableRow md:w-full pr-4 pl-4" style="width: 30%;clear: none;">
                                    <div class=""><strong>Seleccionar Todo</strong></div>

                                    <div class="" id="deleteItem_">
                                        <button type="button" id="delete_item" value=" " name="delete_item"
                                            class="delete_item btn_bkg  "><i class="fnt_bkg fas fa-check"></i></button>

                                    </div>
                                </div>
                                <div class="rTableRow col-md-offset-4 md:w-full pr-4 pl-4"
                                    style="width: 30%;clear: none;">
                                    <div class=""><strong>Borrar Todo</strong></div>

                                    <div class="" id="deleteItem_">
                                        <button type="button" id="delete_item" value=" " name="delete_item"
                                            class="delete_item  btn_bkg "><i class="fas fa-trash fnt_bkg"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </article>
        </section>

        <div class="bg-right bg-cover" style="background-image:url('bg.svg');">
            <section class="flex flex-col lg:flex-row items-start  lg:justify-auto w-full w-full lg:px-10 px-16 ">
                <article
                    class="bg-white w-4/5 lg:w-custom mb-10 lg:px-4 px-6 py-10 text-center text-primary-dark rounded-lg">

                    <!-- Order Details -->
                    <div class="md:w-full pr-4 pl-4 order-details">
                        <div class="section-title text-center">
                            <h3 class="title">Your Order</h3>
                        </div>
                        <div id="order_summary" class="order-summary">




                            <div class="rTable border-collapse border border-green-800">
                                <div class="rTableRow">
                                    <div class="rTableHead border border-blue-600"><strong>REMOVE</strong></div>
                                    <div class="rTableHead border border-blue-600"><strong>PRODUCT</strong></div>
                                    <div class="rTableHead border border-blue-600"><strong>QUANTITY</strong></div>
                                    <div class="rTableHead border border-blue-600"><strong>COLOR</strong></div>
                                    <div class="rTableHead border border-blue-600"><strong>PRICE</strong></div>

                                </div>

                                {{-- @foreach ($product as $producto) --}}
                                <div class="rTableRow" id="deleteItem_">

                                    <div class="rTableCell"> <button type="button" id="delete_item" value=" "
                                            name="delete_item" class="delete_item btn_bkg  "><i
                                                class="fnt_bkg fas fa-trash"></i></button></div>
                                    <div class="rTableCell"><img src="../uploads/products/1/1.jpg" height="50px"
                                            width="50px">
                                        {{--   {{$producto->Descripcion}} --}}
                                    </div>

                                    <!--quantity-->
                                    <!--c[1] is pid and c[3] is order serial-->
                                    <div class="rTableCell">
                                        <button type="button" id="sub" value=" data-rel= " -rel2=""
                                            class=" btn_bkg sub"><i class=" fnt_bkg fas fa-minus-square"></i></button>
                                        <input type="number" id="quantity" style="width:30%" name="" value="1" max="100"
                                            readonly />
                                        <button type="button" id="add" value=" " data-rel="" -rel2=""
                                            class="add  btn_bkg "><i class="fas fa-plus-square fnt_bkg"></i></button>
                                    </div>

                                    <!--                            -->
                                    <div class="rTableCell">
                                        <div style="height:25px;width:25px;display:inline-block;background-color:">
                                        </div>
                                    </div>
                                    {{-- {{$carrito->color}} --}}

                                    <div class="rTableCell">
                                        <div id="individualPrice_">
                                            {{-- {{$producto->Precio}} --}}
                                        </div>
                                    </div>

                                </div>

                            </div>



                        </div>
                        <div class="payment-method">
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-2" checked>
                                <label for="payment-2">
                                    <span></span>
                                    Los productos estaran en su carrito solo por 60mins
                                </label>

                            </div>
                        </div>
                    </div>
                </article>
                <article class="lg:w-custom w-1/5 mb-10 px-6 py-16 lg:-mt-6 text-white text-center rounded-lg"
                    style="background-image:linear-gradient(90deg, #a3a8f0 0%, #696fdd 100%);">

                    <h5 class="font-bold text-base ">Sub-Total</h5>
                    <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                        <span class="text-3xl ">$300.500CLP</span>
                    </h3>
                    <h6 class="font-bold text-base ">Costo De Envio</h6>
                    <h4 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                        <span class="text-3xl mt-6 mr-1">$20.500CLP</span>
                    </h4>
                    <ul class=" text-sm font-bold">
                        <li class="pt-4 pb-4 border-b border-gray-200">Despacho protegido</li>
                        <li class="pt-4 pb-4 border-b border-gray-200">Despacho en menos de 48 Horas</li>
                    </ul>
                    <h5 class="font-bold text-base ">Costo Total</h5>
                    <h2 class="flex justify-center pb-4 font-bold border-b border-gray-200">
                        <span class="text-3xl mt-6 mr-1">$</span><span class="text-6xl">399.99</span>
                    </h2>
                    <button
                        class="uppercase text-center text-sm mt-12 xl:px-24 px-12 sm:px-16 py-2 rounded-md font-bold text-primary-very-light"
                        style="background-image:linear-gradient(90deg, #a3a8f0 0%, #696fdd 100%);">
                </article>
            </section>
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
        $("#signupForm").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                address: "required",
                city: "required",
                zip: {
                    required: true,
                    number: true
                },
                tel: "required",
                pass: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#pass"
                }



            },
            messages: {
                name: "Please enter your Fullname",
                email: "Please enter a valid email address",
                address: "Please enter your Address",
                city: "Please enter your City",
                address: "Please enter your Address",
                zip: {
                    required: "Please enter Zipcode",
                    number: "Invalid Zipcode"
                },
                tel: "Please enter your Phone number",
                pass: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                }


            }



        });


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