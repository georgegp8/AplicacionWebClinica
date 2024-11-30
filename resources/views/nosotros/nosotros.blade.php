@include('constantes.head')
<body class=" scroll-smooth">



<div x-data="{ loading: true, content: false }" 
x-init="setTimeout(() => { loading = false; content = true; }, 1000); 
              $nextTick(() => {
                  gsap.to('svg path', {
                      strokeDashoffset: 0,
                      duration: 1,
                      ease: 'power1.inOut',
                      stagger: 0.3
                  });
              })"> 
    <div  
        x-show="loading"  
        class="loader fixed inset-0 flex justify-center items-center bg-teal-700/80 z-50"  
        x-transition:leave="transition ease-in-out duration-500" 
        x-transition:leave-start="opacity-100" 
        x-transition:leave-end="opacity-0"> 
        <svg class="h-[160px] w-[210px] stroke-[0.4px] stroke-white fill-none" viewBox="0 0 51 50" xmlns="http://www.w3.org/2000/svg"> 
            <path d="M4.70131 34.375C11.218 47.2656 19.1319 48.6979 24.6246 50C16.5805 39.8438 14.6645 29.6875 16.5805 17.5781C8.15041 8.98438 1.63752 10.1562 1.63478 10.1562C0.485077 14.8438 0.215417 25.5015 4.70131 34.375Z" /> 
            <path d="M26.1616 0C16.9645 8.59375 11.2163 33.5938 26.3567 50C24.6246 40.625 26.5441 25.3906 34.5916 17.9688C33.4426 11.3281 29.9938 3.51562 26.1616 0Z" /> 
            <path d="M27.3112 49.6094C23.0959 18.75 45.7054 10.1562 50.3039 10.1562C54.136 33.9844 39.1908 48.4375 27.3112 49.6094Z" /> 
        </svg> 
    </div>

    <div x-show="content" 
         x-cloak
         x-transition:enter="transition ease-in-out duration-500" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         class="content">

         <div class="h-[500px]  w-full bg-cover bg-end relative lazyload max-md:bg-center" 
         data-bg="url('{{ asset('images/Nosotros/frame/back.webp') }}')">
            <!-- Gradiente en el fondo -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-black/20 pointer-events-none"></div>
        
            <!-- Menú de navegación en primer plano -->
            <div class="relative z-20">
                @include('constantes.header')
            </div>
        
            <!-- Contenido centrado en primer plano -->
            <div class="relative z-10 flex w-full h-[300px] justify-center items-center ">
                <p class="text-white text-5xl max-md:text-4xl">
                    Nosotros
                </p>
            </div>
        </div>

        <!-- segunda parte -->
        <div class="h-[500px] w-full  flex items-center max-xl:h-auto max-md:flex-wrap">
            <!-- primero -->
            <div class="w-[35%] h-full bg-center bg-cover lazyload max-xl:hidden" 
            data-bg="url('{{ asset('images/Nosotros/frame/img1.webp') }}')">
            </div>
            <!-- segundo -->
            <div class="bg-gradient-to-t from-teal-300 to-teal-600 pointer-events-none w-[20%] h-full flex items-center justify-center max-xl:w-[45%] 
            max-md:order-2 max-md:w-full  max-xl:h-[500px] max-md:h-[400px]">
                <div class=" text-white flex flex-col gap-y-3">
                    <div class="w-full flex justify-center">
                        <img class="h-40 w-40" loading="lazy" src="{{ asset('images/Nosotros/frame/img2.webp') }}" alt="">
                    </div>
                    <div class="flex  justify-center">
                            <div class="text-5xl font-semibold  timer" data-from="0" data-to="100" data-speed="1500" data-refresh-interval="50">100</div>
                            <p class="text-5xl">+</p>
                    </div>
                    <div class="w-full flex justify-center">
                        <p class="w-[200px] text-center  text-xl">Años en el mercado</p>
                    </div>
                </div>
            </div>
            <!-- tercero -->
            <div class="w-[45%] h-full flex flex-col justify-center items-center px-10 max-xl:w-[55%] max-xl:justify-start max-md:w-full max-md:py-10" id="frame3">
                <div class=" flex flex-col gap-y-5">

                    <div class="w-full flex flex-col gap-y-3 hidden-element">
                        <h2 class="bg-teal-700 w-[170px] text-center  text-white font-semibold ">NUESTRA HISTORIA</h2>
                        <h3 class="text-5xl">El origen del negocio</h3>
                    </div>
                    <p class="hidden-element">Nuestra clínica de cirugías plásticas nació para brindar a cada paciente un espacio seguro y personalizado, donde la estética y el bienestar se combinan. Fundada por un cirujano con más de 20 años de experiencia, ofrece tratamientos avanzados que ayudan a las personas a recuperar confianza y alcanzar su mejor versión.</p>
        
                    <div class="flex flex-col gap-y-3" >
                        <div class="flex items-center gap-x-2 hidden-element">
                            <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4327 0.522535C14.2178 0.300067 13.8633 0.293898 13.6408 0.508754C13.6362 0.513249 13.6316 0.517843 13.627 0.522535L4.50296 9.64664L1.53888 6.68256C1.31641 6.4677 0.961905 6.47387 0.747048 6.69634C0.537442 6.91336 0.537442 7.2574 0.747048 7.47442L4.10705 10.8344C4.32574 11.0531 4.68022 11.0531 4.89888 10.8344L14.4189 1.3144C14.6413 1.09951 14.6475 0.745004 14.4327 0.522535Z" fill="#5B5B5B"/>
                            </svg>
                            <h3>Inicie mi negocio con un sueño</h3>
                        </div>
                        <div class="flex items-center gap-x-2 hidden-element">
                            <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4327 0.522535C14.2178 0.300067 13.8633 0.293898 13.6408 0.508754C13.6362 0.513249 13.6316 0.517843 13.627 0.522535L4.50296 9.64664L1.53888 6.68256C1.31641 6.4677 0.961905 6.47387 0.747048 6.69634C0.537442 6.91336 0.537442 7.2574 0.747048 7.47442L4.10705 10.8344C4.32574 11.0531 4.68022 11.0531 4.89888 10.8344L14.4189 1.3144C14.6413 1.09951 14.6475 0.745004 14.4327 0.522535Z" fill="#5B5B5B"/>
                            </svg>
                            <h3>Pasión por la estética desde sus raíces</h3>
                        </div>
                        <div class="flex items-center gap-x-2 hidden-element">
                            <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4327 0.522535C14.2178 0.300067 13.8633 0.293898 13.6408 0.508754C13.6362 0.513249 13.6316 0.517843 13.627 0.522535L4.50296 9.64664L1.53888 6.68256C1.31641 6.4677 0.961905 6.47387 0.747048 6.69634C0.537442 6.91336 0.537442 7.2574 0.747048 7.47442L4.10705 10.8344C4.32574 11.0531 4.68022 11.0531 4.89888 10.8344L14.4189 1.3144C14.6413 1.09951 14.6475 0.745004 14.4327 0.522535Z" fill="#5B5B5B"/>
                            </svg>
                            <h3>Un amor por el arte y el cuidado</h3>
                        </div>
        
                    </div>
                </div>
            </div>

        </div>


        <!-- tercera parte -->
        <div class="h-[500px] w-full  flex items-center justify-evenly gap-x-3 max-xl:h-auto max-xl:items-start max-md:flex-wrap max-xl:py-10 max-md:gap-y-10 overflow-hidden">
            <div class="w-[400px] h-3/4  px-10 " id="frame1"> 
                <div class="hidden-element">
                    <div class="w-full flex justify-center">
                        <div class="rounded-full w-5 h-5 bg-teal-700"></div>
                    </div>
                    <div class="text-center   flex flex-col ">
                        <span class="text-[100px]  h-[150px]">01</span>
                        <h2 class="text-2xl h-[35px]">El Comienzo</h2>
                        <p>
                        Nuestra clínica se fundó con la misión de brindar servicios de estética de alta calidad. Nos esforzamos por ofrecer a nuestros clientes experiencias únicas.
                        </p>
                    </div>

                </div>
            </div>


            <div class="w-[400px] h-3/4  px-10 " id="frame3">
                <div class="hidden-element">

                    <div class="w-full flex justify-center">
                        <div class="rounded-full w-5 h-5 bg-teal-100"></div>
                    </div>
                    <div class="text-center  flex flex-col ">
                        <span class="text-[100px]  h-[150px]">02</span>
                        <h2 class="text-2xl  h-[35px]">Establecimiento</h2>
                        <p>
                        Nos establecimos como líderes en el sector, ofreciendo tratamientos innovadores y resultados excepcionales.
                        </p>
                    </div>
                </div>
            </div>



            <div class="w-[400px] h-3/4  px-10 " id="frame2">
                <div class="hidden-element">
                    <div class="w-full flex justify-center">
                        <div class="rounded-full w-5 h-5 bg-teal-400"></div>
                    </div>
                    <div class="text-center  flex flex-col ">
                        <span class="text-[100px]  h-[150px]">03</span>
                        <h2 class="text-2xl  h-[32px] leading-none">Hoy</h2>
                        <p class="">
                        Hoy en día, continuamos expandiendo nuestras ofertas y mejorando nuestras técnicas para satisfacer las necesidades de nuestros clientes.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- cuarta parte -->
        <div class="h-[500px] w-full  flex max-md:relative overflow-hidden">
            <div class="w-1/2 h-full bg-cover bg-center lazyload max-xl:absolute max-xl:w-full max-sm:bg-end" 
            data-bg="url('{{ asset('images/Nosotros/frame/img3.webp') }}')">
                
            </div>
            <div class="w-1/2 flex justify-center items-center max-xl:relative max-xl:z-20 max-xl:w-full">
                <div class="w-[500px] flex flex-col gap-y-5 max-xl:backdrop-blur-2xl max-xl:p-10 max-xl:w-[600px] max-xl:bg-teal-300/20 max-xl:bg-opacity-40 max-sm:px-5 max-md:w-[400px]" id="frame2">
                    <div class="hidden-element">
                        <h2 class="text-2xl  text-teal-600">MISIÓN</h2>
                        <p>Brindar servicios médicos de calidad a quienes necesitan una atención rápida y asesoría completa, comprendiendo sus necesidades y aspiraciones de vivir una digna y con oportunidades.</p>
                    </div>
                    <div class="hidden-element">
                        <h2 class="text-2xl text-teal-600">VISIÓN</h2>
                        <p>Convertirnos en Clínica referencia en el sur del país en la atención de cirugías, llevándolas a cabo de forma rápida y con altos estándares decalidad.</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- quinta parte -->
        <div class="h-[600px]  w-full bg-cover bg-end relative flex justify-center items-center" id="frame3" style="background-image: url('{{ asset('images/Nosotros/frame/img4.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-black/20 pointer-events-none"></div>
            <div class="relative z-20 w-[500px] flex flex-col justify-center items-center gap-y-4">
                <h2 class="text-white text-5xl leading-none max-sm:text-center hidden-element">La mejor experiencia</h2>
                <span class="text-white hidden-element">☆☆☆☆☆☆</span>
                <p class="text-white text-center w-[400px] text-xl mt-2 hidden-element">Nuestra clínica se dedica a ofrecer la mejor experiencia posible a nuestros clientes. Con tratamientos de última generación y un equipo de expertos, garantizamos resultados excepcionales.</p>
            </div>
        </div>
    
        <!-- sexta parte -->
        <div class="h-[600px]  w-full bg-cover bg-end relative flex justify-center items-center">
            <div class="w-[50%] h-full bg-center bg-cover lazyload max-md:hidden" 
            data-bg="url('{{ asset('images/Nosotros/frame/img5.webp') }}')">
            </div>
            <iframe class="w-1/2 h-full max-md:w-full" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1913.4575151552729!2d-71.51982214662705!3d-16.429141236524984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b23fcffffff%3A0xf3a2f908ae973204!2sTecsup!5e0!3m2!1ses-419!2spe!4v1730813567712!5m2!1ses-419!2spe"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
        </div>




        @include('constantes.footer')
    </div>
