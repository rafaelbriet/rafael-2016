/**************************************************
* Required plugins
**************************************************/
var gulp = require('gulp'),
    // Styles
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    // Scripts
    eslint = require('gulp-eslint'),
    // BrowserSync
    browserSync = require('browser-sync').create(),
    // Utilities
    del = require('del'),
    rename = require('gulp-rename');

/**************************************************
* Styles task
**************************************************/
gulp.task('styles', function() {
    gulp.src('assets/styles/style.scss')
        .pipe(sourcemaps.init())
            .pipe(sass({
                output: 'expanded',
            }).on('Error', sass.logError))
            .pipe(autoprefixer({
                browsers: ['last 4 versions'],
            }))
        .pipe(sourcemaps.write('/'))
        .pipe(gulp.dest('./'));
        //.pipe(browserSync.stream());
});

/**************************************************
* Scripts task
**************************************************/
gulp.task('scripts', function() {
    return gulp.src('assets/scripts/**/*.js')
        .pipe(eslint())
        .pipe(eslint.format());
        // .pipe(browserSync.stream());
});

/**************************************************
* Watch task
**************************************************/
gulp.task('watch', function() {
    //gulp.watch('*.html').on('change', browserSync.reload);
    //gulp.watch('**/*.php').on('change', browserSync.reload);
    gulp.watch('assets/styles/**/*.scss', ['styles']);
    gulp.watch('assets/scripts/**/*.js', ['scripts']);
});

/**************************************************
* BrowserSync task

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'http://rafaelbriet.dev/'
    });
});
**************************************************/

/**************************************************
* Default task
**************************************************/
gulp.task('default', ['styles', 'scripts', 'watch']);
