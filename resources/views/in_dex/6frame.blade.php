<div class="h-screen w-full bg-white opacity-100 relative flex justify-center items-center  py-10">
        <div x-data="{
                currentIndex: 0,
                isVisible: true,
                testimonials: {{ json_encode($testimonios->map(function($testimonio) {
                    return [
                        'text' => $testimonio->testimonio,
                        'name' => $testimonio->nombre,
                        'profession' => $testimonio->servicio,
                        'image' => asset('images/index_img/6frame/' . $testimonio->imagen )
                    ];
                })) }},
                startCarousel() {
                    setInterval(() => {
                        this.prepareNextTestimonial();
                    }, 5000); // Cambia cada 5 segundos
                },
                prepareNextTestimonial(index = null) {
                    this.isVisible = false;
                    
                    // Utilizar nextTick para garantizar que el DOM se actualice antes de cambiar el índice
                    this.$nextTick(() => {
                        setTimeout(() => {
                            this.currentIndex = index !== null ? index : (this.currentIndex + 1) % this.testimonials.length;
                            this.isVisible = true;
                        }, 500); // Duración de la animación de salida
                    });
                }
            }"
            x-init="startCarousel"
            class="flex flex-col  px-10 text-center mx-auto transition-all duration-500 ease-in-out  w-[80%] h-[90%]  
            items-center justify-center max-md:justify-start max-sm:h-auto">

            <!-- Título -->
            <h2 class="text-3xl font-bold text-teal-700  ">Testimonios</h2>
            
            <!-- Testimonio con Animación de Transición -->
            <div x-show="isVisible"
                x-transition:leave="transition ease-in duration-500 transform opacity-100 translate-y-0"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-8"
                x-transition:enter="transition ease-out duration-500 transform opacity-0 translate-y-8"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                class="w-full   h-auto max-md:mt-3">

                <!-- Texto del Testimonio -->
                <p class="text-lg text-gray-700 italic h-40 max-md:h-auto content-center px-10 max-md:px-0" x-text="testimonials[currentIndex].text"></p>
                
                <!-- Imagen y Nombre -->
                <div class="flex flex-col items-center space-y-4  max-xl:mt-4">
                    <img :src="testimonials[currentIndex].image" loading="lazy" alt="" class="w-40 h-40 rounded-full object-cover  bg-center">
                    <p class="font-bold text-xl text-gray-600 leading-none" x-text="testimonials[currentIndex].name"></p>
                    <p class="text-teal-700 tracking-widest leading-none" x-text="testimonials[currentIndex].profession"></p>
                </div>
            </div>
            
            <!-- Puntos de navegación con animación de desvanecimiento al seleccionar -->
            <div class="flex space-x-2 w-full justify-center mt-5">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <button 
                        @click="prepareNextTestimonial(index)" 
                        :class="{ 'bg-teal-700': currentIndex === index, 'bg-gray-400': currentIndex !== index }"
                        class="w-3 h-3 rounded-full focus:outline-none transition-colors duration-300">
                    </button>
                </template>
            </div>

            <div class="w-full flex justify-center p-5 ">
                <div class="bg-teal-300 w-40 h-10 flex justify-center items-center hover:bg-teal-200 ease-in delay-100 duration-75 text-lg max-md:text-[17px] max-md:w-[150px] text-black rounded-2xl">
                    <a href="" class="text-[14px]">Ver Todos</a>
                </div>
            </div>
        </div>
    </div>