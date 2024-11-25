import './bootstrap';

import Alpine from 'alpinejs';

// Iniciar Alpine
window.Alpine = Alpine;
Alpine.start();

// Importar Vue y el componente principal
import { createApp } from 'vue';
import App from './App.vue';

// Crear y montar la aplicación Vue
const app = createApp(App);

// Usar el plugin VueTheMask
import VueTheMask from 'vue-the-mask';
app.use(VueTheMask);

// Montar la aplicación Vue en el contenedor con id 'app'
app.mount('#pago');
