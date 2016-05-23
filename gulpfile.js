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
    /**
     * front sass mix
     */
    mix.sass('app.scss');
    mix.sass('3- layouts/front/style.sass','resources/assets/sass/3- layouts/front/style.css');

    mix.styles([
        '../bower/bootswatch-dist/css/bootstrap.min.css',
        '../bower/jquery.jscrollpane/jquery.jscrollpane.css',
        '../bower/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css',
        '../sass/3- layouts/front/style.css',
        '../sass/2- modules/jumbo.css',
        '../sass/2- modules/sticky_footer.css'
    ]);

    mix.copy('resources/assets/bower/bootstrap-sass/assets/fonts/bootstrap/','public/fonts');

    mix.scripts([
        '../bower/jquery/dist/jquery.js',
        '../bower/jquery-ui/jquery-ui.min.js',
        '../bower/jquery-mousewheel/jquery.mousewheel.js',
        '../bower/jquery.jscrollpane/mwheelIntent.js',
        '../bower/jquery.jscrollpane/jquery.jscrollpane.min.js',
        '../bower/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        '../bower/bootstrap-switch/dist/js/bootstrap-switch.min.js',
        'main.js'
    ]);

    mix.version(['public/css/all.css', 'public/js/all.js']);
});
