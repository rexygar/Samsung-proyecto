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
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/Megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" /> --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>


<style>
    body {
        font-family: 'Nunito';
    }
</style>
{{-- <style>
    .swiper-container {
        width: 100%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .gallery-thumbs {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .gallery-thumbs .swiper-slide {
        height: 100%;
        opacity: 0.4;
    }

    .gallery-thumbs .swiper-slide-thumb-active {
        opacity: 1;
    }
</style> --}}
<style>
    label.error {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        padding: 1px 20px 1px 20px;
    }

    .TrT0Xe {
        color: white !important;
        size: 16px;
    }

    .col-centered {
        float: none;
        margin: 0 auto;
        display: table;
    }

    .bkg-image {

        /* The image used */
        background-color: #cccccc;
        /* Used if the image is unavailable */
        height: 500px;
        /* You must set a specified height */
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: cover;
        /* Resize the background image to cover the entire container */

    }
</style>

<!-- SECTION -->
<!-- container -->



<div class=" w-full py-auto relative" style="z-index: 99999">
    @include('Components.nav-mobile')
    @include('Components.Header')
    {{-- @include('Components.Header') --}}
</div>
@include('Components.Megamenu')

<body>

    <!-- SECTION -->
    <!-- container -->

    @include('Components.producto-item')
    {{-- <div class="w-full">
            <div class="relative flex-grow max-w-full flex-1 px-4">
                <DIV aria-label="breadcrumb">
                    <ol class="flex flex-wrap list-reset pt-3 pb-3 py-4 px-4 mb-4 bg-gray-200 rounded "
                        style="background-color:grey ;margin-bottom:0px;padding: 20px;">
                        <li class="inline-block px-2 py-2 text-gray-700 TrT0Xe col-md-offset-1"><a href="   #">Home</a>
                        </li>
                        <li class="inline-block px-2 py-2 text-gray-700 TrT0Xe " aria-current="page">Smartphones</li>
                        <li class="inline-block px-2 py-2 text-gray-700 TrT0Xe " aria-current="page">Samsung Galaxy Note
                        </li>
                        <li class="inline-block px-2 py-2 text-gray-700 TrT0Xe active" aria-current="page">Samsung
                            Galaxy Note 9</li>
                    </ol>
                </DIV>
            </div>
        </div> --}}

    <!-- /row -->

    <!-- /container -->
    <section class="relative bg-gray-300 lg:-mb-32 ">
        {{--      
        {!! html_entity_decode($product->FlixMedia) !!} --}}
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full ">
            <div class="px-6">
                <div class="flex flex-wrap justify-center">

                    <div class="w-full lg:w-full px-4 lg:order-1">
                        <div class="justify-items-start md:justify-items-center py-4 lg:pt-4 pt-8">

                            <section class="relative">

                                <div id="flix-inpage"></div>
                                <script type="text/javascript" src="//media.flixfacts.com/js/loader.js"
                                    data-flix-distributor="4800" data-flix-language="cl" data-flix-brand="Samsung"
                                    data-flix-mpn="SM-N975FZWJCHO" data-flix-ean="" data-flix-sku=""
                                    data-flix-button="flix-minisite" data-flix-inpage="flix-inpage"
                                    data-flix-button-image="" data-flix-price="" data-flix-fallback-language="" async>
                                </script>


                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        @include('Components.CTA')


        <div class="flex flex-col min-w-0 break-words bg-white w-full mb-6 ">
            <div class="lg:px-6 md:px-4 pb-32">
                <div class="container mx-auto lg:w-full md:w-full animate__fadeInUp animate__animated wow">
                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 lg:gap-8">
                        <!-- ... -->
                        <div class="place-self-center ">
                            @include('Components.los+vendido_prod')
                        </div>
                    </div>
                </div>
                <div
                    class="container mx-auto sm:container sm:mx-auto md:px-0 sm:px-6 animate__fadeInUp animate__animated wow">

                    <!-- ... -->
                    <div class="place-self-center  ">
                        @include('Components.producto-Destacados', ['destacados' => $destacados])
                    </div>

                </div>

            </div>
        </div>
    </section>




    <div style="height:50px;background-color:#250a0a"></div>

    <!--JQUERY Validation-->
    {{-- <script type="text/javascript" src="{{ URL::asset('js/swiper-bundle.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/lib/jquery.js') }}"></script>
    <script src="{{ asset('js/dist/jquery.validate.js') }}"></script>


    <script data-require="jquery@3.1.1" data-semver="3.1.1"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
    {{-- <script src="{{ asset('js/swiper-bundle.min.js') }}"></script> --}}
    {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}
    {{-- 
    <script>
        //initialize swiper when document ready 
        $(document).ready(function () {
            var galleryThumbs = new Swiper('.gallery-thumbs', {
      slidesPerView: 2,
      spaceBetween:10,
      loopedSlides: 3,
      loop: true,
      direction: 'vertical',
      clickable: true,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
        //initialize swiper when document ready
        var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        spaceBetween: 10,
        clickable: true,
        slidesPerView: 1,
      loopedSlides: 3,
        direction: 'horizontal',
        // centeredSlides: true
        mousewheel: true,     navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
        loop: true, 
    })
});
    </script> --}}
    {{-- 
    <script>
        //////////////////////////////////////
    $(document).ready(function () {

        $("#order_form").validate({

            submitHandler: function (form) {
                if ($('input[name=color]:checked').val() == undefined) {

                    document.getElementById("for_error").innerHTML =
                        "<label class='error' style=' '>Invalid Variation Input</label>";

                } else {
                    return true;
                }

            }
        });


    });

   
    $('.add').click(function () {

        $(this).prev().val(+$(this).prev().val() + 1);

    });
    $('.sub').click(function () {
        if ($(this).next().val() > 1) {
            $(this).next().val(+$(this).next().val() - 1);
        }
    });

    </script> --}}

    <!--/JQUERY Validation-->
    <!-- /SECTION -->
</body>

@include('layouts.Footer')