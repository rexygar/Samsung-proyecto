@extends('Layouts.Contenido')
@section('content')
<style>
  .blue-clr{
    color: #308fcb !important; 
  }
  .blue-clr-bg{
    background-color: #308fcb; 
  }

  .panel-wrapper {
    overflow: hidden;
}

.panel {
    border: 2px solid #000000;
    border-bottom: 0;
    padding: 1em;
    margin: 1em 0 0;
}

.panel-header {
    position: relative;
    /* top: 0.5em; */
    padding-left: 0.4em;
    padding-right: 0.4em;
    font-size: 1.2rem;
    font-weight: bold;
}
/* .panel-header:before, */
.panel-header:after {
    content: "";
    /* position: absolute; */
    height: 2px;
    background: #000;
    top: 50%;
}
/* .panel-header:before {
    width: 100px;
    left: -100px;
}
.panel-header:after {
    width: 1000px;
    right: -1000px;
} */
.panel-content {
    margin-bottom: -0.5em; 
}

</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="max-w-6xl bk-hero-main mx-auto sm:px-6 lg:px-8">
  <section class="bk-hero-int is-primary is-medium mt-8
    overflow-hidden shadow sm:rounded-lg">
    <!-- Hero head: will stick at the top -->
    {{-- Contenido --}}
    {{-- producto card --}}
    <div class="mt-8 bg-white bk-hero-bread overflow-hidden shadow sm:rounded-lg">
      <div class="grid grid-cols-5  gap-4">

        <div class="mb-10 md:container md:mx-auto">
          <div class="">
            <div class="content">

              <div class="w-full max-w-6xl rounded md:mb-0">
                <div class="relative panel-wrapper">
                  <div class="border-2 border-blue-300 pt-5 pb-5 panel">
                    <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png"
                      class="w-full h-auto relative z-10 " alt="">

                    <div class="panel-header z-15 tp-50  md:container  md:mx-auto text-center  bg:white" style="z-index: 99;background: transparent;">
                      <span
                        class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-gray-600">
                        grade
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h5 class="font-bold  text-base text-center ">Waterproof Jacket</h5>
          <p class="text-sm font-bold text-center blue-clr ">$299.000</p>
          <input type="button" class=" blue-clr-bg w-1/2 font-bold md:container md:mx-auto lowercase px-6 pm-2 text-white" value="Comprar">
          
          <h6 class=" UPPERCASE mb-5 text-center " style="font-weight: 100">SSS2445542-0</h6>
        </div>
        <div class="mb-10 md:container md:mx-auto">
          <div class="">
            <div class="content">

              <div class="w-full max-w-6xl rounded md:mb-0">
                <div class="relative panel-wrapper">
                  <div class="border-2 border-blue-300 pt-5 pb-5 panel">
                    <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png"
                      class="w-full h-auto relative z-10 " alt="">

                    <div class="panel-header z-15 tp-50  md:container  md:mx-auto text-center  bg:white" style="z-index: 99;background: transparent;">
                      <span
                        class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-gray-600">
                        grade
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h5 class="font-bold  text-base text-center ">Waterproof Jacket</h5>
          <p class="text-sm font-bold text-center blue-clr ">$299.000</p>
          <input type="button" class=" blue-clr-bg w-1/2 font-bold md:container md:mx-auto lowercase px-6 pm-2 text-white" value="Comprar">
          
          <h6 class=" UPPERCASE mb-5 text-center " style="font-weight: 100">SSS2445542-0</h6>
        </div>
        <div class="mb-10 md:container md:mx-auto">
          <div class="">
            <div class="content">

              <div class="w-full max-w-6xl rounded md:mb-0">
                <div class="relative panel-wrapper">
                  <div class="border-2 border-blue-300 pt-5 pb-5 panel">
                    <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png"
                      class="w-full h-auto relative z-10 " alt="">

                    <div class="panel-header z-15 tp-50  md:container  md:mx-auto text-center  bg:white" style="z-index: 99;background: transparent;">
                      <span
                        class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-gray-600">
                        grade
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h5 class="font-bold  text-base text-center ">Waterproof Jacket</h5>
          <p class="text-sm font-bold text-center blue-clr ">$299.000</p>
          <input type="button" class=" blue-clr-bg w-1/2 font-bold md:container md:mx-auto lowercase px-6 pm-2 text-white" value="Comprar">
          
          <h6 class=" UPPERCASE mb-5 text-center " style="font-weight: 100">SSS2445542-0</h6>
        </div>
        <div class="mb-10 md:container md:mx-auto">
          <div class="">
            <div class="content">

              <div class="w-full max-w-6xl rounded md:mb-0">
                <div class="relative panel-wrapper">
                  <div class="border-2 border-blue-300 pt-5 pb-5 panel">
                    <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png"
                      class="w-full h-auto relative z-10 " alt="">

                    <div class="panel-header z-15 tp-50  md:container  md:mx-auto text-center  bg:white" style="z-index: 99;background: transparent;">
                      <span
                        class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-gray-600">
                        grade
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h5 class="font-bold  text-base text-center ">Waterproof Jacket</h5>
          <p class="text-sm font-bold text-center blue-clr ">$299.000</p>
          <input type="button" class=" blue-clr-bg w-1/2 font-bold md:container md:mx-auto lowercase px-6 pm-2 text-white" value="Comprar">
          
          <h6 class=" UPPERCASE mb-5 text-center " style="font-weight: 100">SSS2445542-0</h6>
        </div>
        <div class="mb-10 md:container md:mx-auto">
          <div class="">
            <div class="content">

              <div class="w-full max-w-6xl rounded md:mb-0">
                <div class="relative panel-wrapper">
                  <div class="border-2 border-blue-300 pt-5 pb-5 panel">
                    <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png"
                      class="w-full h-auto relative z-10 " alt="">

                    <div class="panel-header z-15 tp-50  md:container  md:mx-auto text-center  bg:white" style="z-index: 99;background: transparent;">
                      <span
                        class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-yellow-300">
                        grade
                      </span>
                      <span class="material-icons text-xl text-gray-600">
                        grade
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h5 class="font-bold  text-base text-center ">Waterproof Jacket</h5>
          <p class="text-sm font-bold text-center blue-clr ">$299.000</p>
          <input type="button" class=" blue-clr-bg w-1/2 font-bold md:container md:mx-auto lowercase px-6 pm-2 text-white" value="Comprar">
          
          <h6 class=" UPPERCASE mb-5 text-center " style="font-weight: 100">SSS2445542-0</h6>
        </div>


      </div>
    </div>
    {{-- end producto card --}} </section>
</div>