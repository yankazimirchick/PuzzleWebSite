'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var pipeline = require('readable-stream').pipeline;



gulp.task('minify-css', () => {
    return gulp.src('assets/css/*.css')
        .pipe(cleanCSS({
            debug: true
        }, (details) => {
            console.log(`${details.name}: ${details.stats.originalSize}`);
            console.log(`${details.name}: ${details.stats.minifiedSize}`);
        }))
        .pipe(gulp.dest('assets/dist'));
})

function style() {
    return gulp.src('assets/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS({
            debug: true
        }, (details) => {
            console.log(`${details.name}: ${details.stats.originalSize}`);
            console.log(`${details.name}: ${details.stats.minifiedSize}`);
        }))
        .pipe(gulp.dest('assets/dist'));
}

gulp.task('compress', function () {
    return pipeline(
        gulp.src('assets/js/*.js'),
        uglify(),
        gulp.dest('assets/dist')
    );
});





exports.style = style;