



 <div x-data="{ isMenuOpen: false, isServicesOpen: false , isResultOpen:false }" 
     x-init="window.addEventListener('resize', () => {
        if (window.innerWidth > 1370) {
            isMenuOpen = false;
        }
     })" class=" max-xl:h-[140px] h-[20%]">

    <nav class="flex flex-wrap h-[140px] justify-center items-end max-xl:h-[140px]">
        <div class="border-l-4 border-teal-800 bg-white h-[80px] w-10/12 flex items-center max-sm:w-11/12  backdrop-blur-md">
            <ul class="flex justify-around items-center w-full max-xl:justify-between max-xl:px-4 max-md:justify-between">
                <li>
                    <div class="w-60 h-12 flex items-center justify-center max-sm:w-[180px] max-sm:justify-start">
                        <svg class="w-12 max-sm:w-10" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-teal-300" d="M4.70131 34.375C11.218 47.2656 19.1319 48.6979 24.6246 50C16.5805 39.8438 14.6645 29.6875 16.5805 17.5781C8.15041 8.98438 1.63752 10.1562 1.63478 10.1562C0.485077 14.8438 0.215417 25.5015 4.70131 34.375Z" />
                            <path class="fill-teal-300" d="M26.1616 0C16.9645 8.59375 11.2163 33.5938 26.3567 50C24.6246 40.625 26.5441 25.3906 34.5916 17.9688C33.4426 11.3281 29.9938 3.51562 26.1616 0Z" />
                            <path class="fill-teal-300" d="M27.3112 49.6094C23.0959 18.75 45.7054 10.1562 50.3039 10.1562C54.136 33.9844 39.1908 48.4375 27.3112 49.6094Z" />
                        </svg>
                        <span class="h-12 flex items-center border-l-2 border-teal-200 pl-4 ml-4 max-sm:h-10 max-sm:ml-2 max-sm:pl-2">
                            <p class="text-black text-[35px] font-extralight max-sm:text-[30px]">CitasTEC</p>
                        </span>
                    </div>
                </li>

                <div class="flex h-12 w-[60%] gap-x-3 items-center justify-around max-xl:hidden max-xl:bg-white">
                    <li class="text-gray-700 hover:text-gray-500 text-lg"><a href="/">INICIO</a></li>
                    <li class="relative text-gray-700 hover:text-gray-500 text-lg" 
                        @mouseenter="isServicesOpen = true" 
                        @mouseleave="isServicesOpen = false">
                        <a href="">SERVICIOS</a>

                        <!-- Submenu -->
                        <ul x-show="isServicesOpen" 
                            x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-2"
                            class="absolute left-0 mt-2 w-40  bg-white  backdrop-blur-md  shadow-lg rounded-md py-2">
                            <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-500">
                                <a href="/servicios/cirugias">Cirugías</a>
                            </li>
                            <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-500">
                                <a href="/servicios/tratamientos">Tratamientos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative text-gray-700 hover:text-gray-500 text-lg" 
                        @mouseenter="isResultOpen = true" 
                        @mouseleave="isResultOpen = false">
                        <a href="">RESULTADOS</a>

                        <!-- Submenu -->
                        <ul x-show="isResultOpen" 
                            x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-2"
                            class="absolute left-0 mt-2 w-40  bg-white  backdrop-blur-md  shadow-lg rounded-md py-2">
                            <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-500">
                                <a href="/resultados/cirugias">Cirugías</a>
                            </li>
                            <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-500">
                                <a href="/resultados/tratamientos">Tratamientos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="text-gray-700 hover:text-gray-500 text-lg"><a href="/index/reserva">RESERVAS</a></li>
                    <li class="text-gray-700 hover:text-gray-500 text-lg"><a href="/nosotros">NOSOTROS</a></li>
                    <li class="text-gray-700 hover:text-gray-500 text-lg"><a href="">SISTEMA</a></li>
                </div>

                <div class="max-xl:flex max-xl:items-center max-xl:gap-x-4 max-md:gap-x-2">
                    <li class="max-xl:hidden bg-teal-300 w-40 h-12 flex justify-center items-center hover:bg-teal-200 delay-200 duration-75 text-gray-700 hover:text-gray-500 text-lg">
                        <a href="" class="">INICIAR SESION</a>
                    </li>
                    <li class="cursor-pointer hidden max-xl:flex max-xl:items-center flex-wrap">
                        <button class="h-10 " @click="isMenuOpen = !isMenuOpen" >
                        <svg x-show="!isMenuOpen" class="h-10 w-10  fill-teal-800 max-md:h-8" viewBox="0 0 12 10"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0.75C0 0.551088 0.0790175 0.360322 0.21967 0.21967C0.360322 0.0790175 0.551088 0 0.75 0H11.25C11.4489 0 11.6397 0.0790175 11.7803 0.21967C11.921 0.360322 12 0.551088 12 0.75C12 0.948912 11.921 1.13968 11.7803 1.28033C11.6397 1.42098 11.4489 1.5 11.25 1.5H0.75C0.551088 1.5 0.360322 1.42098 0.21967 1.28033C0.0790175 1.13968 0 0.948912 0 0.75ZM0 4.75C0 4.55109 0.0790175 4.36032 0.21967 4.21967C0.360322 4.07902 0.551088 4 0.75 4H11.25C11.4489 4 11.6397 4.07902 11.7803 4.21967C11.921 4.36032 12 4.55109 12 4.75C12 4.94891 11.921 5.13968 11.7803 5.28033C11.6397 5.42098 11.4489 5.5 11.25 5.5H0.75C0.551088 5.5 0.360322 5.42098 0.21967 5.28033C0.0790175 5.13968 0 4.94891 0 4.75ZM0 8.75C0 8.55109 0.0790175 8.36032 0.21967 8.21967C0.360322 8.07902 0.551088 8 0.75 8H11.25C11.4489 8 11.6397 8.07902 11.7803 8.21967C11.921 8.36032 12 8.55109 12 8.75C12 8.94891 11.921 9.13968 11.7803 9.28033C11.6397 9.42098 11.4489 9.5 11.25 9.5H0.75C0.551088 9.5 0.360322 9.42098 0.21967 9.28033C0.0790175 9.13968 0 8.94891 0 8.75Z" />
                        </svg>
                        <svg x-show="isMenuOpen" class="h-10 w-10 stroke-teal-800 max-md:h-8"  viewBox="0 0 14 14"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L12 12M2 12L12 2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
      
                        </button>
                    </li>
                </div>
            </ul>
        </div>
    </nav>

            <div 
            x-show="isMenuOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-0" 
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="relative z-40"
        >
            <ul class="max-xl:w-11/12 flex justify-end max-sm:w-[95.9%]" x-data="{ isSubMenuOpen: false }">
                <div class="w-[255px] h-[300px] content-around flex pl-4 flex-wrap bg-white max-sm:w-[200px] backdrop-blur-md">
                    <li class="text-gray-700 hover:text-gray-500 text-lg w-full"><a href="/">INICIO</a></li>

                    <!-- Al cambiar el evento click por hover -->
                    <div x-data="{ isSubMenuOpen: false }">
                        <li class="text-gray-700 hover:text-gray-500 text-lg w-full" 
                            @mouseover="isSubMenuOpen = true" 
                            @mouseleave="isSubMenuOpen = false">
                            <a href="#">SERVICIOS</a>

                            <!-- Submenú con animación personalizada -->
                            <ul 
                                :class="isSubMenuOpen ? 'show-animation' : 'hide-animation'"
                                class="pl-4 overflow-hidden">
                                
                                <li class="text-gray-700 hover:text-gray-500 text-lg"><a href="/servicios/cirugias">Cirugías</a></li>
                                <li class="text-gray-700 hover:text-gray-500 text-lg"><a href="/servicios/tratamientos">Tratamientos</a></li>
                            </ul>
                        </li>
                    </div>
                    
                    <div x-data="{ isSubMenuROpen: false }">
                        <li class="text-gray-700 hover:text-gray-500 text-lg w-full" 
                            @mouseover="isSubMenuROpen = true" 
                            @mouseleave="isSubMenuROpen = false">
                            <a href="#">RESULTADOS</a>

                            <!-- Submenú con animación personalizada -->
                            <ul 
                                :class="isSubMenuROpen ? 'show-animation' : 'hide-animation'"
                                class="pl-4 overflow-hidden">
                                
                                <li class="text-gray-700 hover:text-gray-500 text-lg"><a href="/resultados/cirugias">Cirugías</a></li>
                                <li class="text-gray-700 hover:text-gray-500 text-lg"><a href="/resultados">Tratamientos</a></li>
                            </ul>
                        </li>
                    </div>

                    <li class="text-gray-700 hover:text-gray-500 text-lg w-full"><a href="/index/reserva">RESERVAS</a></li>
                    <li class="text-gray-700 hover:text-gray-500 text-lg w-full"><a href="/nosotros">NOSOTROS</a></li>
                    <li class="text-gray-700 hover:text-gray-500 text-lg w-full"><a href="">SISTEMA</a></li>

                    <li class="bg-teal-300 w-40 h-10 flex justify-center items-center hover:bg-teal-200 ease-in delay-100 duration-75 text-gray-700 hover:text-gray-500 text-lg max-md:text-[17px] max-md:w-[150px]">
                        <a href="" class="">INICIAR SESIÓN</a>
                    </li>
                </div>
            </ul>
        </div>

</div>
