<div class="w-full  bg-white opacity-100 relative flex justify-center items-start " x-data="{ openQuestion: null }">
        <div class="w-[60%]  flex flex-col gap-4 ">
            <div >
                <div class="flex w-full justify-center ">
                    <p class="w-[200px] text-xl font-bold text-center">
                        Preguntas Frecuentes
                    </p>
                </div>
            </div>
            <!-- Pregunta 1 -->
            <div class="border border-gray-400 p-3">
                <button class="flex items-center gap-x-2 h-[50px]" @click="openQuestion = (openQuestion === 1 ? null : 1)">
                    <svg x-show="openQuestion !== 1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0.75C8.69 0.75 9.25 1.31 9.25 2V6.75H14C14.3315 6.75 14.6495 6.8817 14.8839 7.11612C15.1183 7.35054 15.25 7.66848 15.25 8C15.25 8.33152 15.1183 8.64946 14.8839 8.88388C14.6495 9.1183 14.3315 9.25 14 9.25H9.25V14C9.25 14.3315 9.1183 14.6495 8.88388 14.8839C8.64946 15.1183 8.33152 15.25 8 15.25C7.66848 15.25 7.35054 15.1183 7.11612 14.8839C6.8817 14.6495 6.75 14.3315 6.75 14V9.25H2C1.66848 9.25 1.35054 9.1183 1.11612 8.88388C0.881696 8.64946 0.75 8.33152 0.75 8C0.75 7.66848 0.881696 7.35054 1.11612 7.11612C1.35054 6.8817 1.66848 6.75 2 6.75H6.75V2C6.75 1.31 7.31 0.75 8 0.75Z" fill="black"/>
                    </svg>
                    <svg x-show="openQuestion === 1" class="fill-teal-500" width="16" height="16" viewBox="0 0 14 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1C14 1.26522 13.8946 1.51957 13.7071 1.70711C13.5196 1.89464 13.2652 2 13 2H1C0.734784 2 0.48043 1.89464 0.292893 1.70711C0.105357 1.51957 0 1.26522 0 1Z" />
                    </svg>
                    <p :class="{ 'text-teal-600': openQuestion === 1 }">¿Qué tratamientos ofrece la Clínica Estética Ronmy Mendez?</p>
                </button>
                <p x-show="openQuestion === 1"
                    x-transition:enter="show-animation"
                    x-transition:leave="hide-animation"
                    class="text-gray-700 mt-2">
                    La Clínica Estética Ronmy Mendez ofrece una amplia gama de tratamientos tanto faciales como corporales, así como la rinoplastia y procedimientos de medicina estética. Entre los tratamientos faciales, se incluyen el afinamiento de rostro, bichectomía, blefaroplastia, lifting facial, lobuloplastia, mentoplastia, otoplastia y rinoplastia. En cuanto a los tratamientos corporales, la clínica ofrece abdominoplastia, ginecomastia, liposucción y mamoplastia. Además, brindan servicios de y tratamientos de medicina estética como rejuvenecimiento facial y tratamiento de botox.
                </p>
            </div>
            <!-- Pregunta 2 -->
            <div class="border border-gray-400 p-3">
                <button class="flex items-center gap-x-2 h-[50px]" @click="openQuestion = (openQuestion === 2 ? null : 2)">
                    <svg x-show="openQuestion !== 2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0.75C8.69 0.75 9.25 1.31 9.25 2V6.75H14C14.3315 6.75 14.6495 6.8817 14.8839 7.11612C15.1183 7.35054 15.25 7.66848 15.25 8C15.25 8.33152 15.1183 8.64946 14.8839 8.88388C14.6495 9.1183 14.3315 9.25 14 9.25H9.25V14C9.25 14.3315 9.1183 14.6495 8.88388 14.8839C8.64946 15.1183 8.33152 15.25 8 15.25C7.66848 15.25 7.35054 15.1183 7.11612 14.8839C6.8817 14.6495 6.75 14.3315 6.75 14V9.25H2C1.66848 9.25 1.35054 9.1183 1.11612 8.88388C0.881696 8.64946 0.75 8.33152 0.75 8C0.75 7.66848 0.881696 7.35054 1.11612 7.11612C1.35054 6.8817 1.66848 6.75 2 6.75H6.75V2C6.75 1.31 7.31 0.75 8 0.75Z" fill="black"/>
                    </svg>
                    <svg x-show="openQuestion === 2" class="fill-teal-500" width="16" height="16" viewBox="0 0 14 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1C14 1.26522 13.8946 1.51957 13.7071 1.70711C13.5196 1.89464 13.2652 2 13 2H1C0.734784 2 0.48043 1.89464 0.292893 1.70711C0.105357 1.51957 0 1.26522 0 1Z" />
                    </svg>
                    <p :class="{ 'text-teal-600': openQuestion === 2 }">¿Cuál es el costo de la cirugía?</p>
                </button>
                <p x-show="openQuestion === 2"
                    x-transition:enter="show-animation"
                    x-transition:leave="hide-animation"
                    class="text-gray-700 mt-2">
                    Para darte costo es necesario una evaluación con la finalidad de saber que cambios hay que realizar, podemos agendarte una cita. para agendar una cita escríbeme al WhatsAp 999488746.
                </p>
            </div>

            <!-- Pregunta 3 -->

            <div class="border border-gray-400 p-3">
                <button class="flex items-center gap-x-2 h-[50px]" @click="openQuestion = (openQuestion === 3 ? null : 3)">
                    <svg x-show="openQuestion !== 3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0.75C8.69 0.75 9.25 1.31 9.25 2V6.75H14C14.3315 6.75 14.6495 6.8817 14.8839 7.11612C15.1183 7.35054 15.25 7.66848 15.25 8C15.25 8.33152 15.1183 8.64946 14.8839 8.88388C14.6495 9.1183 14.3315 9.25 14 9.25H9.25V14C9.25 14.3315 9.1183 14.6495 8.88388 14.8839C8.64946 15.1183 8.33152 15.25 8 15.25C7.66848 15.25 7.35054 15.1183 7.11612 14.8839C6.8817 14.6495 6.75 14.3315 6.75 14V9.25H2C1.66848 9.25 1.35054 9.1183 1.11612 8.88388C0.881696 8.64946 0.75 8.33152 0.75 8C0.75 7.66848 0.881696 7.35054 1.11612 7.11612C1.35054 6.8817 1.66848 6.75 2 6.75H6.75V2C6.75 1.31 7.31 0.75 8 0.75Z" fill="black"/>
                    </svg>
                    <svg x-show="openQuestion === 3" class="fill-teal-500" width="16" height="16" viewBox="0 0 14 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1C14 1.26522 13.8946 1.51957 13.7071 1.70711C13.5196 1.89464 13.2652 2 13 2H1C0.734784 2 0.48043 1.89464 0.292893 1.70711C0.105357 1.51957 0 1.26522 0 1Z" />
                    </svg>
                    <p :class="{ 'text-teal-600': openQuestion === 3 }">¿Cuál es la ubicación de la Clínica?</p>
                </button>
                <p x-show="openQuestion === 3"
                    x-transition:enter="show-animation"
                    x-transition:leave="hide-animation"
                    class="text-gray-700 mt-2">
                    La Clínica Fleming queda en Jr Alexander Fleming 103,en San Borja, a la espalda de la cuadra 3 de la Av San Borja Sur lado números pares.
                </p>
                <iframe x-show="openQuestion === 3"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 -translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-0" 
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-4"
                    class="w-full h-[450px]" loading="lazy"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1913.4575151552729!2d-71.51982214662705!3d-16.429141236524984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b23fcffffff%3A0xf3a2f908ae973204!2sTecsup!5e0!3m2!1ses-419!2spe!4v1730813567712!5m2!1ses-419!2spe"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            <!-- Pregunta 4 -->
            <div class="border border-gray-400 p-3">
                <button class="flex items-center gap-x-2 h-[50px]" @click="openQuestion = (openQuestion === 4 ? null : 4)">
                    <svg x-show="openQuestion !== 4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0.75C8.69 0.75 9.25 1.31 9.25 2V6.75H14C14.3315 6.75 14.6495 6.8817 14.8839 7.11612C15.1183 7.35054 15.25 7.66848 15.25 8C15.25 8.33152 15.1183 8.64946 14.8839 8.88388C14.6495 9.1183 14.3315 9.25 14 9.25H9.25V14C9.25 14.3315 9.1183 14.6495 8.88388 14.8839C8.64946 15.1183 8.33152 15.25 8 15.25C7.66848 15.25 7.35054 15.1183 7.11612 14.8839C6.8817 14.6495 6.75 14.3315 6.75 14V9.25H2C1.66848 9.25 1.35054 9.1183 1.11612 8.88388C0.881696 8.64946 0.75 8.33152 0.75 8C0.75 7.66848 0.881696 7.35054 1.11612 7.11612C1.35054 6.8817 1.66848 6.75 2 6.75H6.75V2C6.75 1.31 7.31 0.75 8 0.75Z" fill="black"/>
                    </svg>
                    <svg x-show="openQuestion === 4" class="fill-teal-500" width="16" height="16" viewBox="0 0 14 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1C14 1.26522 13.8946 1.51957 13.7071 1.70711C13.5196 1.89464 13.2652 2 13 2H1C0.734784 2 0.48043 1.89464 0.292893 1.70711C0.105357 1.51957 0 1.26522 0 1Z" />
                    </svg>
                    <p :class="{ 'text-teal-600': openQuestion === 4 }">¿cómo agendar una cita?</p>
                </button>
                <p x-show="openQuestion === 4"
                    x-transition:enter="show-animation"
                    x-transition:leave="hide-animation"
                    class="text-gray-700 mt-2">
                    Para programar su cita, puede comunicarse con nosotros directamente a través de nuestros números de contacto, o si lo prefiere, a través de nuestra página web donde encontrará la opción de reserva en línea. En cuanto a los precios de nuestros tratamientos, estos son establecidos tras una evaluación médica personalizada, pues consideramos las necesidades y expectativas individuales de cada paciente para ofrecer el tratamiento más adecuado.
                </p>
            </div>
            <!-- Pregunta 5 -->
            <div class="border border-gray-400 p-3">
                <button class="flex items-center gap-x-2 h-[50px]" @click="openQuestion = (openQuestion === 5 ? null : 5)">
                    <svg x-show="openQuestion !== 5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0.75C8.69 0.75 9.25 1.31 9.25 2V6.75H14C14.3315 6.75 14.6495 6.8817 14.8839 7.11612C15.1183 7.35054 15.25 7.66848 15.25 8C15.25 8.33152 15.1183 8.64946 14.8839 8.88388C14.6495 9.1183 14.3315 9.25 14 9.25H9.25V14C9.25 14.3315 9.1183 14.6495 8.88388 14.8839C8.64946 15.1183 8.33152 15.25 8 15.25C7.66848 15.25 7.35054 15.1183 7.11612 14.8839C6.8817 14.6495 6.75 14.3315 6.75 14V9.25H2C1.66848 9.25 1.35054 9.1183 1.11612 8.88388C0.881696 8.64946 0.75 8.33152 0.75 8C0.75 7.66848 0.881696 7.35054 1.11612 7.11612C1.35054 6.8817 1.66848 6.75 2 6.75H6.75V2C6.75 1.31 7.31 0.75 8 0.75Z" fill="black"/>
                    </svg>
                    <svg x-show="openQuestion === 5" class="fill-teal-500" width="16" height="16" viewBox="0 0 14 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1C14 1.26522 13.8946 1.51957 13.7071 1.70711C13.5196 1.89464 13.2652 2 13 2H1C0.734784 2 0.48043 1.89464 0.292893 1.70711C0.105357 1.51957 0 1.26522 0 1Z" />
                    </svg>
                    <p :class="{ 'text-teal-600': openQuestion === 5}">¿Qué es la Rinoplastia?</p>
                </button>
                <p x-show="openQuestion === 5"
                    x-transition:enter="show-animation"
                    x-transition:leave="hide-animation"
                    class="text-gray-700 mt-2">
                    La rinoplastia es una cirugía para embellecer tu nariz ,mejorar tu imagen y tu autoestima, se realiza en una Clínica estética especialida, es ambulatoria, tiempo de recuperación aproximadamente 1 semana. El primer paso es que pases por consulta médica para saber que modificaciones estéticas y/o funcionales se van a realizar en tu nariz, para ello debes agendar una cita.
                </p>
            </div>
            
            <!-- Pregunta 5 -->
            <div class="border border-gray-400 p-3">
                <button class="flex items-center gap-x-2 h-[50px]" @click="openQuestion = (openQuestion === 6 ? null : 6)">
                    <svg x-show="openQuestion !== 6" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0.75C8.69 0.75 9.25 1.31 9.25 2V6.75H14C14.3315 6.75 14.6495 6.8817 14.8839 7.11612C15.1183 7.35054 15.25 7.66848 15.25 8C15.25 8.33152 15.1183 8.64946 14.8839 8.88388C14.6495 9.1183 14.3315 9.25 14 9.25H9.25V14C9.25 14.3315 9.1183 14.6495 8.88388 14.8839C8.64946 15.1183 8.33152 15.25 8 15.25C7.66848 15.25 7.35054 15.1183 7.11612 14.8839C6.8817 14.6495 6.75 14.3315 6.75 14V9.25H2C1.66848 9.25 1.35054 9.1183 1.11612 8.88388C0.881696 8.64946 0.75 8.33152 0.75 8C0.75 7.66848 0.881696 7.35054 1.11612 7.11612C1.35054 6.8817 1.66848 6.75 2 6.75H6.75V2C6.75 1.31 7.31 0.75 8 0.75Z" fill="black"/>
                    </svg>
                    <svg x-show="openQuestion === 6" class="fill-teal-500" width="16" height="16" viewBox="0 0 14 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1C14 1.26522 13.8946 1.51957 13.7071 1.70711C13.5196 1.89464 13.2652 2 13 2H1C0.734784 2 0.48043 1.89464 0.292893 1.70711C0.105357 1.51957 0 1.26522 0 1Z" />
                    </svg>
                    <p :class="{ 'text-teal-600': openQuestion === 6}">¿Qué es la blefaroplastia?</p>
                </button>
                <p x-show="openQuestion === 6"
                    x-transition:enter="show-animation"
                    x-transition:leave="hide-animation"
                    class="text-gray-700 mt-2">
                    Es una cirugía para rejuvenecer y refrescar con juventud la mirada, la cirugia es ambulatoria, tiempo de recuperación 1 semana aproximadamente. El primer requisito es que seas evaluado por el especialista para saber si necesitas blefaroplastia de párpados superiores o inferiores, se evalua si ya tienes surcos infrapalpebrales o si ya tienes flacidez infrapalpebral.
                </p>
            </div>
        </div>

        
    </div>