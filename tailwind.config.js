const defaultTheme = require('tailwindcss/defaultTheme');
const flowbitePlugin = require('flowbite/plugin');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: true, // ❌ Desactiva el modo oscuro completamente
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'),flowbitePlugin],
};
