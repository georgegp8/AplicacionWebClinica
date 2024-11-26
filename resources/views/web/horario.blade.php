@include('constantes.head')

<body class="bg-cover bg-center"
    style="
          background-image: url('{{ asset('images/horarios/horarios.webp') }}');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          background-attachment: fixed;
      ">


    <div x-data="{ loading: true, content: false }" x-init="setTimeout(() => {
        loading = false;
        content = true;
    }, 1000);
    $nextTick(() => {
        gsap.to('svg path', {
            strokeDashoffset: 0,
            duration: 1,
            ease: 'power1.inOut',
            stagger: 0.3
        });
    })">
        <!-- Loader -->
        <div x-show="loading" class="loader fixed inset-0 flex justify-center items-center bg-teal-700/80 z-50"
            x-transition:leave="transition ease-in-out duration-500" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <svg class="h-[160px] w-[210px] stroke-[0.4px] stroke-white fill-none" viewBox="0 0 51 50"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4.70131 34.375C11.218 47.2656 19.1319 48.6979 24.6246 50C16.5805 39.8438 14.6645 29.6875 16.5805 17.5781C8.15041 8.98438 1.63752 10.1562 1.63478 10.1562C0.485077 14.8438 0.215417 25.5015 4.70131 34.375Z" />
                <path
                    d="M26.1616 0C16.9645 8.59375 11.2163 33.5938 26.3567 50C24.6246 40.625 26.5441 25.3906 34.5916 17.9688C33.4426 11.3281 29.9938 3.51562 26.1616 0Z" />
                <path
                    d="M27.3112 49.6094C23.0959 18.75 45.7054 10.1562 50.3039 10.1562C54.136 33.9844 39.1908 48.4375 27.3112 49.6094Z" />
            </svg>
        </div>

        <!-- Contenido -->
        <div x-show="content" x-cloak x-transition:enter="transition ease-in-out duration-500"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="content">

            <!-- Header -->
            @include('constantes.header')

            <div class="w-full p-6">
                <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg border bg-opacity-90">
                    <div class="px-6 py-4 border-b">
                        <h3 class="text-lg font-semibold text-gray-800">Calendario de atención de doctores</h3>
                    </div>
                    <div class="flex justify-between items-center px-6 py-4">
                        <label for="consultorio_select" class="text-gray-600 font-medium">Consultorios</label>
                        <select id="consultorio_select"
                            class="form-control w-1/2 max-w-sm border-gray-300 rounded-md shadow-sm focus:ring focus:ring-teal-300">
                            <option value="">Seleccione un consultorio...</option>
                            @foreach ($consultorios as $consultorio)
                                <option value="{{ $consultorio->id }}">
                                    {{ $consultorio->nombre . ' - ' . $consultorio->ubicacion }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="p-6">
                        <div id="consultorio_info" class="text-gray-600 text-sm">
                            <!-- Aquí se cargará la información del consultorio -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            @include('constantes.footer')
        </div>
    </div>

    <script>
        $('#consultorio_select').on('change', function() {
            var consultorio_id = $(this).val();
            var url = "{{ route('admin.horarios.cargar_datos_consultorio', ':id') }}";
            url = url.replace(':id', consultorio_id);

            if (consultorio_id) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        $('#consultorio_info').html(data);
                    },
                    error: function() {
                        alert('Error al obtener los datos del consultorio');
                    }
                });
            } else {
                $('#consultorio_info').html('');
            }
        });
    </script>

    <!-- Cargar librería LazyLoad optimizada -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.hidden-element');
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible-element');
                        observer.unobserve(entry
                            .target); // Deja de observar el elemento después de la animación
                    }
                });
            }, {
                threshold: 0.1
            }); // Detectar al 10% visible

            elements.forEach(element => observer.observe(element));
        });
        document.addEventListener('lazybeforeunveil', function(e) {
            const bg = e.target.getAttribute('data-bg');
            if (bg) {
                e.target.style.backgroundImage = bg;
            }
        });
    </script>
</body>

</html>
