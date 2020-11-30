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

mix.styles(['resources/css/app.css','resources/css/bootstrap-datetimepicker.min.css','resources/css/font-face.css','resources/css/theme.css'], 'public/css/app.css')
    .scripts([ 'resources/js/app.js','resources/js/bootstrap.js','resources/js/bootstrap-datetimepicker.js','resources/js/main.js','resources/js/moment.js'],'public/js/app.js')
