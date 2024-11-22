<div class="h-screen w-full bg-white opacity-100 relative  max-sm:h-auto max-sm:py-10" >
        
        <div class="h-[80%]  flex max-sm:flex-col max-sm:justify-center max-sm:items-center max-sm:gap-y-4">
            <div class="w-[50%] h-full  flex justify-center items-center max-sm:w-auto frame" id="frame4">
                <div class="w-[75%] hidden-element" >
                    <div class="border-b py-2 border-gray-400 " >
                        <p class="text-3xl max-md:text-2xl">Dr. Jhon Doe</p>
                        <p class="text-xl  text-gray-700 max-md:text-[18px]">Especialista en Cirugía Plástica y Estética</p>
                    </div>
                    <p class=" text-[16px]  text-gray-500 mt-3 max-md:text-[14px]">
                        La Doctora Méndez se ha dedicado por más de 15 años a la
                        medicina estética, siempre resaltando los principios
                        fundamentales de ética y responsabilidad, priorizando siempre la
                        seguridad para con sus pacientes.
                    </p>
                </div>

            </div>
            <div class="w-[50%] h-full flex justify-center items-center max-sm:w-auto frame" >
                <div class="w-[450px] h-[450px]   rounded-full flex justify-center items-end bg-teal-100 bg-opacity-75 max-md:w-[400px] max-md:h-[400px] hidden-element">
                    <div class="w-[370px] h-[370px]  rounded-full  bg-teal-200 bg-opacity-50 flex justify-center items-end max-md:w-[320px] max-md:h-[320px]">
                        <img src="{{ asset('images/index_img/3frame/docimg.webp') }}" loading="lazy"  class=" w-[300px] max-md:w-[260px]" alt="">
                    </div>
                </div>

            </div>
        </div>
        <!-- numeros -->
        <div class="h-[15%]  flex justify-center     max-sm:mt-8 max-sm:h-auto " id="frame3">


            <div class="flex items-center w-10/12    max-sm:flex-wrap justify-center max-sm:gap-y-5 hidden-element">
                    
                <div class="flex w-[600px] ">

                    <!-- Contador 1 -->
                    <div class="text-center  w-full border-r-2 border-dashed border-teal-500  ">
                        <div class="flex  justify-center  text-teal-700">
                            <p class="text-4xl">+</p>
                            <div class="text-4xl font-semibold timer" data-from="0" data-to="15" data-speed="1500" data-refresh-interval="50">15</div>
                            
                        </div>
                        <div class="w-full flex justify-center">
                            <p class="text-sm text-gray-500 mt-2 max-xl:w-[100px]">Años de experiencia</p>

                        </div>

                    </div>
    
                    <!-- Contador 2 -->
                    <div class="text-center  w-full  border-r-2 border-dashed border-teal-500   max-sm:border-0 ">
                        <div class="flex  justify-center text-teal-700">
                            <p class="text-4xl">+</p>
                            <div class="text-4xl font-semibold  timer" data-from="0" data-to="10" data-speed="1500" data-refresh-interval="50">10</div>
                        </div>
    
                        <div class="w-full flex justify-center">
                            <p class="text-sm text-gray-500 mt-2 max-xl:w-[100px]">mil cirugías exitosas</p>

                        </div>
                    </div>
                </div>


                <div class="flex w-[600px] "> 

                    <!-- Contador 3 -->
                    <div class="text-center w-full  border-r-2 border-dashed border-teal-500  flex flex-col items-center justify-center">
                        <div class="flex  justify-center text-teal-700">
                            <div class="text-4xl font-semibold  timer" data-from="0" data-to="100" data-speed="1500" data-refresh-interval="50">100</div>
                            <p class="text-4xl">%</p>
                            
                        </div>
                        <div class="w-full flex justify-center">
                            <p class="text-sm text-gray-500 mt-2 max-xl:w-[100px]">Clientes satisfechos</p>

                        </div>
                    </div>
    
                    <!-- Contador 4 -->
                    <div class="text-center  w-full ">
                        <div class="flex  justify-center  text-teal-700 ">
    
                            <div class="text-4xl font-semibold timer" data-from="0" data-to="100" data-speed="1500" data-refresh-interval="50">100</div>
                            <p class="text-4xl">%</p>
                        </div>
                        <div class="w-full flex justify-center">
                            <p class="text-sm text-gray-500 mt-2 max-xl:w-[100px]">Cirujanos especializados</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>