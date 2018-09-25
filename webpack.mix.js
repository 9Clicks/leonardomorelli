const mix = require('laravel-mix');

mix.sass('resources/sass/main_style.sass', 'public/css/').version();

mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css/').version();

mix.js('node_modules/jquery/dist/jquery.js', 'public/js/Jquery_3.2.js')
    .js('node_modules/lightbox2/dist/js/lightbox.js', 'public/js/lightbox.js')
    .js('node_modules/bootstrap/dist/js/bootstrap.js', 'public/js/bootstrap.js')
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js/bundle.js')
    .js('node_modules/popper.js/dist/popper.js', 'public/js/popper.js')

mix.styles('node_modules/lightbox2/dist/css/lightbox.css', 'public/css/ligtbox.css')

mix.styles('resources/icons/style.css', 'public/icones/app.css')

mix.copyDirectory('resources/icons/fonts', 'public/icones/fonts');

mix.copyDirectory('node_modules/lightbox2/dist/images', 'public/images');