@include('constantes.head')
<body class=" scroll-smooth">

<div x-data="{ loading: true, content: false }" 
x-init="setTimeout(() => { loading = false; content = true; }, 2500); 
              $nextTick(() => {
                  gsap.to('svg path', {
                      strokeDashoffset: 0,
                      duration: 1,
                      ease: 'power1.inOut',
                      stagger: 0.3
                  });
              })"> 
    <div  
        x-show="loading"  
        class="loader fixed inset-0 flex justify-center items-center bg-teal-700/80 z-50 "  
        x-transition:leave="transition ease-in-out duration-500" 
        x-transition:leave-start="opacity-100" 
        x-transition:leave-end="opacity-0"> 
        <svg class="h-[160px] w-[210px] stroke-[0.4px] stroke-white fill-none" viewBox="0 0 51 50" xmlns="http://www.w3.org/2000/svg"> 
            <path d="M4.70131 34.375C11.218 47.2656 19.1319 48.6979 24.6246 50C16.5805 39.8438 14.6645 29.6875 16.5805 17.5781C8.15041 8.98438 1.63752 10.1562 1.63478 10.1562C0.485077 14.8438 0.215417 25.5015 4.70131 34.375Z" /> 
            <path d="M26.1616 0C16.9645 8.59375 11.2163 33.5938 26.3567 50C24.6246 40.625 26.5441 25.3906 34.5916 17.9688C33.4426 11.3281 29.9938 3.51562 26.1616 0Z" /> 
            <path d="M27.3112 49.6094C23.0959 18.75 45.7054 10.1562 50.3039 10.1562C54.136 33.9844 39.1908 48.4375 27.3112 49.6094Z" /> 
        </svg> 
    </div>

    <div x-show="content" 
         x-cloak
         x-transition:enter="transition ease-in-out duration-500" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         class="content ">
        
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

         

        
     
     


    </div>
</div>






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



      document.addEventListener('lazybeforeunveil', function(e){
        const bg = e.target.getAttribute('data-bg');
        if(bg){
            e.target.style.backgroundImage = bg;
        }
    });
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