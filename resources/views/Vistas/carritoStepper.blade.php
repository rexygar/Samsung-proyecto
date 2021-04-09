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
    <link href="{{ asset('/css/smart_wizard.css') }}" rel="stylesheet" type="text/css">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
{{-- <script src="{{ asset('js/lib/jquery.js') }}"></script> --}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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

<div class=" w-full py-auto relative" style="z-index: 99999">
    @include('Components.nav-mobile')
    @include('Components.Header')
    {{-- @include('Components.Header') --}}
</div>
@include('Components.Megamenu')

<body class="bg-white">
    <div class="grid grid-cols-12  ">
        @if (Auth::user())

        <div id="smartwizard" class="sw sw-justified sw-theme-default  col-span-12 grid grid-cols-12 ">
            <div class="show sm:hidden">
                <ul class="nav nav-tabs col-span-12 grid grid-cols-12">
                    <li class="nav-item col-span-4 active"><a href="#step-1" class="nav-link">Paso 1<br><small>Direccion
                            </small></a></li>
                    <li class="nav-item col-span-4 active"><a href="#step-2" class="nav-link">Paso 2<br><small>Tipo
                                Entrega
                            </small></a></li>
                    <li class="nav-item col-span-4 done"><a href="#step-3" class="nav-link">Paso 3<br><small>
                                Pago</small></a></li>

                </ul>
            </div>
            <div class="md:show hidden">
                <ul class="nav nav-tabs col-span-12 grid grid-cols-12">
                    <li class="nav-item col-span-4 sm:hidden active"><a href="#step-1" class="nav-link">Paso
                            1<br><small>Direccion
                            </small></a></li>
                    <li class="nav-item col-span-4 sm:hidden active"><a href="#step-2" class="nav-link">Paso
                            2<br><small>Tipo
                                Entrega
                            </small></a></li>
                    <li class="nav-item col-span-4 sm:hidden done"><a href="#step-3" class="nav-link">Paso 3<br><small>
                                Pago</small></a></li>

                </ul>
            </div>

            <div class="sw-container tab-content col-span-12 grid grid-cols-12 h-full">
                <div id="step-1" class="tab-pane step-content col-span-12" style="display: block;">
                    @include('Components.Carrito.carritoS2')
                </div>
                <div id="step-2" class="tab-pane step-content col-span-12" style="display: block;">
                    @include('Components.Carrito.carritoS3')
                </div>
                <div id="step-3" class="tab-pane step-content col-span-12" style="display: none;">
                    @include('Components.Carrito.carritoS4')
                </div>
            </div>
        </div>

        @else

        <div id="smartwizard" class="sw sw-justified sw-theme-default  col-span-12 grid grid-cols-12 ">

            <ul class="nav nav-tabs col-span-12 sm:grid grid-cols-12  ">
                <div class="col-span-4">

                    <li class="nav-item col-span-12  hidden active"><a href="#step-1" class="nav-link">Paso 1<br><small> Datos
                                personales
                            </small></a></li>
                    <li class="nav-item col-span-12  hidden active"><a href="#step-2" class="nav-link">Paso 2<br><small>
                                Direccion
                            </small></a></li>
                    <li class="nav-item col-span-12  hidden done"><a href="#step-3" class="nav-link">Paso 3<br><small>
                                Tipo Entrega</small></a></li>
                    <li class="nav-item col-span-12  hidden done"><a href="#step-4" class="nav-link">Paso 4<br><small> Pago
                            </small></a></li>

                </div>
            </ul>

            <ul class="nav nav-tabs col-span-12 grid grid-cols-12 grid-flow-row auto-rows-max   sm:hidden">
                <div class="w-full grid-flow-row auto-rows-min  ">

                    <li class="nav-item w-1/4 active relative  float-left" style="
    z-index: 999;
"><a href="#step-1" class="nav-link inactive  active">Paso 1<br><small> Datos
                                personales
                            </small></a></li>
                    <li class="nav-item w-1/4 float-left relative  active" style="
    z-index: 9999;
"><a href="#step-2" class="nav-link inactive" style="
    z-index: 99999;
">Paso 2<br><small>
                                Direccion
                            </small></a></li>
                    <li class="nav-item w-1/4  float-left relative  done" style="
    z-index: 99999;
"><a href="#step-3" class="nav-link inactive">Paso 3<br><small>
                                Tipo Entrega</small></a></li>
                    <li class="nav-item  w-1/4 relative  float-left done" style="
    z-index: 9999;
"><a href="#step-4" class="nav-link inactive">Paso 4<br><small> Pago
                            </small></a></li>

                </div>
            </ul>


            <div class="sw-container tab-content col-span-12 grid grid-cols-12 h-full">
                <div id="step-1" class="tab-pane step-content col-span-12" style="display: block;">
                    @include('Components.Carrito.carritoS1')
                </div>
                <div id="step-2" class="tab-pane step-content col-span-12" style="display: block;">
                    @include('Components.Carrito.carritoS2')
                </div>
                <div id="step-3" class="tab-pane step-content col-span-12" style="display: none;">
                    @include('Components.Carrito.carritoS3')
                </div>
                <div id="step-4" class="tab-pane step-content col-span-12" style="display: none;">
                    @include('Components.Carrito.carritoS4')
                </div>

            </div>
        </div>


        @endif
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
<script src="{{ asset('js/alpine.js') }} " defer></script>
<script src="{{ asset('/js/jquery.smartWizard.js') }}"></script>

<script type="text/javascript">
    // Initialize Smart Wizard 
        $('#smartwizard').smartWizard(
    {  keyNavigation: false
           }
        );
        $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
			if($('button.sw-btn-next').hasClass('disabled')){
				$('.sw-btn-group-extra').show(); // show the button extra only in the last page
			}else{
				$('.sw-btn-group-extra').hide();				
			}

	      });
</script>