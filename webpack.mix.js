const mix = require('laravel-mix');

// Основная конфигурация Mix
mix.js('resources/js/spa.js', 'public/js')
    .vue() // Если используете Vue
    .sass('resources/sass/app.scss', 'public/css') // Если нужен SCSS
    .version(); // Для кэш-бюстинга в production
