var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass([
        'app.scss',
        '../js/crevasse/dependencies/solarized-light.css',
        '../js/crevasse/lib/css/crevasse.css'
    ]);

    mix.scripts([
        '../bower_components/jquery/dist/jquery.js',
        '../bower_components/foundation/js/vendor/fastclick.js',
        '../bower_components/foundation/js/vendor/jquery.cookie.js',
        '../bower_components/foundation/js/vendor/placeholder.js',
        '../bower_components/foundation/js/foundation.min.js',
        'crevasse/dependencies/jquery.caret.js',
        'crevasse/dependencies/jquery.scrollTo.min.js',
        'crevasse/dependencies/marked.js',
        'crevasse/dependencies/rainbow-custom.min.js',
        'crevasse/lib/js/crevasse.js',
        'app.js'
    ]).scripts([
        '../bower_components/foundation/js/vendor/modernizr.js'
    ],'public/js/modernizr.js');
});
