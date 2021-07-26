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

//Javascript for Guest Homepage
mix.js('resources/js/restaurants.js', 'public/js')

//Javascript for Dish Page
mix.js('resources/js/dish.js', 'public/js')

//Javascript for Payment Page
mix.js('resources/js/payment.js', 'public/js')

//Javascript for Success Page
mix.js('resources/js/success.js', 'public/js')

//Javascript for chart js
mix.js('resources/js/custom.js', 'public/js')