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
    <div class="grid grid-cols-12  ">
        <div class="col-span-12">
            <main class="h-full flex items-center px-6 py-24 lg:px-32 bg-black  relative">
                  <section class="w-full md:w-9/12 py-8 xl:w-8/12">
                    <span class="font-bold uppercase tracking-widest bg-yellow-300 ">TECNOBUY</span>
                    <h1 class="text-3xl lg:text-8xl font-bold bg-yellow-300 ">
                      Su Carrito se encuentra bacio por el momento
                    </h1>
                    <p class="font-bold mb-1 bg-yellow-300 ">YA VOLVEMOS...</p>
                  </section>
                  <footer class="absolute right-0 bg-yellow-300  bottom-0 p-6 lg:p-32">
                    <p class="font-bold mb-1">Atte.</p>
                    <p>Tecnobuy</p>
                  </footer>
                </main>

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