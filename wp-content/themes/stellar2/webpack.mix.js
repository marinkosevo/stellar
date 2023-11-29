let mix = require('laravel-mix');

let cssOptions = {
    postCss: [
        require('tailwindcss'),
        require('postcss-nested')
    ],
    processCssUrls: false
}
mix.js('./assets/src/js/app.js', 'dist').setPublicPath('dist').sass('./assets/src/css/app.scss', 'dist').options(cssOptions);