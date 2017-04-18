const elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
    mix.sass('admin.scss')
    
    mix.copy('resources/assets/images', 'public/images')
        .version('public/images');

    mix.copy('resources/assets/css', 'public/css')
        .version('public/css');
});