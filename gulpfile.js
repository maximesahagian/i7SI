const elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
    mix.sass('admin.scss')

    mix.copy('resources/assets/images', 'public/images')

    mix.copy('resources/assets/css', 'public/css')

    mix.copy('resources/assets/favicon', 'public/favicon')

    mix.copy('resources/assets/fonts', 'public/fonts')
    mix.copy('resources/assets/js', 'public/js')
});