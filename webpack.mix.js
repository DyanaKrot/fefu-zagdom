const mix = require('laravel-mix');
const { resolve } = require('path');
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

mix.setPublicPath('public')
    .js('resources/scripts/main.js', 'build/bundle.js')
    .sass('resources/styles/main.scss', 'build/bundle.css', {}, [
        require('postcss-axis')
    ])
    .browserSync({proxy: 'localhost',
                  files: ['resources/**/*'],
    });

mix.alias({'uikit-util': resolve(__dirname, 'node_modules/uikit/src/js/util')});
