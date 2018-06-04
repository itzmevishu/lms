let mix = require('laravel-mix');

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
/*
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/semantic-ui-css/semantic.min.css','public/css/semantic.min.css')
    .copy('node_modules/semantic-ui-css/semantic.min.js','public/js/semantic.min.js')
    .copy('node_modules/semantic-ui-css/themes','public/css/themes/');

*/


/*
Golgi Images Integration
 */

mix.sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/semantic-ui-css/semantic.min.css','public/css/semantic.min.css')
    .copy('node_modules/semantic-ui-css/semantic.min.js','public/js/semantic.min.js')
    .copy('node_modules/semantic-ui-css/themes','public/css/themes/');


mix.copyDirectory('resources/assets/golgi/images', 'public/images')
    .copyDirectory('resources/assets/golgi/img', 'public/img')
    .copyDirectory('resources/assets/golgi/plugins', 'public/plugins');

mix.copy('resources/assets/golgi/js/jquery-2.1.4.min.js', 'public/js')
    .copy('resources/assets/golgi/js/jquery-ui.min.js', 'public/js')
    .copy('resources/assets/golgi/js/app.js', 'public/js')
    .copyDirectory('resources/assets/golgi/js/customjs', 'public/js/customjs');

mix.copy('resources/assets/golgi/css/main.min.css', 'public/css');