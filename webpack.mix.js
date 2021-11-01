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

mix.styles([
    'resources/elaadmin/css/normalize.min.css',
    'resources/elaadmin/css/bootstrap.min.css',
    'resources/elaadmin/css/font-awesome.min.css',
    'resources/elaadmin/css/themify-icons.css',
    'resources/elaadmin/css/pe-icon-7-stroke.min.css',
    'resources/elaadmin/css/flag-icon.min.css',
    'resources/elaadmin/css/cs-skin-elastic.css',
    'resources/elaadmin/css/style.css',

    ], 'public/css/app.css' ).scripts([
    'resources/elaadmin/js/jquery.min.js',
    'resources/elaadmin/js/popper.min.js',
    'resources/elaadmin/js/bootstrap.min.js',
    'resources/elaadmin/js/jquery.matchHeight.min.js',
    'resources/elaadmin/js/main.js',
    ], 'public/js/app.js');