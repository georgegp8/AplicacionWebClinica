<div class="h-screen w-full bg-cover bg-center relative lazyload
max-xl:h-[1000px] max-sm:h-auto"
    data-bg="url('{{ asset('images/index_img/1frame/back.webp') }}')">
    <div class="w-full h-full bg-gradient-to-r from-teal-100 via-transparent to-teal-800
        
        ">
        @include('constantes.header')
        <div class="flex h-[85%]  flex-wrap   ">
            <!-- Parte izquierda del frame1 index -->

            <div
                class="w-1/2  h-full max-xl:w-full max-xl:h-1/2 flex justify-center items-center max-sm:items-start max-sm:h-auto max-sm:py-10 ">
                <div class="   w-10/12  h-3/4   max-sm:h-auto ">
                    <p class=" text-center text-teal-900 font-semibold text-[25px] mb-4 ">
                        Nuestras Especialidades
                    </p>
                    <div class="flex gap-x-10 backdrop-blur-2xl justify-evenly max-sm:flex-wrap  max-sm:gap-y-10 frame">
                        <div class="w-[400px] hidden-element">
                            <p class="text-center text-[20px] pt-2 font-semibold text-teal-700">
                                Tratamientos
                            </p>
                            <div class="">
                                <div class="mt-4 gap-y-4 flex h-[300px] flex-wrap overflow-hidden ">
                                    @foreach ($tratamientos as $tratamiento)
                                        <div
                                            class="bg-teal-500 h-[220px]  pt-5 px-4 w-full animate-indextratamiento max-sm:h-[170px] max-sm:animate-indextratamientoSM">
                                            <div class="border-t-4 border-teal-800  py-2 text-white  font-bold">
                                                {{ $tratamiento->nombre }}</div>
                                            <div class="  py-2  text-white font-medium ">
                                                {{ $tratamiento->descripcion_corta }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class=" w-[400px] hidden-element">
                            <p class="text-center text-[20px] pt-2 font-semibold text-teal-900 ">
                                Cirugias
                            </p>
                            <div>
                                <div class="mt-4 gap-y-4  flex h-[300px] flex-wrap overflow-hidden">
                                    @foreach ($cirugias as $cirugia)
                                        <div
                                            class="bg-teal-500 h-[220px] pt-5 px-4 w-full animate-indexcirugia max-sm:h-[170px] max-sm:animate-indexcirugiaSM">
                                            <div class="border-t-4 border-teal-800  py-2 text-white font-bold">
                                                {{ $cirugia->nombre }}</div>
                                            <div class=" py-2 text-white font-medium">{{ $cirugia->descripcion_corta }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Parte derecha del frame1 index -->
            <div
                class="w-1/2  h-full max-xl:w-full max-xl:h-1/2 flex justify-center items-center  max-sm:h-auto max-sm:py-10 frame">
                <div
                    class="w-10/12   max-xl:backdrop-blur-3xl max-xl:bg-teal-500/50 max-xl:bg-opacity-20 max-xl:p-3 hidden-element">
                    <!-- Mensaje_tec dinamico -->
                    <div class=" overflow-hidden">
                        <div
                            class=" flex-wrap flex w-full h-[50px] border-l-4 border-teal-100
                            max-md:h-[40px] max-xl:w-[70%]">
                            @foreach ($mensajes as $mensaje)
                                <div class="h-[50px] ">
                                    <p
                                        class="border-r-4 border-teal-100 h-[50px] w-auto text-nowrap  text-white text-[30px] text-animation content-center 
                                    max-md:text-[25px] max-md:h-[40px]
                                    max-sm:text-[20px] ">
                                        {{ $mensaje->mensaje }}
                                    </p>

                                </div>
                            @endforeach
                        </div>
                    </div>

                    <p
                        class="mt-4 text-white text-[17px]
                        max-md:mt-2
                        max-md:text-[15px]">
                        En cada paso, desde la consulta inicial hasta el resultado final, nos comprometemos a brindarte
                        un ambiente de confianza, seguridad y excelencia, porque tu satisfacción y bienestar son nuestra
                        prioridad.
                    </p>

                    <button
                        class="w-40 h-10 bg-teal-300 hover:bg-teal-400 text-black font-medium  px-4  shadow-sm transition-transform transform hover:scale-105 text-2xl max-md:text-xl ">
                        <a href="/reserva/cita" class="text-[14px] h-full w-full">Solicitar una cita</a>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
