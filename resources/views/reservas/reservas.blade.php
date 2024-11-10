@include('constantes.head')
<body>
    
<div class=" w-full bg-cover bg-center relative " style="background-image: url('{{ asset('images/reservas/1frame/back.webp') }}');"> 
        <div class="w-full h-full bg-gradient-to-r from-teal-100 via-transparent to-teal-800">
            @include('constantes.header')
            <div class="w-full h-[100px] flex justify-center items-center text-white gap-x-10">
                <a href="/reserva/cita" class="text-5xl leading-none  font-light">RESERVAS</a>
                <a href="/reserva/pago" class="text-5xl leading-none  font-light">PAGOS</a>
            </div>
            <div class="flex justify-center items-center  p-10">
                @yield('content')
            </div>
            
        </div>
    </div>
    
    @include('constantes.footer')
    @vite('resources/js/app.js')  
</body>
</html>