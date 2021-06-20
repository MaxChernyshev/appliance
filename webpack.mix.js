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
    .sourceMaps();

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/bootstrap-icons.min.css',
    'public/css/app.css'
],
    'public/css/main.css'
)


// ***** ADMIN PANEL *****

// mix.js([
//         'resources/assets/admin/plugins/jquery/jquery.js',
//         'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.js',
//         'resources/assets/admin/js/adminlte.js', // ***
//         'resources/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.js',
//         'resources/assets/admin/js/demo.js',
//     ], 'public/assets/admin/js/admin.min.js',
// ).sourceMaps();
//
// mix.styles([
//         'resources/assets/admin/plugins/fontawesome-free/css/all.css',
//         'resources/assets/admin/css/admin_custom.css',
//         'resources/assets/admin/css/adminlte.css',
//
//     ], 'public/assets/admin/css/admin.min.css',
// ).sourceMaps();

// ***** END ADMIN PANEL *****
