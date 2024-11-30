<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CitasTEC</title>

    <!-- Fuentes cargadas de manera asíncrona -->
    
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Estilos CSS de Vite (App) con inline crítico si es posible -->
    <style>
        /* Añade aquí el CSS crítico para la parte visible inicialmente de tu página */
    </style>
    @vite('resources/css/app.css')

    <!-- Librerías de scripts cargadas de forma asíncrona o diferida -->
    <!-- Primero, carga GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>

    <!-- Luego, otras librerías y scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async defer></script>
    <script src="https://unpkg.com/imask"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=ATW1irH9PTZzCRiBE8k8sjrZY9s3bEPRSqr8rli1OQq3llRrIoIsAt-9yWQKfAhimEoOwpBKz3LT7zqJ&components=buttons&currency=USD&disable-funding=credit,card"></script>



    <!-- Estilos adicionales -->
    <style>
        [x-cloak] { display: none !important; }
        .loader svg path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
        }

        /* Estilos base */
        .hidden-element {
            opacity: 0;
            transform: translateY(50px); /* Efecto inicial (ajustable según el frame) */
            transition: all 0.8s ease-out;
        }

        .visible-element {
            opacity: 1;
            transform: translateY(0); /* Efecto final */
        }

        /* Efecto para Frame 1: Slide desde la izquierda */
#frame1 .hidden-element {
    transform: translateX(-100%); /* Desliza desde la izquierda */
}

#frame1 .visible-element {
    transform: translateX(0); /* Llega al centro */
}

/* Efecto para Frame 2: Slide desde la derecha */
#frame2 .hidden-element {
    transform: translateX(100%); /* Desliza desde la derecha */
}

#frame2 .visible-element {
    transform: translateX(0); /* Llega al centro */
}

/* Efecto para Frame 3: Desliza desde abajo */
#frame3 .hidden-element {
    transform: translateY(50%); /* Inicia desde abajo */
}

#frame3 .visible-element {
    transform: translateY(0); /* Llega al centro */
}

/* Efecto para Frame 4: Desliza desde arriba */
#frame4 .hidden-element {
    transform: translateY(-100%); /* Inicia desde arriba */
}

#frame4 .visible-element {
    transform: translateY(0); /* Llega al centro */
}

/* Efecto para Frame 5: Rotación */
#frame5 .hidden-element {
    transform: rotate(-45deg); /* Comienza con rotación */
}

#frame5 .visible-element {
    transform: rotate(0); /* Finaliza sin rotación */
}

/* Efecto para Frame 6: Zoom In */
#frame6 .hidden-element {
    transform: scale(0.5); /* Comienza más pequeño */
}

#frame6 .visible-element {
    transform: scale(1); /* Termina en su tamaño original */
}

/* Efecto para Frame 7: Flip Horizontal */
#frame7 .hidden-element {
    transform: rotateY(180deg); /* Gira horizontalmente */
}

#frame7 .visible-element {
    transform: rotateY(0); /* Vuelve a la posición normal */
}

    </style>
</head>
