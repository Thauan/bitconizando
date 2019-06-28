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

mix.js('resources/js/app.js', 'public/backend_assets/js')
mix.combine(['resources/js/assets/*'], 'public/backend_assets/js/front.js')
    .sass('resources/sass/app.scss', 'public/backend_assets/css');
