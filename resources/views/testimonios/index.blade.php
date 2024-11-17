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
            

            <div class="w-[1300px]  flex flex-col gap-10">
                <!-- rino -->
<div class ="flex flex-col  items-center  ">
    <h2 class="text-5xl">
        Rinoplastia
    </h2>
    <div class="flex flex-wrap gap-4  p-10">
    @if(isset($r_rino) && $r_rino->isNotEmpty())
        @foreach($r_rino as $resultado)
                <div class="w-[600px]  ">
                    <div class="flex flex-col px-10 ">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-10 pb-5 mt-5">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/rino/' . $resultado->antes) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/rino/' . $resultado->despues) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Despues</h2>
                        </div>

                    </div>
                </div>
        @endforeach
    @else
        <div class=" flex items-center w-[1000px] h-[60px] border border-teal-300 rounded-xl justify-center text-teal-600 gap-x-4">
            <svg class="stroke-teal-400"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 14H10V10H9M10 6H10.01M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="">No hay resultados disponibles por el momento.</p>
        </div>
    @endif
    </div>
</div>
<!-- mamo -->
<div class ="flex flex-col  items-center ">
    <h2 class="text-5xl">
        Mamoplastia
    </h2>
    <div class="flex flex-wrap gap-4 p-10">
    @if(isset($r_mamo) && $r_mamo->isNotEmpty())

        @foreach($r_mamo as $resultado)
                <div class="w-[600px]  ">
                    <div class="flex flex-col px-10 ">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-10 pb-5 mt-5">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/mamo/' . $resultado->antes) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/mamo/' . $resultado->despues) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Despues</h2>
                        </div>

                    </div>
                </div>
        @endforeach
    @else
        <div class=" flex items-center w-[1000px] h-[60px] border border-teal-300 rounded-xl justify-center text-teal-600 gap-x-4">
            <svg class="stroke-teal-400"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 14H10V10H9M10 6H10.01M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="">No hay resultados disponibles por el momento.</p>
        </div>
    @endif
    </div>
</div>
<!-- blefa -->
<div class ="flex flex-col  items-center ">
    <h2 class="text-5xl">
        Blefaroplastia
    </h2>
    <div class="flex flex-wrap gap-4 p-10">
    @if(isset($r_blefa) && $r_blefa->isNotEmpty())

        @foreach($r_blefa as $resultado)
                <div class="w-[600px]  ">
                    <div class="flex flex-col px-10 ">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-10 pb-5 mt-5">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/blefa/' . $resultado->antes) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/blefa/' . $resultado->despues) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Despues</h2>
                        </div>

                    </div>
                </div>
        @endforeach
    @else
        <div class=" flex items-center w-[1000px] h-[60px] border border-teal-300 rounded-xl justify-center text-teal-600 gap-x-4">
            <svg class="stroke-teal-400"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 14H10V10H9M10 6H10.01M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="">No hay resultados disponibles por el momento.</p>
        </div>
    @endif
    </div>
</div>

<!-- lift -->
<div class ="flex flex-col  items-center ">
    <h2 class="text-5xl">
        Lifting facial
    </h2>
    <div class="flex flex-wrap gap-4 p-10">
    @if(isset($r_lift) && $r_lift->isNotEmpty())

        @foreach($r_lift as $resultado)
                <div class="w-[600px]  ">
                    <div class="flex flex-col px-10 ">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-10 pb-5 mt-5">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/lift/' . $resultado->antes) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/lift/' . $resultado->despues) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Despues</h2>
                        </div>

                    </div>
                </div>
        @endforeach
    @else
        <div class=" flex items-center w-[1000px] h-[60px] border border-teal-300 rounded-xl justify-center text-teal-600 gap-x-4">
            <svg class="stroke-teal-400"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 14H10V10H9M10 6H10.01M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="">No hay resultados disponibles por el momento.</p>
        </div>
    @endif
    </div>
</div>

<!-- lipo -->
<div class ="flex flex-col  items-center ">
    <h2 class="text-5xl">
        Liposucción + lipoinjerto
    </h2>
    <div class="flex flex-wrap gap-4 p-10">
    @if(isset($r_lipo) && $r_lipo->isNotEmpty())

        @foreach($r_lipo as $resultado)
                <div class="w-[600px]  ">
                    <div class="flex flex-col px-10 ">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-10 pb-5 mt-5">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/lipo/' . $resultado->antes) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/lipo/' . $resultado->despues) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Despues</h2>
                        </div>

                    </div>
                </div>
        @endforeach
    @else
        <div class=" flex items-center w-[1000px] h-[60px] border border-teal-300 rounded-xl justify-center text-teal-600 gap-x-4">
            <svg class="stroke-teal-400"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 14H10V10H9M10 6H10.01M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="">No hay resultados disponibles por el momento.</p>
        </div>
    @endif
    </div>
</div>
<!-- lipoder -->
<div class ="flex flex-col  items-center ">
    <h2 class="text-5xl">
        Lipodermoplastia
    </h2>
    <div class="flex flex-wrap gap-4 p-10">
    @if(isset($r_lipoder) && $r_lipoder->isNotEmpty())

        @foreach($r_lipoder as $resultado)
                <div class="w-[600px]  ">
                    <div class="flex flex-col px-10 ">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-10 pb-5 mt-5">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/lipodermo/' . $resultado->antes) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/cirugias/lipodermo/' . $resultado->despues) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Despues</h2>
                        </div>

                    </div>
                </div>
        @endforeach
    @else
        <div class=" flex items-center w-[1000px] h-[60px] border border-teal-300 rounded-xl justify-center text-teal-600 gap-x-4">
            <svg class="stroke-teal-400"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 14H10V10H9M10 6H10.01M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="">No hay resultados disponibles por el momento.</p>
        </div>
    @endif
    </div>
</div>
            </div>
        </div>

        <!-- testimonios -->
        @include('resultados.testimonios')
        
        
        





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



