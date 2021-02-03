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

mix.styles(['resources/bulma/css/bulma.min.css',
'resources/font-awesome/css/all.min.css',
'resources/font-awesome/css/poppins.css'

],'public/css/app.css')

.scripts([
    'resources/font-awesome/js/all.min.js',
    'resources/font-awesome/js/jquery.min.js',
    'resources/font-awesome/js/popper.js'
],'public/js/app.js')