</div>

    
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.hidden-element');
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible-element');
                        observer.unobserve(entry.target); // Deja de observar el elemento después de la animación
                    }
                });
            }, { threshold: 0.1 }); // Detectar al 10% visible

            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener('lazybeforeunveil', function(e){
        const bg = e.target.getAttribute('data-bg');
        if(bg){
            e.target.style.backgroundImage = bg;
        }
    });
  // Función principal del contador
  (function ($) {
    $.fn.countTo = function (options) {
      options = options || {};

      return $(this).each(function () {
        var settings = $.extend({}, $.fn.countTo.defaults, {
          from: $(this).data('from'),
          to: $(this).data('to'),
          speed: $(this).data('speed'),
          refreshInterval: $(this).data('refresh-interval'),
          decimals: $(this).data('decimals')
        }, options);

        var loops = Math.ceil(settings.speed / settings.refreshInterval),
            increment = (settings.to - settings.from) / loops;

        var self = this,
            $self = $(this),
            loopCount = 0,
            value = settings.from,
            data = $self.data('countTo') || {};

        $self.data('countTo', data);

        if (data.interval) {
          clearInterval(data.interval);
        }
        data.interval = setInterval(updateTimer, settings.refreshInterval);

        render(value);

        function updateTimer() {
          value += increment;
          loopCount++;

          render(value);

          if (typeof settings.onUpdate == 'function') {
            settings.onUpdate.call(self, value);
          }

          if (loopCount >= loops) {
            $self.removeData('countTo');
            clearInterval(data.interval);
            value = settings.to;

            if (typeof settings.onComplete == 'function') {
              settings.onComplete.call(self, value);
            }
          }
        }

        function render(value) {
          var formattedValue = settings.formatter.call(self, value, settings);
          $self.html(formattedValue);
        }
      });
    };

    $.fn.countTo.defaults = {
      from: 0,
      to: 0,
      speed: 1000,
      refreshInterval: 100,
      decimals: 0,
      formatter: function (value, settings) {
        return value.toFixed(settings.decimals);
      },
      onUpdate: null,
      onComplete: null
    };
  }(jQuery));

  // Intersection Observer para activar el contador cuando el elemento está en la vista
  document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.timer');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const $counter = $(entry.target);
          if (!$counter.data('hasCounted')) {
            $counter.countTo($counter.data());
            $counter.data('hasCounted', true); // Para evitar que se active más de una vez
          }
        }
      });
    }, { threshold: 0.5 }); // Se activa cuando el 50% del elemento está en vista

    counters.forEach(counter => observer.observe(counter));
  });
</script>

</body>
</html>
