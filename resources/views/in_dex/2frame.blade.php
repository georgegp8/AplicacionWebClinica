<div class="h-screen w-full bg-cover bg-center relative  lazyload"
    data-bg="url('{{ asset('images/index_img/2frame/back.webp') }}')">
    <div
        class="w-full h-full bg-gradient-to-t from-teal-100 via-transparent to-gray-100 flex flex-wrap max-xl:justify-center max-xl:items-center">
        <div class="w-1/2  h-full max-xl:w-full max-xl:h-1/2 flex justify-center items-center max-xl:hidden "
            id="frame1">
            <div class="relative h-3/4 w-3/4 hidden-element">
                <img src="{{ asset('images/index_img/2frame/img1.webp') }}" loading="lazy" alt=""
                    class="absolute top-0 left-0  w-[350px] object-cover ">
                <img src="{{ asset('images/index_img/2frame/img3.webp') }}" loading="lazy" alt=""
                    class="absolute top-[40px] right-0  object-cover">
                <img src="{{ asset('images/index_img/2frame/img2.webp') }}" loading="lazy" alt=""
                    class="absolute left-[50px] bottom-0 w-[400px]   object-cover">
            </div>
        </div>
        <div class="w-1/2  h-full max-xl:w-full max-xl:h-1/2 flex justify-center items-center frame">
            <div class="h-3/4 w-3/4  flex items-center hidden-element">
                <div>
                    <div class="flex w-full justify-center">
                        <p class="bg-teal-800 w-[160px] text-center text-gray-200 font-bold">
                            DESDE 1950
                        </p>
                    </div>

                    <div class="flex w-full justify-center h-40  py-5 ">
                        <p class="text-[60px] w-[300px]  text-center border border-white font-light leading-none	">La
                            Mejor Empresa</p>
                    </div>

                    <div class="flex w-full justify-center h-40  py-5  max-xl:p-0 max-xl:h-auto">
                        <p class="text-center ">
                            En TecCita, nos enorgullece ofrecer servicios de alta calidad respaldados por un equipo de
                            expertos dedicados. Tu seguridad y satisfacción son nuestra prioridad. Explora nuestras
                            opciones personalizadas y da el primer paso hacia la mejor versión de ti mismo.
                        </p>
                    </div>
                    <div class="w-full flex justify-center max-xl:mt-4">
                        <button
                            class="w-40 h-10 bg-teal-600 hover:bg-teal-700 text-white font-medium  px-4  shadow-sm transition-transform transform hover:scale-105 text-2xl max-md:text-xl ">
                            <a href="/nosotros" class="text-[14px] h-full w-full">Sobre Nosotros</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
