import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';  // Importar el plugin de Vue
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js', // Asegúrate de que app.js esté presente
            ],
            refresh: true,
        }),
        vue()  // Usar el plugin de Vue
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),  // Alias para simplificar las rutas
        },
    },
    server: {
        proxy: {
            '/app': 'http://localhost',  // Configurar proxy si es necesario
        }
    }
});
