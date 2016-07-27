var elixir = require('laravel-elixir');
require('laravel-elixir-stylus');

elixir.config.sourcemaps = false;

/**
 * Dashboard vendor dependencies.
 */
elixir(function(mix) {
    var vendor_path = 'resources/assets/vendor/';

    /**
     * Main js files without css dependencies.
     */
    mix.scripts([
        'bower_components/jquery/dist/jquery.js',
        'bower_components/randomcolor/randomColor.js',
        'bower_components/isotope/dist/isotope.pkgd.js',

    ], './public/assets/js/admin/lib.js', vendor_path);

    /**
     * JavaScript bootstrap set.
     */
    mix.scripts([
        // http://getbootstrap.com/getting-started/#support-ie10-width
        'ie10-viewport-bug-workaround.js',

        'bower_components/bootstrap/dist/js/bootstrap.js',

        'bower_components/bootstrap-material-design/dist/js/material.js',
        'bower_components/bootstrap-material-design/dist/js/ripples.js',

        'bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.js',

    ], './public/assets/js/admin/bootstrap-pkg.js', vendor_path);

    /**
     * CSS bootstrap set.
     */
    mix.styles([
        // http://getbootstrap.com/getting-started/#support-ie10-width
        'ie10-viewport-bug-workaround.css',

        'bower_components/bootstrap/dist/css/bootstrap.css',

        'bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.css',
        'bower_components/bootstrap-material-design/dist/css/ripples.css',

    ], './public/assets/css/admin/bootstrap-pkg.css', vendor_path);
});

/**
 * Application vendor dependencies.
 */
elixir(function(mix) {
    var vendor_path = 'resources/assets/vendor/';

    /**
     * Main js files without css dependencies.
     */
    mix.scripts([
        'bower_components/jquery/dist/jquery.js',

    ], './public/assets/js/app/lib.js', vendor_path);

    /**
     * JavaScript bootstrap set.
     */
    mix.scripts([
        // http://getbootstrap.com/getting-started/#support-ie10-width
        'ie10-viewport-bug-workaround.js',

        'bower_components/bootstrap/dist/js/bootstrap.js',

    ], './public/assets/js/app/bootstrap-pkg.js', vendor_path);

    /**
     * CSS bootstrap set.
     */
    mix.styles([
        // http://getbootstrap.com/getting-started/#support-ie10-width
        'ie10-viewport-bug-workaround.css',

        'bower_components/bootstrap/dist/css/bootstrap.css',

    ], './public/assets/css/app/bootstrap-pkg.css', vendor_path);
});

/**
 * Stylus preproc
 */
elixir(function(mix) {
    mix.stylus([
        'admin/**/*.styl',
    ], './public/assets/css/admin/app.css');

    mix.stylus([
        'app/**/*.styl',
    ], './public/assets/css/app/app.css');
});

/**
 * Coffee compil
 */
elixir(function(mix) {
    mix.coffee([
        'admin/**/*.coffee',
    ], './public/assets/js/admin/app.js');

    mix.coffee([
        'app/**/*.coffee',
    ], './public/assets/js/app/app.js');
});

/**
 * Versioning
 */
elixir(function(mix) {
    mix.version('assets/**/*.+(css|js)');
});


/**
 * Copying images
 */
elixir(function(mix) {
    mix.copy('resources/assets/images', 'public/assets/img');
});

/**
 * Copying fonts
 */
elixir(function(mix) {
    mix.copy('resources/assets/fonts', 'public/assets/fonts');
});
