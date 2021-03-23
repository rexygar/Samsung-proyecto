<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<div class="grid grid-cols-12  lg:px-6 xl:px-6 2xl:px-6 md:px-2  px-2 2xl:py-8 xl:py-8 lg:py-8 py-8">
    <div class="col-span-1"></div>
    <div class="col-span-6 lx:pr-6 md:pr-4 xl:pr-6 2xl:pr-6" style="background-color: white">
        <article style="background-color: aliceblue" class="panel is-primary  ">
            <div class="px-6">
                <p class=" tracking-normal py-1 " style="background-color: aliceblue">
                    <h3 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center">
                        <span class="text-3xl"> javier, ingresa tu región y comuna</span>
                    </h3>
                </p>
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

                    <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                        style="background-color: aliceblue">
                        <div class="mb-8">

                            Al seleccionar las opciones podrás ver los tipos de entrega


                            Región

                            <select formcontrolname="selectRegion"
                                class="divide-y divide-gray-100 inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                <option disabled="" value="0: null"> Selecciona una Región </option>
                                <option value="1"> Región Metropolitana </option>
                                <option value="2"> Región de Tarapacá </option>
                                <option value="3"> Región de Antofagasta </option>
                                <option value="4"> Región de Atacama </option>
                                <option value="5"> Región de Coquimbo </option>
                                <option value="6"> Región de Valparaíso </option>
                                <option value="7"> Región del Libertador Gral. Bernardo
                                    O’Higgins </option>
                                <option value="8"> Región del Maule </option>
                                <option value="9"> Región del Bío Bío </option>
                                <option value="10"> Región de la Araucanía </option>
                                <option value="11"> Región de los Lagos </option>
                                <option value="12"> Región de los Ríos </option>
                                <option value="13"> Región de Arica y Parinacota
                                </option>
                                <option value="14"> Región del Ñuble </option>
                                <!---->
                            </select>
                            <div class="py-5"></div>
                            <select formcontrolname="selectComuna"
                                class="divide-y divide-gray-100 inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                <option disabled="" value="0: null"> Selecciona una Comuna </option>
                                <option value="1"> Algarrobo </option>
                                <option value="2"> Cabildo </option>
                                <option value="3"> Calera </option>
                                <option value="4"> Calle Larga </option>
                                <option value="5"> Cartagena </option>
                                <option value="6"> Casablanca </option>
                                <option value="7"> Catemu </option>
                                <option value="8"> Concón </option>
                                <option value="9"> El Quisco </option>
                                <option value="10"> El Tabo </option>
                                <option value="11"> Hijuelas </option>
                                <option value="12"> Horcón </option>
                                <option value="13"> La Cruz </option>
                                <option value="14"> La Ligua </option>
                                <option value="15"> Las Cruces </option>
                                <option value="16"> Limache </option>
                                <option value="17"> Llayllay </option>
                                <option value="18"> Llolleo </option>
                                <option value="19"> Los Andes </option>
                                <option value="20"> Nogales </option>
                                <option value="21"> Olmué </option>
                                <option value="22"> Panquehue </option>
                                <option value="23"> Papudo </option>
                                <option value="24"> Petorca </option>
                                <option value="25"> Polpaico </option>
                                <option value="26"> Puchuncaví </option>
                                <option value="27"> Putaendo </option>
                                <option value="28"> Quillota </option>
                                <option value="29"> Quilpué </option>
                                <option value="30"> Quintay </option>
                                <option value="31"> Quintero </option>
                                <option value="32"> Reñaca </option>
                                <option value="33"> Rinconada </option>
                                <option value="34"> San Antonio </option>
                                <option value="35"> San Esteban </option>
                                <option value="36"> San Felipe </option>
                                <option value="37"> San Sebastián </option>
                                <option value="38"> Santa María </option>
                                <option value="39"> Santo Domingo </option>
                                <option value="40"> Valparaíso </option>
                                <option value="41"> Villa Alemana </option>
                                <option value="42"> Viña Del Mar </option>
                                <option value="43"> Zapallar </option>
                                <!---->
                                <!---->
                                <!---->
                            </select>

                            <div> <label>
                                    Plan <a href=" ">see features</a>
                                </label>

                                <label for="plan-free">
                                    <input x-on:click="selected = 'opt1'" id="plan-free" type="radio" name="plan"
                                        value="standard-free" checked>
                                    Free
                                </label>

                                <label for="plan-monthly">
                                    <input x-on:click="selected = 'opt2'" id="plan-monthly" type="radio" name="plan"
                                        value="premium-monthly">
                                    Monthly - <strong> </strong> / month
                                </label>

                                <label for="plan-yearly">
                                    <input x-on:click="selected = 'opt3'" id="plan-yearly" type="radio" name="plan"
                                        value="premium-yearly">
                                    Yearly - <strong> </strong> / year <span>- save
                                        <strong>$25</strong> per year</span>
                                </label>

                                <div x-show="selected !== 'opt1'" x-cloak>
                                    <label x-show="selected !== 'opt1'" x-cloak for="card-element">
                                        Credit or debit card
                                    </label>
                                    <div x-show="selected !== 'opt1'" x-cloak id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                </div>

                                <div x-show="selected !== 'opt1'" x-cloak>
                                    <!-- Stripe: used to display form errors. -->
                                </div>
                            </div>


                            <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;"><button
                                    class="btn sw-btn-prev disabled" type="button">Volver al paso
                                    anterior</button><button class="btn sw-btn-next" type="button">siguiente
                                    Paso</button></div>
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
                    Tu carro (2 Productos)
                </p>
            </div>


            <div class="panel-block" style="background-color: aliceblue">
                <ul class="block w-11/12 my-4 mx-auto" x-data="{selected:null}">
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 0 ? selected = 0 : selected = null"
                            class="cursor-pointer px-5 py-3 text-white text-center inline-block hover:opacity-75 bg-yellow-300 hover:shadow hover:-mb-3 rounded-t">
                            Mi Carrito</h4>
                        <div x-show="selected == 0" class="border py-4 px-2">
                            <div class="py-1" role="none">
                                <div class="panel-block" style="background-color: aliceblue">

                                    <!--Card 1-->
                                    <div class=" w-full lg:max-w-full lg:flex">
                                        <div class="h-24 lg:h-24 lg:w-24 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                            style="background-image: url({{ url('../uploads/products/1/buds.jpg') }});">
                                        </div>
                                        <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                                            style="background-color: aliceblue">
                                            <div class="mb-8">
                                                <p class="text-sm text-gray-600 flex items-center">
                                                    $149.990
                                                </p>
                                                <div class="text-gray-900 font-bold text-xl mb-2">GALAXY BUDS+</div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="py-1" role="none">
                                <div class="panel-block" style="background-color: aliceblue">

                                    <!--Card 1-->
                                    <div class=" w-full lg:max-w-full lg:flex">
                                        <div class="h-24 lg:h-24 lg:w-24 flex-none bg-cover bg-center  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                            style="background-image: url({{ url('../uploads/products/1/46mm.jpg') }});">
                                        </div>
                                        <div class=" rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
                                            style="background-color: aliceblue">
                                            <div class="mb-8">
                                                <p class="text-sm text-gray-600 flex items-center">
                                                    $259.990
                                                </p>
                                                <div class="text-gray-900 font-bold text-xl mb-2">GALAXY WATCH 46 MM
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
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
                    Resumen de compra
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