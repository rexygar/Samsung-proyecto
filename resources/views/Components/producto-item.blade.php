<main class="profile-page">

    <section class="relative block" style="height: 500px;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'>
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>

    <section class="relative py-16 bg-gray-300 py-0 ">
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">

                        <div class="w-full lg:w-full px-4 lg:order-1">
                            <div class="justify-items-start md:justify-items-center py-4 lg:pt-4 pt-8">

                                @include('Components.breadcrumbs')
                                <section class="relative py-20">
                                    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                                        style="height: 80px; transform: translateZ(0px);">
                                        <svg class="absolute bottom-0 overflow-hidden"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1"
                                            viewBox="0 0 2560 100" x="0" y="0">
                                            <polygon class="text-white fill-current" points="2560 0 2560 100 0 100">
                                            </polygon>
                                        </svg>
                                    </div>
                                    <div class="container mx-auto px-4">
                                        <div class="grid grid-cols-2 md:grid-cols-2  gap-4">
                                            <div class="w-full md:w-1/2 ml-auto mr-auto px-4">
                                                <img alt="..." class="max-w-full rounded-lg shadow-lg"
                                                    src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" />
                                            </div>
                                            <div class="w-full md:w-full ml-auto mr-auto px-4">
                                                <div class="md:pr-12">
                                                    <div
                                                        class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                                        <i class="fas fa-rocket text-xl"></i>
                                                    </div>
                                                    <h3 class="text-3xl font-semibold">Nombre Producto</h3>
                                                    <p class="mt-4 text-lg leading-relaxed text-gray-600">Descripcion
                                                    </p>
                                                    <ul class="list-none mt-6">
                                                        <li class="py-2">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <span
                                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                                            class="fas fa-fingerprint"></i></span>
                                                                </div>
                                                                <div>
                                                                    <h4 class="text-gray-600">
                                                                        Carefully crafted components
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="py-2">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <span
                                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                                            class="fab fa-html5"></i></span>
                                                                </div>
                                                                <div>
                                                                    <h4 class="text-gray-600">Amazing page examples</h4>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="py-2">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <span
                                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                                            class="far fa-paper-plane"></i></span>
                                                                </div>
                                                                <div>
                                                                    <h4 class="text-gray-600">Dynamic components</h4>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
    </section>
</main>