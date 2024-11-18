@extends('resultados.resultado')
@section('content')
<!-- Acido Hialuronico -->
<div class ="flex flex-col  items-center  ">
    <h2 class="text-5xl max-sm:text-4xl ">
        Acido Hialuronico
    </h2>
    <div class="flex flex-wrap gap-4  p-10 justify-center  ">
    @if(isset($r_acido) && $r_acido->isNotEmpty())
        @foreach($r_acido as $resultado)
                <div class="w-[600px]  max-sm:w-[400px] ">
                    <div class="flex flex-col px-10 max-sm:p-0">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-[25px] pb-5 mt-5 max-sm:w-full max-sm:justify-center">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/tratamientos/acido/' . $resultado->antes) }}" class=" w-[270px] h-[230px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center max-sm:mt-4">
                            <img src=" {{ asset('images/resultados/tratamientos/acido/' . $resultado->despues) }}" class=" w-[270px] h-[230px] object-cover" loading="lazy" alt="">
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
<!-- Botox -->
<div class ="flex flex-col  items-center ">
    <h2 class="text-5xl max-sm:text-4xl">
        Botox
    </h2>
    <div class="flex flex-wrap gap-4 p-10 justify-center">
    @if(isset($r_botox) && $r_botox->isNotEmpty())

        @foreach($r_botox as $resultado)
                <div class="w-[600px]  max-sm:w-[400px]">
                    <div class="flex flex-col px-10 max-sm:p-0">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-10 pb-5 mt-5 max-sm:w-full max-sm:justify-center">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/tratamientos/botox/' . $resultado->antes) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center max-sm:mt-4">
                            <img src=" {{ asset('images/resultados/tratamientos/botox/' . $resultado->despues) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
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
<!-- Menton y Pomulos -->
<div class ="flex flex-col  items-center ">
    <h2 class="text-5xl max-sm:text-4xl">
        Menton y Pomulos
    </h2>
    <div class="flex flex-wrap gap-4 p-10 justify-center">
    @if(isset($r_menton) && $r_menton->isNotEmpty())

        @foreach($r_menton as $resultado)
                <div class="w-[600px]  max-sm:w-[400px]">
                    <div class="flex flex-col px-10 max-sm:p-0">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-10 pb-5 mt-5 max-sm:w-full max-sm:justify-center">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/tratamientos/menton/' . $resultado->antes) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center max-sm:mt-4">
                            <img src=" {{ asset('images/resultados/tratamientos/menton/' . $resultado->despues) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
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

<!-- Láser facial -->
<div class ="flex flex-col  items-center "> 
    <h2 class="text-5xl max-sm:text-4xl">
        Láser facial
    </h2>
    <div class="flex flex-wrap gap-4 p-10 justify-center w-full">
    @if(isset($r_laser) && $r_laser->isNotEmpty())
        @foreach($r_laser as $resultado)
                <div class="w-[600px]  max-sm:w-[400px]">
                    <div class="flex flex-col px-10 max-sm:p-0">
                        <h3 class="text-2xl text-teal-500">Caso {{$resultado->caso}} </h3>
                        <p class="w-full">
                            {{$resultado->descripcion}}
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap w-full justify-between text-teal-600 font-medium px-10 pb-5 mt-5 max-sm:w-full max-sm:justify-center">
                        <div class="flex flex-col items-center">
                            <img src=" {{ asset('images/resultados/tratamientos/laser/' . $resultado->antes) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Antes</h2>
                        </div>
                        <div class="flex flex-col items-center max-sm:mt-4">
                            <img src=" {{ asset('images/resultados/tratamientos/laser/' . $resultado->despues) }}" class=" w-[250px] h-[250px] object-cover" loading="lazy" alt="">
                            <h2 class="text-xl">Despues</h2>
                        </div>

                    </div>
                </div>
        @endforeach
    @else
        <div class=" flex items-center w-full h-[60px] border border-teal-300 rounded-xl justify-center text-teal-600 gap-x-4 px-5">
            <svg class="stroke-teal-400"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 14H10V10H9M10 6H10.01M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="">No hay resultados disponibles por el momento.</p>
        </div>
    @endif
    </div>
</div>


@endsection
