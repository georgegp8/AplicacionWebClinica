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
         data-bg="url('{{ asset('images/resultados/frame/back.webp') }}')">
            <!-- Gradiente en el fondo -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-black/20 pointer-events-none"></div>
        
            <!-- Menú de navegación en primer plano -->
            <div class="relative z-20">
                @include('constantes.header')
            </div>
        
            <!-- Contenido centrado en primer plano -->
            <div class="relative z-10 flex w-full h-[300px] justify-center items-center ">
                <p class="text-white text-5xl max-md:text-4xl">
                    Resultados
                </p>
            </div>
        </div>

        <div class=" w-full flex justify-center gap-x-10  flex-wrap py-10">
            

            <div class="  flex flex-col gap-10  max-xl:w-full">
                @yield('content')
            </div>
        </div>

        <!-- testimonios -->
        @include('resultados.showtestimonios')


        @include('resultados.createtestimonios')
        
        

        @include('constantes.footer')




    </div>
</div>

    
    
    <script>
        document.addEventListener('lazybeforeunveil', function(e){
        const bg = e.target.getAttribute('data-bg');
        if(bg){
            e.target.style.backgroundImage = bg;
        }
    });

</script>

</body>
</html>
