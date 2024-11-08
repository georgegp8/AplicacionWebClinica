<div class="h-screen w-full bg-white opacity-100 relative " >
        
        <div class="h-[80%]  flex">
            <div class="w-[50%] h-full  flex justify-center items-center ">
                <div class="w-[75%] ">
                    <div class="border-b py-2 border-gray-400">
                        <p class="text-3xl ">Dr. Jhon Doe</p>
                        <p class="text-xl  text-gray-700">Especialista en Cirugía Plástica y Estética</p>
                    </div>
                    <p class=" text-[16px]  text-gray-500 mt-3">
                        La Doctora Méndez se ha dedicado por más de 15 años a la
                        medicina estética, siempre resaltando los principios
                        fundamentales de ética y responsabilidad, priorizando siempre la
                        seguridad para con sus pacientes.
                    </p>
                </div>

            </div>
            <div class="w-[50%] h-full flex justify-center items-center ">
                <div class="w-[450px] h-[450px]   rounded-full flex justify-center items-end bg-teal-100 bg-opacity-75">
                    <div class="w-[370px] h-[370px]  rounded-full  bg-teal-200 bg-opacity-50 flex justify-center items-end ">
                        <img src="{{ asset('images/2frame/docimg.webp') }}"  class=" w-[300px]" alt="">
                    </div>
                </div>

            </div>
        </div>
        <!-- numeros -->
        <div class="h-[15%]  flex justify-center">


            <div class="flex items-center w-10/12 justify-between ">
                <!-- Contador 1 -->
                <div class="text-center  w-full border-r-2 border-dashed border-teal-500">
                    <div class="flex  justify-center  text-teal-700">
                        <p class="text-4xl">+</p>
                        <div class="text-4xl font-semibold timer" data-from="0" data-to="15" data-speed="1500" data-refresh-interval="50">15</div>
                        
                    </div>
                    <p class="text-sm text-gray-500 mt-2 ">Años de experiencia</p>
                </div>

                <!-- Contador 2 -->
                <div class="text-center  w-full  border-r-2 border-dashed border-teal-500">
                    <div class="flex  justify-center text-teal-700">
                        <p class="text-4xl">+</p>
                        <div class="text-4xl font-semibold  timer" data-from="0" data-to="10" data-speed="1500" data-refresh-interval="50">10</div>
                    </div>

                    <p class="text-sm text-gray-500 mt-2 ">mil cirugías exitosas</p>
                </div>

                <!-- Contador 3 -->
                <div class="text-center w-full  border-r-2 border-dashed border-teal-500">
                    <div class="flex  justify-center text-teal-700">
                        <div class="text-4xl font-semibold  timer" data-from="0" data-to="100" data-speed="1500" data-refresh-interval="50">100</div>
                        <p class="text-4xl">%</p>
                        
                    </div>
                    <p class="text-sm text-gray-500 mt-2 ">Clientes satisfechos</p>
                </div>

                <!-- Contador 4 -->
                <div class="text-center  w-full ">
                    <div class="flex  justify-center  text-teal-700">

                        <div class="text-4xl font-semibold timer" data-from="0" data-to="100" data-speed="1500" data-refresh-interval="50">100</div>
                        <p class="text-4xl">%</p>
                    </div>
                    <p class="text-sm text-gray-500 mt-2 ">Cirujanos especializados</p>
                </div>
            </div>
        </div>
    </div>