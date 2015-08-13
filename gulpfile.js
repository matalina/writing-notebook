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
        'app.scss'
    ]);

    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        '../../../node_modules/fastclick/lib/fastclick.js',
        '../../../node_modules/jquery.cookie/jquery.cookie.js',
        '../../../node_modules/jquery-placeholder/jquery.placeholder.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.abide.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.accordion.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.alert.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.clearing.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.dropdown.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.equalizer.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.interchange.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.joyride.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.magellan.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.offcanvas.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.orbit.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.reveal.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.slider.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.tab.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.tooltip.js',
        '../../../node_modules/zurb-foundation-5/js/foundation/foundation.topbar.js',
        'crevasse/dependencies/jquery.caret.js',
        'crevasse/dependencies/jquery.scrollTo.min.js',
        'crevasse/dependencies/marked.js',
        'crevasse/dependencies/rainbow-custom.min.js',
        'crevasse/lib/js/crevasse.js',
        'app.js'
    ]).scripts([
        '../../../node_modules/modernizr/modernizr.js'
    ],'modernizr.js');
});
