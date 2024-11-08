<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Google</title>
</head>
<body>
    <h1>Mi Mapa de Google</h1>
    <!-- Contenedor del mapa -->
    <div id="map" style="height: 500px; width: 100%;"></div>

    <!-- Script para cargar la API de Google Maps de forma asíncrona -->
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&callback=initMap" async defer></script>

    <!-- Script para inicializar el mapa -->
    <script>
        function initMap() {
            const location = { lat: -34.397, lng: 150.644 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,
                center: location,
            });
            new google.maps.Marker({
                position: location,
                map: map,
            });
        }

        // Asegúrate de que initMap esté disponible globalmente
        window.initMap = initMap;
    </script>
</body>
</html>
