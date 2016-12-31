const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2')


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('./node_modules/bulma/bulma.sass')
       .sass('app.sass')
       .sass('login.sass')
       .webpack('app/main.js')
       .webpack('general/utils.js')
       .browserSync({
        proxy: 'local.dev'
       });
});
