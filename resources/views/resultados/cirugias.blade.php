@extends('resultados.resultado')
@section('content')
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
@endsection
