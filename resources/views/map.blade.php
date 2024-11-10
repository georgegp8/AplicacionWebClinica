<!DOCTYPE html> 
<html lang="es" class="scroll-smooth"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>TecCita</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet"> 
     
    @vite('resources/css/app.css') 
     
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>


</head> 
<body> 
    <div x-data="{ loading: true }" x-init="$nextTick(() => {
        gsap.to('svg path', {
            strokeDashoffset: 0,
            duration: 1,
            ease: 'power1.inOut',
            stagger: 0.3,
            onComplete: () => {
                loading = false;
            }
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
 
        <div x-show="!loading" x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-start="opacity-100" class="content "> 
            <h1 class="text-center">Contenido de la página</h1> 
            <p class="text-center">¡Bienvenido a CitasTEC!</p> 
        </div> 
    </div> 
</body> 
</html>