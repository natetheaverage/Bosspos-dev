var elixir = require('laravel-elixir');
var gulp = require('gulp');
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.browserify('app.js');
    mix.less('nifty.less');
    mix.less('app.less');
    mix.styles([
        'css/nifty.css',
        'css/app.css'
    ], 'public/css/final.css', 'public');

    mix.version('public/css/final.css')

});



/*
gulp.task('browserify', function(){
    return browserify('./public/js/app.js')
    .transform(babelify, { stage: 0 })
    .bundle()
    .pipe(source('bundle.js'))
    .pipe(gulp.dest('public/js'));

});

gulp.task('watch', function(){
    gulp.watch('public/js/*.js', ['browserify']);
    gulp.watch('public/js/react/*.js', ['browserify']);

});
*/
