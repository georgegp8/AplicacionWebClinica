@include('constantes.head')
<body>

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

    <!-- Preloader con animación SVG optimizada -->
    <div x-show="loading" class="loader fixed inset-0 flex justify-center items-center bg-teal-700 z-50"  
         x-transition:leave="transition ease-in-out duration-500" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0"> 
        <svg class="h-[160px] w-[210px] stroke-[0.4px] stroke-white fill-none" viewBox="0 0 51 50" xmlns="http://www.w3.org/2000/svg"> 
            <path d="M4.70131 34.375C11.218 47.2656 19.1319 48.6979 24.6246 50C16.5805 39.8438 14.6645 29.6875 16.5805 17.5781C8.15041 8.98438 1.63752 10.1562 1.63478 10.1562C0.485077 14.8438 0.215417 25.5015 4.70131 34.375Z" /> 
            <path d="M26.1616 0C16.9645 8.59375 11.2163 33.5938 26.3567 50C24.6246 40.625 26.5441 25.3906 34.5916 17.9688C33.4426 11.3281 29.9938 3.51562 26.1616 0Z" /> 
            <path d="M27.3112 49.6094C23.0959 18.75 45.7054 10.1562 50.3039 10.1562C54.136 33.9844 39.1908 48.4375 27.3112 49.6094Z" /> 
        </svg> 
    </div>

    <!-- Contenido principal -->
    <div x-show="content" 
         x-cloak
         x-transition:enter="transition ease-in-out duration-500" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         class="content overflow-hidden">
        
        <!-- Contenido -->
        <div class="h-[500px] w-full bg-cover bg-center relative lazyload" 
        data-bg="url('{{ asset('images/servicios/tratamientos/back.webp') }}')"
        >
            <!-- Gradiente en el fondo -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-black/20 pointer-events-none"></div>

            <!-- Menú de navegación en primer plano -->
            <div class="relative z-20">
                @include('constantes.header')
            </div>

            <!-- Contenido centrado en primer plano -->
            <div class="relative z-10 flex w-full h-[300px] justify-center items-center " id="frame3">
                <div class="hidden-element">
                    <p class="text-white text-5xl">Tratamientos</p>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col space-y-4 my-4">
            @foreach ($tratamientos as $index => $tratamiento)
                <div class="h-[400px] flex justify-between max-md:relative">
                    @if ($index % 2 === 0)
                        <div class="w-1/2 flex justify-center px-20 flex-col items-start gap-3  max-md:w-full max-md:relative max-md:z-20 max-md:items-center " id="frame1">
                            <div class="hidden-element">
                                <h2 class="text-3xl max-md:backdrop-blur-xl max-md:bg-teal-500/60 max-md:bg-opacity-40 max-md:text-white max-md:p-3 max-md:text-center">{{ $tratamiento->nombre }}</h2>
                                <p class=" max-md:backdrop-blur-xl max-md:bg-teal-500/60 max-md:bg-opacity-40 max-md:text-white max-md:p-3 max-md:text-center max-md:w-[400px]">{{ $tratamiento->descripcion_larga }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="w-1/2 h-full bg-cover bg-center lazyload max-md:absolute max-md:w-full" 
                        data-bg="url('{{ asset('images/servicios/tratamientos/'. $tratamiento->imagen) }}')">
                    </div>
                    @if ($index % 2 !== 0)
                        <div class="w-1/2 flex justify-center px-20 flex-col items-end gap-3 max-md:w-full max-md:relative max-md:items-center" id="frame2" >
                            <div class="hidden-element">
                                <h2 class=" text-end text-3xl max-md:backdrop-blur-xl max-md:bg-teal-500/60 max-md:bg-opacity-40 max-md:text-white max-md:p-3 max-md:text-center">{{ $tratamiento->nombre }}</h2>
                                <p class="text-end max-md:backdrop-blur-xl max-md:bg-teal-500/60 max-md:bg-opacity-40 max-md:text-white max-md:p-3 max-md:text-center max-md:w-[400px]">{{ $tratamiento->descripcion_larga }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        @include('constantes.footer')
    </div>
</div>
<!-- Cargar librería LazyLoad optimizada -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async defer></script> -->
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
</script>
</body>
</html>