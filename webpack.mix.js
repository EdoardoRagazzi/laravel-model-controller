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
    .sass('resources/sass/app.scss', 'public/css');

//PLEASE EDOARDO DON'T FORGET THIS TO YOUR NEXT PROJECT BECAUSE YOU HAVE LOST LITERALLY ONE HOUR OF YOUR TIME TO FIX THE PROBLEM DON'T BE SO IDIOT...THANKS BY FUTURE EDOARDO

//let you have the possibility to use an Url
mix.options({
    processCssUrls: false
});