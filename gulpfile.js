var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

var Task = elixir.Task;

var paths = {
    "assets": "./resources/assets/",
    "public": "./public/",
    "vendor": "./resources/assets/vendor/",
    "scripts": "./resources/assets/scripts/"
};

elixir.extend('speak', function(message){
    new Task('speak', function(){
        return gulp.src('').pipe(shell('say ' + message));
    });
});

gulp.task('hello', function(){
    console.log('First Gulp Task');
});

elixir(function(mix) {
    mix
        .copy(paths.vendor + 'font-awesome/fonts/**', paths.public + 'fonts')
        .copy(paths.vendor + 'formwizard/MDB/font/**', paths.public + 'font/')
        .sass('app.scss')
        .scripts([
            paths.vendor + 'formwizard/MDB/js/jquery-2.2.3.js',
            paths.vendor + 'lodash/lodash.js',
            paths.vendor + 'moment/moment.js',
            paths.vendor + 'numeral/numeral.js',
            paths.vendor + 'formwizard/MDB/js/tether.js',
            paths.vendor + 'formwizard/MDB/js/bootstrap.js',
            paths.vendor + 'formwizard/MDB/js/mdb.js',
            paths.vendor + 'toastr/toastr.js',
            paths.vendor + 'Chart.js/dist/Chart.js',
            paths.vendor + 'formwizard/plugins/Modaal/dist/js/modaal.js',
            paths.vendor + 'jquery.marquee/jquery.marquee.js'
        ], 'public/js/app.js')
        //.browserify('main.js')
        // .speak('It is 5 o clock.')
        // .speak('GP is 45 thousand')
        .speak('Gulp')
        .speak('complete');
});
