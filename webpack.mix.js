const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/assets/editor/js', 'public/js')
    .copyDirectory('resources/assets/editor/css', 'public/css')
    // .copyDirectory('resources/assets/bootstrap-select/css', 'public/css')
    .copyDirectory('resources/assets/bootstrap-select/js', 'public/js')
    .sourceMaps();

