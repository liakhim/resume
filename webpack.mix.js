const mix = require('laravel-mix');

mix.js('resources/js/spa.js', 'public/js')
    .vue() // Если используете Vue
    .sass('resources/sass/app.scss', 'public/css') // Если нужен SCSS
    .version(); // Для кэш-бюстинга в production

// Автообновление через Browsersync
mix.browserSync({
    proxy: 'http://127.0.0.1:8000/', // URL вашего локального Laravel-приложения
    files: [
        'public/js/**/*.js',
        'public/css/**/*.css',
        'resources/views/**/*.php', // Следим за Blade-шаблонами
    ],
    notify: false,
});
