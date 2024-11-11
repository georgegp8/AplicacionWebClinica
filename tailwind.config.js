import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', 'sans-serif'],
                mono: ['Alex Brush', 'cursive'],
            },
            screens: {
                xl: '1370px', // Cambia el valor de xl a 1400px
                },
        animation: {
            indextratamiento: 'indextratamiento 70s infinite', // Duración total de 20 segundos
            indextratamientoSM: 'indextratamientoSM 70s infinite', // Duración total de 20 segundos
            indexcirugia: 'indexcirugia 70s  infinite 5s', // Duración total de 20 segundos
            indexcirugiaSM: 'indexcirugiaSM 70s  infinite 5s', // Duración total de 20 segundos
            mensaje: 'mensajes 70s infinite 20s',
            },
        keyframes: {
            indextratamiento: {
                '0%, 12.5%': { transform: 'translate(0, 0)' },                  // Pausa en el primer elemento
                '25%, 37.5%': { transform: 'translate(0, -236px)' },            // Pausa en el segundo elemento
                '50%, 62.5%': { transform: 'translate(0, -472px)' },            // Pausa en el tercer elemento
                '75%, 87.5%': { transform: 'translate(0, -708px)' },            // Pausa en el cuarto elemento
                '100%': { transform: 'translate(0, 0)' },                       // Regresa al inicio
            },
            indextratamientoSM: {
                '0%, 12.5%': { transform: 'translate(0, 0)' },                  // Pausa en el primer elemento
                '25%, 37.5%': { transform: 'translate(0, -186px)' },            // Pausa en el segundo elemento
                '50%, 62.5%': { transform: 'translate(0, -372px)' },            // Pausa en el tercer elemento
                '75%, 87.5%': { transform: 'translate(0, -558px)' },            // Pausa en el cuarto elemento
                '100%': { transform: 'translate(0, 0)' },                       // Regresa al inicio
            },
            indexcirugia: {
                '0%, 14.29%': { transform: 'translate(0, 0)', },                // Pausa en el primer elemento (0-8.57s)
                '14.29%, 28.57%': { transform: 'translate(0, -236px)' },      // Pausa en el segundo elemento (8.57-17.14s)
                '28.57%, 42.86%': { transform: 'translate(0, -472px)' },      // Pausa en el tercer elemento (17.14-25.71s)
                '42.86%, 57.14%': { transform: 'translate(0, -708px)' },      // Pausa en el cuarto elemento (25.71-34.29s)
                '57.14%, 71.43%': { transform: 'translate(0, -944px)' },      // Pausa en el quinto elemento (34.29-42.86s)
                '71.43%, 85.71%': { transform: 'translate(0, -1180px)' },     // Pausa en el sexto elemento (42.86-51.43s)
                '85.71%, 100%': { transform: 'translate(0, 0)' },              // Regresa al inicio (51.43-60s)
            },
            indexcirugiaSM: {
                '0%, 14.29%': { transform: 'translate(0, 0)', },                // Pausa en el primer elemento (0-8.57s)
                '14.29%, 28.57%': { transform: 'translate(0, -186px)' },      // Pausa en el segundo elemento (8.57-17.14s)
                '28.57%, 42.86%': { transform: 'translate(0, -372px)' },      // Pausa en el tercer elemento (17.14-25.71s)
                '42.86%, 57.14%': { transform: 'translate(0, -558px)' },      // Pausa en el cuarto elemento (25.71-34.29s)
                '57.14%, 71.43%': { transform: 'translate(0, -744px)' },      // Pausa en el quinto elemento (34.29-42.86s)
                '71.43%, 85.71%': { transform: 'translate(0, -930px)' },     // Pausa en el sexto elemento (42.86-51.43s)
                '85.71%, 100%': { transform: 'translate(0, 0)' },              // Regresa al inicio (51.43-60s)
            },
            
        },
        },
    },

    plugins: [forms],
};
