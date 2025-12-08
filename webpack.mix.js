const mix = require('laravel-mix');

mix.js('resources/js/spa.js', 'public/js')
    .vue({ version: 3 })
    .sass('resources/sass/app.scss', 'public/css', {}, [
        require('@tailwindcss/postcss'),
        require('autoprefixer'),
    ])
    .version()
    .webpackConfig({
        stats: { children: true },
        watchOptions: {
            ignored: /node_modules|public\/css|public\/js|mix-manifest\.json/,
        },
    });

mix.browserSync({
    proxy: 'http://127.0.0.1:8000/',
    files: [
        'public/js/**/*.js',
        'public/css/**/*.css',
        'resources/views/**/*.php',
    ],
    notify: false,
});
