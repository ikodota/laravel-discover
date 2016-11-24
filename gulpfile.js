const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js');
});
/*
elixir((mix) => {
 mix.sass('vendor/adminlte/src/scss/custom.scss','vendor/adminlte/build/css/custom.scss')
 .webpack('vendor/adminlte/src/js/custom.js','vendor/adminlte/build/js/custom.min.js');
});*/


/*
elixir((mix) => {
 mix.copy('vendor/almasaeed2010/adminlte/bootstrap/','public/vendor/adminlte/bootstrap')
    .copy('vendor/almasaeed2010/adminlte/dist/','public/vendor/adminlte/dist')
    .copy('vendor/almasaeed2010/adminlte/plugins/','public/vendor/adminlte/plugins');
});
*/
