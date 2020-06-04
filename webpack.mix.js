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


mix.autoload({
        jquery: ['$', 'window.jQuery']
    })
    .js('resources/index.js', 'public/assets/js/app.js')
    .options({
        postCss: [
            require('autoprefixer')({
                browsers: ['last 4 versions'],
                grid: true
            }),
        ]
    })
    .sass('resources/assets/scss/main.scss', 'public/assets/css/styles.css')
    .options({
        processCssUrls: false
    })
    .copyDirectory('resources/assets/img', 'public/assets/img')
    .copyDirectory('resources/assets/svg', 'public/assets/svg')
    .copyDirectory('resources/assets/fonts', 'public/assets/fonts')
    .version();


