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

//Adminator
mix.js('resources/js/adminator/index.js', 'public/js/adminator.js')
    .sass('resources/sass/adminator/index.scss', 'public/css/adminator.css')
    .copyDirectory('resources/static/images', 'public/images');

//Laravel Default
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue', '.json'],
        alias: {
            'vue$': 'vue/dist/vue.esm.js',
            '@': __dirname + '/resources/js',
            '@comp': __dirname + '/resources/js/components',
        },
    },
});
