@include('constantes.head')
<body>
    <div class="h-[500px]  w-full bg-cover bg-end relative" style="background-image: url('{{ asset('images/Nosotros/frame/back.webp') }}');">
        <!-- Gradiente en el fondo -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-black/20 pointer-events-none"></div>
    
        <!-- Menú de navegación en primer plano -->
        <div class="relative z-20">
            @include('constantes.header')
        </div>
    
        <!-- Contenido centrado en primer plano -->
        <div class="relative z-10 flex w-full h-[300px] justify-center items-center ">
            <p class="text-white text-5xl ">
                Nosotros
            </p>
        </div>
    </div>

    <!-- segunda parte -->
    <div class="h-[500px] w-full  flex items-center">
        <!-- primero -->
        <div class="w-[35%] h-full bg-center bg-cover" style="background-image: url('{{ asset('images/Nosotros/frame/img1.webp') }}');">
        </div>
        <!-- segundo -->
        <div class="bg-gradient-to-t from-teal-300 to-teal-600 pointer-events-none w-[20%] h-full flex items-center justify-center">
            <div class=" text-white flex flex-col gap-y-3">
                <div class="w-full flex justify-center">
                    <img class="h-40 w-40" src="{{ asset('images/Nosotros/frame/img2.webp') }}" alt="">
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
        <div class="w-[45%] h-full flex flex-col justify-center items-center px-10">
            <div class=" flex flex-col gap-y-5">

                <div class="w-full flex flex-col gap-y-3">
                    <h2 class="bg-teal-700 w-[170px] text-center  text-white font-semibold ">NUESTRA HISTORIA</h2>
                    <h3 class="text-5xl">El origen del negocio</h3>
                </div>
                <p>Nuestra clínica de cirugías plásticas nació para brindar a cada paciente un espacio seguro y personalizado, donde la estética y el bienestar se combinan. Fundada por un cirujano con más de 20 años de experiencia, ofrece tratamientos avanzados que ayudan a las personas a recuperar confianza y alcanzar su mejor versión.</p>
    
                <div class="flex flex-col gap-y-3">
                    <div class="flex items-center gap-x-2">
                        <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4327 0.522535C14.2178 0.300067 13.8633 0.293898 13.6408 0.508754C13.6362 0.513249 13.6316 0.517843 13.627 0.522535L4.50296 9.64664L1.53888 6.68256C1.31641 6.4677 0.961905 6.47387 0.747048 6.69634C0.537442 6.91336 0.537442 7.2574 0.747048 7.47442L4.10705 10.8344C4.32574 11.0531 4.68022 11.0531 4.89888 10.8344L14.4189 1.3144C14.6413 1.09951 14.6475 0.745004 14.4327 0.522535Z" fill="#5B5B5B"/>
                        </svg>
                        <h3>Inicie mi negocio con un sueño</h3>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4327 0.522535C14.2178 0.300067 13.8633 0.293898 13.6408 0.508754C13.6362 0.513249 13.6316 0.517843 13.627 0.522535L4.50296 9.64664L1.53888 6.68256C1.31641 6.4677 0.961905 6.47387 0.747048 6.69634C0.537442 6.91336 0.537442 7.2574 0.747048 7.47442L4.10705 10.8344C4.32574 11.0531 4.68022 11.0531 4.89888 10.8344L14.4189 1.3144C14.6413 1.09951 14.6475 0.745004 14.4327 0.522535Z" fill="#5B5B5B"/>
                        </svg>
                        <h3>Pasión por la estética desde sus raíces</h3>
                    </div>
                    <div class="flex items-center gap-x-2">
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
    <div class="h-[500px] w-full  flex items-center justify-evenly gap-x-3">
        <div class="w-[400px] h-3/4  px-10 "> 
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


        <div class="w-[400px] h-3/4  px-10 ">
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



        <div class="w-[400px] h-3/4  px-10 ">
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

    <!-- cuarta parte -->
    <div class="h-[500px] w-full  flex">
        <div class="w-1/2 h-full bg-cover bg-center" style="background-image: url('{{ asset('images/Nosotros/frame/img3.webp') }}');">
            
        </div>
        <div class="w-1/2 flex justify-center items-center">
            <div class="w-[500px] flex flex-col gap-y-5">
                <div>
                    <h2 class="text-2xl  text-teal-600">MISIÓN</h2>
                    <p>Brindar servicios médicos de calidad a quienes necesitan una atención rápida y asesoría completa, comprendiendo sus necesidades y aspiraciones de vivir una digna y con oportunidades.</p>
                </div>
                <div>
                    <h2 class="text-2xl text-teal-600">VISIÓN</h2>
                    <p>Convertirnos en Clínica referencia en el sur del país en la atención de cirugías, llevándolas a cabo de forma rápida y con altos estándares decalidad.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- quinta parte -->
    <div class="h-[600px]  w-full bg-cover bg-end relative flex justify-center items-center" style="background-image: url('{{ asset('images/Nosotros/frame/img4.webp') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-black/20 pointer-events-none"></div>
        <div class="relative z-20 w-[500px] flex flex-col justify-center items-center gap-y-4">
            <h2 class="text-white text-5xl leading-none">La mejor experiencia</h2>
            <span class="text-white">☆☆☆☆☆☆</span>
            <p class="text-white text-center w-[400px] text-xl mt-2">Nuestra clínica se dedica a ofrecer la mejor experiencia posible a nuestros clientes. Con tratamientos de última generación y un equipo de expertos, garantizamos resultados excepcionales.</p>
        </div>
    </div>
    
    <!-- sexta parte -->
    <div class="h-[600px]  w-full bg-cover bg-end relative flex justify-center items-center">
        <div class="w-[50%] h-full bg-center bg-cover" style="background-image: url('{{ asset('images/Nosotros/frame/img5.webp') }}');">
        </div>
        <iframe class="w-1/2 h-full"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1913.4575151552729!2d-71.51982214662705!3d-16.429141236524984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b23fcffffff%3A0xf3a2f908ae973204!2sTecsup!5e0!3m2!1ses-419!2spe!4v1730813567712!5m2!1ses-419!2spe"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
    </div>




    @include('constantes.footer')
    
    
    <script>
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
