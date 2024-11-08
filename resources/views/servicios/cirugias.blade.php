@include('constantes.head')
<body>
    

<div class="h-[500px]  w-full bg-cover bg-center relative" style="background-image: url('{{ asset('images/1frameCirugias/back.jpg') }}');">
    <!-- Gradiente en el fondo -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-black/20 pointer-events-none"></div>

    <!-- Menú de navegación en primer plano -->
    <div class="relative z-20">
        @include('constantes.header')
    </div>

    <!-- Contenido centrado en primer plano -->
    <div class="relative z-10 flex w-full h-[300px] justify-center items-center ">
        <p class="text-white text-5xl ">
            Cirugias
        </p>
    </div>
</div>

<div class="w-full flex flex-col space-y-4 my-4">
@foreach ($cirugias as $index => $cirugia)
    @if ($index % 2 === 0)
        <!-- Estructura de Div 1 -->
        <div class="h-[400px]  flex justify-between">
            <div class="w-1/2 flex justify-center px-20 flex-col items-start gap-3">
                <h2 class="text-3xl">{{ $cirugia->nombre }}</h2>
                <p>{{ $cirugia->descripcion_larga }}</p>
            </div>
            <div class="w-1/2 h-full bg-cover bg-center" style="background-image: url('{{ asset('images/1frameCirugias/' . $cirugia->imagen) }}');">
            </div>
        </div>
    @else
        <!-- Estructura de Div 2 -->
        <div class="h-[400px]  flex justify-between">
            <div class="w-1/2 h-full bg-cover bg-center" style="background-image: url('{{ asset('images/1frameCirugias/' . $cirugia->imagen) }}');">
            </div>
            <div class="w-1/2 flex justify-center px-20 flex-col items-end gap-3">
                <h2 class="text-3xl ">{{ $cirugia->nombre }}</h2>
                <p class="text-end">{{ $cirugia->descripcion_larga }}</p>
            </div>
        </div>
    @endif
@endforeach
</div>

@include('constantes.footer')

</body>
</html>