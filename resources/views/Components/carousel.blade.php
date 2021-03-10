<style>
    .carousel-open:checked+.carousel-item {
        position: static;
        opacity: 100;
    }

    .carousel-item {
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }

    #carousel-1:checked~.control-1,
    #carousel-2:checked~.control-2,
    #carousel-3:checked~.control-3 {
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

    #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
        color: #2b6cb0;
        /*Set to match the Tailwind colour you want the active one to be */
    }
</style>

</head>



<div class="carousel relative bg-white ">
    <div class="carousel-inner relative overflow-hidden w-full ">
        <!--Slide 1-->
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
            checked="checked">
        <div class="carousel-item absolute md:pt-10 lg:pt-11 pt-10 opacity-0 border-t-2 border-black">
            <div class="block h-full w-full py-20 lg:py-60 md:py-36   bg-cover  bg-center  text-white text-5xl text-center"
                style=" background-color: #434343">
                <div class="lg:w-full md:w-full overflow-hidden pr-10">
                    <figure class="image flex justify-center absolute  mx-auto" style="z-index: 0">
                        <li class=" text-green-50  inline-block lg:w-full md:w-3/3 lg:px-16">
                            <img src="/img/logo_ok.png" class="py-2 mx-auto" style="max-height: 150px;width: auto">
                            <span class="inline-block md:text-5xl lg:text-7xl bnr-fnt text-base  " style="-webkit-text-stroke: 2px black;
  color: black; line-height: 200%;-webkit-text-stroke: 2px black;
  color: white;  ">Cientos de productos esperando por ti</span>
                        </li>
                    </figure>
                </div>
            </div>
        </div>
        <label for="carousel-3"
            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 2-->
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute md:pt-10 lg:pt-11 pt-10 opacity-0 border-t-2 border-black">
            <div class="block h-full w-full py-20 lg:py-60 md:py-36   bg-cover  bg-center  text-white text-5xl text-center"
                style=" background-repeat: no-repeat;;background-image: url({{url('../img/watch.png')}});">
                <div class="lg:w-full md:w-full overflow-hidden pr-10">
                    <figure class="image flex justify-center absolute  mx-auto" style="z-index: 0">
                        <li class=" text-green-50  inline-block lg:w-full md:w-3/3 lg:px-16 text-center">
                            <img src="/img/logo_ok.png" class="py-2 mx-auto" style="max-height: 150px;width: auto">
                            <span class="inline-block md:text-5xl lg:text-7xl bnr-fnt text-base  " style="-webkit-text-stroke: 2px black;
  color: black; line-height: 200%;-webkit-text-stroke: 2px black;
  color: white;  ">Cientos de productos esperando por ti</span>
                        </li>
                    </figure>
                </div>
            </div>
        </div>
        <label for="carousel-1"
            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute md:pt-10 lg:pt-11 pt-10 opacity-0 border-t-2 border-black">
            <div class="block h-full w-full py-20 lg:py-60 md:py-36   bg-cover  bg-center  text-white text-5xl text-center"
                style=" background-repeat: no-repeat;;background-image: url({{url('../img/galaxy.png')}});">
                <div class="lg:w-full md:w-full overflow-hidden pr-10">
                    <figure class="image flex justify-center absolute  mx-auto" style="z-index: 0">
                        <li class=" text-green-50  inline-block lg:w-full md:w-3/3 lg:px-16">
                            <img src="/img/logo_ok.png" class="py-2 mx-auto" style="max-height: 150px;width: auto">
                            <span class="inline-block md:text-5xl lg:text-7xl bnr-fnt text-base  " style="-webkit-text-stroke: 2px black;
  color: black; line-height: 200%;-webkit-text-stroke: 2px black;
  color: white;  ">Cientos de productos esperando por ti</span>
                        </li>
                    </figure>
                </div>
            </div>
        </div>
        <label for="carousel-2"
            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>


        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol>

    </div>
</div>