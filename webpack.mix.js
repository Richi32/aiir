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

    // untuk css
mix.styles([
'public/adminlte/plugins/fontawesome-free/css/all.min.css',
'public/adminlte/dist/css/adminlte.min.css',
'public/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
'public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
'public/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
'public/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
],'public/css/template.css').version();

    // untuk js
mix.scripts([
// 'public/adminlte/plugins/jquery/jquery.min.js',
'public/adminlte/plugins/jquery-ui/jquery-ui.min.js',
'public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
'public/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
'public/adminlte/dist/js/adminlte.js',
'public/adminlte/plugins/datatables/jquery.dataTables.min.js',
'public/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
'public/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js',
'public/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
'public/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js',
'public/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
'public/adminlte/plugins/jszip/jszip.min.js',
'public/adminlte/plugins/pdfmake/pdfmake.min.js',
'public/adminlte/plugins/pdfmake/vfs_fonts.js',
'public/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js',
'public/adminlte/plugins/datatables-buttons/js/buttons.print.min.js',
'public/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js',
],'public/js/template.js').version();
