let mix = require('laravel-mix');

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

mix.scripts([
    'resources/assets/js/jquery.js',
    'resources/assets/js/bootstrap.min.js',

    'resources/assets/js/bootstrap-timepicker.min.js',
    'resources/assets/js/bootstrap-datepicker.js',
    'resources/assets/js/icheck.js',

    'resources/assets/js/select2.full.js',
    //'resources/assets/js/vue.js',
    //'resources/assets/js/pace.js',
    //'resources/assets/js/axios.js',
    'resources/assets/js/adminlte.js',
    'resources/assets/js/app.js',
], 'public/js/app.js').styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/ionicons.css',
    'resources/assets/css/orange.css',
    'resources/assets/css/bootstrap-timepicker.min.css',
    'resources/assets/css/select2.min.css',
    'resources/assets/css/AdminLTE.min.css',
    'resources/assets/css/skin-blue.css',
    'resources/assets/css/app.css',
    //'resources/assets/css/fullcalendar.css',
], 'public/css/app.css').sourceMaps()
    .version();
;
