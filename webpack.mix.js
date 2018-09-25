const mix = require('laravel-mix');

mix.sass('resources/sass/main_style.sass', 'public/css/').version();

mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css/').version();

mix.js('node_modules/jquery/dist/jquery.js', 'public/js/Jquery_3.2.js')
    .js('node_modules/lightbox2/dist/js/lightbox.js', 'public/js/lightbox.js')

mix.styles('node_modules/lightbox2/dist/css/lightbox.css', 'public/css/ligtbox.css')

mix.styles('resources/icons/style.css', 'public/css/icones.css')

mix.copyDirectory('resources/icons/fonts', 'public/fonts');

mix.copyDirectory('node_modules/lightbox2/dist/images', 'public/images');