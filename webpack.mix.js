const mix = require('laravel-mix');

mix.js('resources/js/script.js', 'public/js')
    .postCss('resources/css/style.css', 'public/css', [
        require('tailwindcss'),
    ]);

mix.js('resources/js/app.js', 'public/js')
    .vue();