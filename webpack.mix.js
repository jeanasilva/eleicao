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
    .css('node_modules/startbootstrap-sb-admin-2/css/sb-admin-2.min.css', 'public/css')
    .css('node_modules/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css', 'public/css')

    .js('node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js', 'public/js')
    .js('node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js', 'public/js')
    .js('node_modules/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js', 'public/js')
    .js('node_modules/startbootstrap-sb-admin-2/js/sb-admin-2.js', 'public/js')

    .js('node_modules/startbootstrap-sb-admin-2/vendor/datatables/jquery.dataTables.min.js', 'public/js')
    .js('node_modules/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js', 'public/js')
    .js('node_modules/startbootstrap-sb-admin-2/js/demo/datatables-demo.js', 'public/js')
    .version();

