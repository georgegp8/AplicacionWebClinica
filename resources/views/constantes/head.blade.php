<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async defer></script>

    <!-- Estilos adicionales -->
    <style>
        [x-cloak] { display: none !important; }
        .loader svg path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
        }
    </style>
</head>
