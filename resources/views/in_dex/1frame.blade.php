<div class="h-screen w-full bg-cover bg-center relative " style="background-image: url('{{ asset('images/index_img/1frame/back.webp') }}');"> 
        <div class="w-full h-full bg-gradient-to-r from-teal-100 via-transparent to-teal-800">
            @include('constantes.header')
            <div class="flex h-[80%]  flex-wrap ">
                <!-- Parte izquierda del frame1 index -->

                <div class="w-1/2  h-full max-xl:w-full max-xl:h-1/2 flex justify-center items-center">
                    <div class="   w-10/12  h-3/4">
                        <p class=" text-center text-teal-900 font-semibold text-[25px] mb-4">
                            Nuestras Especialidades
                        </p>
                        <div class="flex gap-x-10 backdrop-blur-2xl" >
                            <div class="w-[400px] ">
                                <p class="text-center text-[20px] pt-2 font-semibold text-teal-700">
                                    Tratamientos
                                </p>
                                <div class="">
                                    <div class="mt-4 gap-y-4 flex h-[300px] flex-wrap overflow-hidden ">
                                        @foreach ($tratamientos as $tratamiento)
                                            <div class="bg-teal-500 h-[220px]  pt-5 px-4 w-full animate-indextratamiento ">
                                                <div class="border-t-4 border-teal-800  py-2 text-white  font-bold">{{ $tratamiento->nombre }}</div>
                                                <div class="  py-2  text-white font-medium ">{{ $tratamiento->descripcion_corta }}</div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="00 w-[400px] h-[350px] " >
                                <p class="text-center text-[20px] pt-2 font-semibold text-teal-900 "  >
                                    Cirugias
                                </p>
                                <div>
                                    <div class="mt-4 gap-y-4  flex h-[300px] flex-wrap overflow-hidden">
                                        @foreach ($cirugias as $cirugia)
                                            <div class="bg-teal-500 h-[220px] pt-5 px-4 w-full animate-indexcirugia">
                                                <div class="border-t-4 border-teal-800  py-2 text-white font-bold">{{ $cirugia->nombre }}</div>
                                                <div class=" py-2 text-white font-medium">{{ $cirugia->descripcion_corta }}</div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Parte derecha del frame1 index -->
                <div class="w-1/2  h-full max-xl:w-full max-xl:h-1/2 flex justify-center items-center">
                    <div class="w-10/12 ">
                        <!-- Mensaje_tec dinamico -->
                        <div class=" overflow-hidden">
                            <div class=" flex-wrap flex w-full h-[50px] border-l-4 border-teal-100 ">
                                @foreach ($mensajes as $mensaje)
                                <div class="h-[50px]   ">
                                    <p class="border-r-4 border-teal-100 h-[50px] w-auto text-nowrap  text-white text-[30px] text-animation content-center">
                                        {{ $mensaje->mensaje }}
                                    </p>

                                </div>
                                @endforeach
                            </div>
                        </div>

                        <p class="mt-4 text-white"> 
                            En cada paso, desde la consulta inicial hasta el resultado final, nos comprometemos a brindarte un ambiente de confianza, seguridad y excelencia, porque tu satisfacción y bienestar son nuestra prioridad.
                        </p>
                        <div class=" bg-teal-600 w-40 h-10 flex justify-center items-center hover:bg-teal-500 ease-in delay-100 duration-75   text-lg max-md:text-[17px]  max-md:w-[150px] text-white mt-4">
                            <a href="" class=" text-[14px]">Solicitar una cita</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>