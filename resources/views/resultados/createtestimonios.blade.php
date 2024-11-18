<div class="py-12" x-data="{ 
    service: '', 
    selectedProcedure: null, 
    procedures: {
        'Cirugías': ['Rinoplastia', 'Mamoplastia', 'Blefaroplastia', 'Lifting Facial', 'Liposucción + Lipoinjerto', 'Lipodermoplastia'],
        'Tratamientos': ['Ácido Hialurónico', 'Inyecciones de Botox', 'Mentón y Pómulos', 'Láser Facial']
    },
    showForm: false, 
    buttonText: 'Hacer Testimonio', 
    open: false
}">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <!-- Botón para mostrar/ocultar el formulario -->
                <div class="mb-4">
                    <button @click="showForm = !showForm; buttonText = showForm ? 'Cancelar' : 'Hacer Testimonio'" 
                        class="bg-teal-500 hover:bg-teal-600 text-white font-medium py-2 px-4 rounded shadow-sm transition-transform transform hover:scale-105">
                        <span x-text="buttonText" class="text-2xl max-md:text-xl"></span>
                    </button>
                </div>

                <!-- Formulario -->
                <div x-show="showForm" x-transition>
                    <form method="POST" action="{{ route('cirugias.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-4">
                            <label for="name" class="block font-medium text-xl text-gray-700 max-md:text-lg">Nombre</label>
                            <input type="text" id="name" name="nombre" class="border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm w-full mt-4 h-[50px] text-lg max-md:text-base max-md:h-[45px] max-md:mt-2" required>
                        </div>

                        <!-- Servicio -->
                        <div class="mb-4">
                            <label for="service" class="block font-medium text-xl text-gray-700 max-md:text-lg">Servicio</label>
                            <div class="relative">
                                <button @click="open = !open" 
                                    class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-4 py-2 text-left focus:outline-none focus:ring-teal-500 focus:border-teal-500 flex justify-between items-center mt-4 h-[50px] text-lg max-md:text-base max-md:h-[45px] max-md:mt-2">
                                    <span x-text="service || 'Seleccionar una opción'"></span>
                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <ul x-show="open" 
                                    @click.outside="open = false"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-1"
                                    class="absolute z-10 mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto focus:outline-none">
                                    <li @click="service = ''; open = false" 
                                        class="cursor-pointer select-none relative py-2 pl-3 pr-9 text-gray-700 hover:bg-teal-400 hover:text-white transition h-[50px] flex items-center text-lg max-md:text-base max-md:h-[45px] max-md:mt-2">
                                        Seleccionar una opción
                                    </li>
                                    <template x-for="(options, key) in procedures" :key="key">
                                        <li @click="service = key; open = false" 
                                            :class="{'bg-teal-400 text-white': service === key, 'text-gray-700 hover:bg-teal-400 hover:text-white': service !== key}"
                                            class="cursor-pointer select-none relative py-2 pl-3 pr-9 transition h-[50px] flex items-center  max-md:h-[45px] max-md:mt-2">
                                            <span x-text="key" class="text-lg max-md:text-base"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </div>

                        <!-- Cirugías / Tratamientos -->
                        <div class="mb-4" x-show="service !== ''" x-transition>
                            <label for="procedure" class="block font-medium text-xl text-gray-700 max-md:text-lg">Seleccione una opción</label>
                            <div class="grid grid-cols-2 gap-4 mt-4 max-md:grid-cols-1">
                                <template x-for="procedure in procedures[service]" :key="procedure" >
                                    <label :class="['px-4 py-2 cursor-pointer transition-transform transform',
                                                selectedProcedure === procedure ? 'bg-teal-500 text-white scale-105' : 'bg-white text-gray-700 hover:bg-teal-500 hover:text-white hover:scale-105']" class="border border-teal-500 w-[500px] max-md:w-full ">
                                        <input type="radio" name="servicio" :value="procedure" class="hidden" @change="selectedProcedure = procedure">
                                        <span x-text="procedure" class="text-lg "></span>
                                    </label>
                                </template>
                            </div>
                        </div>

                        <!-- Testimonio -->
                        <div class="mb-4">
                            <label for="testimonial" class="block font-medium text-xl text-gray-700 max-md:text-lg">Testimonio</label>
                            <textarea id="testimonial" name="testimonio" class="border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm w-full h-40 resize-none mt-4 text-lg max-md:text-base  max-md:mt-2" required></textarea>
                        </div>

                        <!-- Foto -->
                        <div class="mb-4" x-data="{ fileName: 'Ningún archivo seleccionado' }">
                            <label for="imagen" class="block font-medium text-xl text-gray-700 max-md:text-lg">Foto de Perfil</label>
                            <div class="flex items-center space-x-4  mt-4 max-md:mt-2">
                                <label for="imagen" 
                                    class="bg-teal-500 text-white font-medium py-2 px-4 rounded cursor-pointer shadow-sm transition-transform transform hover:scale-105 hover:bg-teal-600 text-xl max-md:text-lg max-sm:text-base  max-sm:w-[200px]">
                                    Seleccionar Imagen
                                </label>
                                <span x-text="fileName" class="text-gray-600 text-xl max-md:text-lg max-sm:text-base max-sm:w-[200px]"></span>
                            </div>
                            <input 
                                type="file" 
                                id="imagen" 
                                name="imagen" 
                                class="hidden" 
                                @change="fileName = $event.target.files[0] ? $event.target.files[0].name : 'Ningún archivo seleccionado'" 
                                >
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" 
                                class="bg-teal-500 hover:bg-teal-600 text-white font-medium py-2 px-4 rounded shadow-sm transition-transform transform hover:scale-105 text-2xl max-md:text-xl">
                                Subir
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
