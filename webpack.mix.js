const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/

mix.styles([
    'resources/assets/front/css/bootstrap.min.css',
    'resources/assets/front/css/crm.css',
    'resources/assets/front/css/headers.css',
    'resources/assets/front/css/sidebars.css',
    'resources/assets/front/css/sticky-footer.css',

], 'public/css/front.css');

mix.scripts([
    'resources/assets/front/js/bootstrap.bundle.min.js',
    'resources/assets/front/js/sidebars.js',

], 'public/js/front.js');


