const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/typewriter.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        postCss: [
            require('postcss-cssnext')
        ]
    })
    .sourceMaps()
    .copy('resources/assets/img/skills','public/images/skills')
    .copy('resources/assets/img/projects','public/images/projects');
