const path = require('path');
const elixir = require('laravel-elixir');
require('laravel-elixir-stylus');

elixir.config.sourcemaps = true;

var vendor_path = 'resources/assets/vendor/';
var bower_components = path.join(vendor_path, 'bower_components');

/**
 * Dashboard vendor dependencies.
 */
elixir(function(mix) {
    /**
     * Main js files without css dependencies.
     */
    mix.scripts([
        'jquery/dist/jquery.js',

    ], './public/assets/js/admin/lib.js', bower_components);

    /**
     * JavaScript bootstrap set.
     */
    mix.scripts([
        // http://getbootstrap.com/getting-started/#support-ie10-width
        '../ie10-viewport-bug-workaround.js',

        'bootstrap/dist/js/bootstrap.js',

        'bootstrap-material-design/dist/js/material.js',
        'bootstrap-material-design/dist/js/ripples.js',

        'remarkable-bootstrap-notify/dist/bootstrap-notify.js',

    ], './public/assets/js/admin/bootstrap-pkg.js', bower_components);

    mix.scripts([
        'selectize/dist/js/standalone/selectize.js',

    ], './public/assets/js/admin/selectize.js', bower_components);

    /**
     * CSS bootstrap set.
     */
    mix.styles([
        // http://getbootstrap.com/getting-started/#support-ie10-width
        '../ie10-viewport-bug-workaround.css',

        'bootstrap/dist/css/bootstrap.css',

        'bootstrap-material-design/dist/css/bootstrap-material-design.css',
        'bootstrap-material-design/dist/css/ripples.css',

    ], './public/assets/css/admin/bootstrap-pkg.css', bower_components);
});

/**
 * Application vendor dependencies.
 */
elixir(function(mix) {
    /**
     * Main js files without css dependencies.
     */
    mix.scripts([
        'jquery/dist/jquery.js',

    ], './public/assets/js/app/lib.js', bower_components);

    /**
     * JavaScript bootstrap set.
     */
    mix.scripts([
        // http://getbootstrap.com/getting-started/#support-ie10-width
        '../ie10-viewport-bug-workaround.js',

        'bootstrap/dist/js/bootstrap.js',

    ], './public/assets/js/app/bootstrap-pkg.js', bower_components);

    /**
     * CSS bootstrap set.
     */
    mix.styles([
        // http://getbootstrap.com/getting-started/#support-ie10-width
        '../ie10-viewport-bug-workaround.css',

        'bootstrap/dist/css/bootstrap.css',

    ], './public/assets/css/app/bootstrap-pkg.css', bower_components);
});

/**
 * Stylus preproc
 */
elixir(function(mix) {
    mix.stylus([
        'admin/admin.styl',
    ], './public/assets/css/admin/app.css');

    mix.stylus([
        'app/app.styl',
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
