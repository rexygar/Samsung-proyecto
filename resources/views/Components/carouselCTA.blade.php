<style>
    .carouselCTA-open:checked+.carouselCTA-item {
        position: static;
        opacity: 100;
    }

    .carouselCTA-item {
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }

    #carouselCTA-1:checked~.control-1,
    #carouselCTA-2:checked~.control-2,
    #carouselCTA-3:checked~.control-3 {
        display: block;
    }

    .carousel-indicators {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 2%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }

    #carouselCTA-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
    #carouselCTA-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
    #carouselCTA-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
        color: #2b6cb0;
        /*Set to match the Tailwind colour you want the active one to be */
    }
</style>

</head>



<div class="carousel relative bg-white  block">
    <div class="carousel-inner relative overflow-hidden w-full ">
        @php
        $y = 0;
        @endphp
        @foreach ($imageInf as $img)
        @if ($img->tipo == "sliderInf")
        <input class="carouselCTA-open" type="radio" id="carouselCTA-{{ $y = $y + 1 }}" name="carouselCTA"
            aria-hidden="true" hidden="" checked="checked">
        <div class="carouselCTA-item absolute md:pt-10 lg:pt-11 pt-10 opacity-0">
            <div class="block h-full w-full py-20 lg:py-60 md:py-36 sm:py-32 bg-contain lg:bg-cover lg:bg-center sm:bg-cover sm:bg-center xl:bg-cover 2xl:bg-cover xl:bg-center 2xl:bg-center text-white text-5xl text-center"
                style="background-image: url({{asset('storage/'.$img->imagen)}});background-repeat: no-repeat;">
                <div class="lg:w-full md:w-full overflow-hidden pr-10">
                </div>
            </div>
        </div>
        @if ($y == 1)
        <label for="carouselCTA-3"
            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carouselCTA-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        @endif
        @if ($y == 2)
        <label for="carouselCTA-1"
            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carouselCTA-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        @endif
        @if ($y == 3)
        <label for="carouselCTA-2"
            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carouselCTA-1"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        @endif
        @endif
        @endforeach
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carouselCTA-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carouselCTA-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carouselCTA-3"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol>

    </div>
</div>