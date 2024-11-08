@include('constantes.head')
<body>
    <!-- primer frame -->
    @include('in_dex.1frame')
    
    <!-- segundo frame -->
    @include('in_dex.2frame')
    
    
    <!-- tercer frame -->
    @include('in_dex.3frame')
    

    <!-- cuarto frame -->
    @include('in_dex.4frame')
    

    <!-- quinto frame -->
    @include('in_dex.5frame')
    

    <!-- sexto frame -->
    @include('in_dex.6frame')
    

    <!-- septimo frame -->
    @include('in_dex.7frame')
    

    <!-- octavo frame -->
    @include('in_dex.8frame')
    
    


    @include('constantes.footer')



<!-- <div id="map" class="bg-gray-300" style="height: 500px; width: 50%;"></div> -->


<!-- <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&callback=initMap" async defer></script> -->

    <!-- Script para inicializar el mapa -->
    <!-- <script>
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
    </script> -->








    <script>
  // Función principal del contador
  (function ($) {
    $.fn.countTo = function (options) {
      options = options || {};

      return $(this).each(function () {
        var settings = $.extend({}, $.fn.countTo.defaults, {
          from: $(this).data('from'),
          to: $(this).data('to'),
          speed: $(this).data('speed'),
          refreshInterval: $(this).data('refresh-interval'),
          decimals: $(this).data('decimals')
        }, options);

        var loops = Math.ceil(settings.speed / settings.refreshInterval),
            increment = (settings.to - settings.from) / loops;

        var self = this,
            $self = $(this),
            loopCount = 0,
            value = settings.from,
            data = $self.data('countTo') || {};

        $self.data('countTo', data);

        if (data.interval) {
          clearInterval(data.interval);
        }
        data.interval = setInterval(updateTimer, settings.refreshInterval);

        render(value);

        function updateTimer() {
          value += increment;
          loopCount++;

          render(value);

          if (typeof settings.onUpdate == 'function') {
            settings.onUpdate.call(self, value);
          }

          if (loopCount >= loops) {
            $self.removeData('countTo');
            clearInterval(data.interval);
            value = settings.to;

            if (typeof settings.onComplete == 'function') {
              settings.onComplete.call(self, value);
            }
          }
        }

        function render(value) {
          var formattedValue = settings.formatter.call(self, value, settings);
          $self.html(formattedValue);
        }
      });
    };

    $.fn.countTo.defaults = {
      from: 0,
      to: 0,
      speed: 1000,
      refreshInterval: 100,
      decimals: 0,
      formatter: function (value, settings) {
        return value.toFixed(settings.decimals);
      },
      onUpdate: null,
      onComplete: null
    };
  }(jQuery));

  // Intersection Observer para activar el contador cuando el elemento está en la vista
  document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.timer');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const $counter = $(entry.target);
          if (!$counter.data('hasCounted')) {
            $counter.countTo($counter.data());
            $counter.data('hasCounted', true); // Para evitar que se active más de una vez
          }
        }
      });
    }, { threshold: 0.5 }); // Se activa cuando el 50% del elemento está en vista

    counters.forEach(counter => observer.observe(counter));
  });
</script>

</body>

</html>