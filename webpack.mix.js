const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/script.js', 'public/js')
    .sass('resources/sass/main/app.sass', 'public/css')

    .js('resources/js/project_3/script.js', 'public/assets/project_3/js')
    .sass('resources/sass/project_3/style.sass', 'public/assets/project_3/css')

    .js('resources/js/project_4/script.js', 'public/assets/project_4/js')
    .sass('resources/sass/project_4/style.sass', 'public/assets/project_4/css')

    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync('http://127.0.0.1:8000/');
