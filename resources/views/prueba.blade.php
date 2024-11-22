<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animaciones en Frames</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Estilos base */
        .hidden-element {
            opacity: 0;
            transition: all 0.8s ease-out;
        }

        .visible-element {
            opacity: 1;
        }

        /* Efecto: Izquierda a Centro */
        #frame .hidden-element {
            transform: translateX(-100%);
        }

        #frame .visible-element {
            transform: translateX(0);
        }

        /* Efecto: Derecha a Centro */
        #frame1 .hidden-element {
            transform: translateX(100%);
        }

        #frame1 .visible-element {
            transform: translateX(0);
        }

        /* Efecto: Abajo hacia Arriba */
        #frame2 .hidden-element {
            transform: translateY(100%);
        }

        #frame2 .visible-element {
            transform: translateY(0);
        }

        /* Efecto: Arriba hacia Abajo */
        #frame3 .hidden-element {
            transform: translateY(-100%);
        }

        #frame3 .visible-element {
            transform: translateY(0);
        }

        /* Animación adicional: Rotación */
        #frame4 .hidden-element {
            transform: rotate(-45deg);
        }

        #frame4 .visible-element {
            transform: rotate(0);
        }

        /* Animación adicional: Zoom In */
        #frame5 .hidden-element {
            transform: scale(0.5);
        }

        #frame5 .visible-element {
            transform: scale(1);
        }

        /* Animación adicional: Flip Horizontal */
        #frame6 .hidden-element {
            transform: rotateY(180deg);
        }

        #frame6 .visible-element {
            transform: rotateY(0);
        }

        /* Animación adicional: Flip Vertical */
        #frame7 .hidden-element {
            transform: rotateX(180deg);
        }

        #frame7 .visible-element {
            transform: rotateX(0);
        }

        /* Animación adicional: Desvanecimiento */
        #frame8 .hidden-element {
            opacity: 0;
            transform: scale(0.9);
        }

        #frame8 .visible-element {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-200">
    <!-- Frames -->
    <div id="frame" class="h-screen w-full flex items-center justify-center bg-blue-600">
        <div class="hidden-element text-center p-10 bg-blue-500 text-white rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold">Izquierda a Centro</h2>
        </div>
    </div>

    <div id="frame1" class="h-screen w-full flex items-center justify-center bg-green-600">
        <div class="hidden-element text-center p-10 bg-green-500 text-white rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold">Derecha a Centro</h2>
        </div>
    </div>

    <div id="frame2" class="h-screen w-full flex items-center justify-center bg-purple-600">
        <div class="hidden-element text-center p-10 bg-purple-500 text-white rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold">Abajo hacia Arriba</h2>
        </div>
    </div>

    <div id="frame3" class="h-screen w-full flex items-center justify-center bg-pink-600">
        <div class="hidden-element text-center p-10 bg-pink-500 text-white rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold">Arriba hacia Abajo</h2>
        </div>
    </div>

    <div id="frame4" class="h-screen w-full flex items-center justify-center bg-yellow-600">
        <div class="hidden-element text-center p-10 bg-yellow-500 text-white rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold">Rotación</h2>
        </div>
    </div>

    <div id="frame5" class="h-screen w-full flex items-center justify-center bg-red-600">
        <div class="hidden-element text-center p-10 bg-red-500 text-white rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold">Zoom In</h2>
        </div>
    </div>

    <div id="frame6" class="h-screen w-full flex items-center justify-center bg-teal-600">
        <div class="hidden-element text-center p-10 bg-teal-500 text-white rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold">Flip Horizontal</h2>
        </div>
    </div>

    <div id="frame7" class="h-screen w-full flex items-center justify-center bg-gray-600">
        <div class="hidden-element text-center p-10 bg-gray-500 text-white rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold">Flip Vertical</h2>
        </div>
    </div>

    <div id="frame8" class="h-screen w-full flex items-center justify-center bg-indigo-600">
        <div class="hidden-element text-center p-10 bg-indigo-500 text-white rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold">Desvanecimiento</h2>
        </div>
    </div>

    <!-- Script para manejar las animaciones -->
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
    </script>
</body>
</html>
