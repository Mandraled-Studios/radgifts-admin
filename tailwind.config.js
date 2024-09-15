import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/awcodes/filament-curator/resources/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Outfit', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'primary-dark': '#341D66',
                'primary': '#4C3278',
                'primary-light': '#DFDCEB',
                'accent-dark': '#395753',
                'accent': '#88A29F',
                'accent-light': '#BBD2CF',
                'dark-grey': '#2F2F2F'
            }
        },
    },

    plugins: [
                forms, 
                typography, 
                require('@tailwindcss/aspect-ratio'),
             ],
};
