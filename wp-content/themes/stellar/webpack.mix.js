
let mix = require('laravel-mix');

mix.js('assets/src/js/app.js', 'dist').setPublicPath('dist').sass('assets/src/css/app.scss', 'dist');