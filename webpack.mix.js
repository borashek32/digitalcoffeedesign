const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/script.js', 'public/js')
    .sass('resources/sass/main/app.sass', 'public/css')

// PROJECTS
    .js('resources/js/projects/project_3/script.js', 'public/assets/projects/project_3/js')
    .sass('resources/sass/projects/project_3/style.sass', 'public/assets/projects/project_3/css')

    .js('resources/js/projects/project_4/script.js', 'public/assets/projects/project_4/js')
    .sass('resources/sass/projects/project_4/style.sass', 'public/assets/projects/project_4/css')

    .sass('resources/sass/projects/project_5/style.sass', 'public/assets/projects/project_5/css')

    .js('resources/js/projects/project_6/script.js', 'public/assets/projects/project_6/js')
    .sass('resources/sass/projects/project_6/style.sass', 'public/assets/projects/project_6/css')

    .js('resources/js/projects/project_7/script.js', 'public/assets/projects/project_7/js')
    .sass('resources/sass/projects/project_7/style.sass', 'public/assets/projects/project_7/css')

// ELEMENTS
    .sass('resources/sass/elements/element_1/style.sass', 'public/assets/elements/element_1/css')

    .js('resources/js/elements/element_2/script.js', 'public/assets/elements/element_2/js')
    .sass('resources/sass/elements/element_2/style.sass', 'public/assets/elements/element_2/css')


    .sass('resources/sass/elements/element_3/style.sass', 'public/assets/elements/element_3/css')

.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync('http://127.0.0.1:8000/');
