"use strict";

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    autoprefixer = require('gulp-autoprefixer'),
    watch = require('gulp-watch'),
    cssmin = require('gulp-cssmin'),
    rename = require('gulp-rename'),
    cssbeautify = require('gulp-cssbeautify'),
    rebase = require('gulp-css-url-rebase'),
    paths = {
        sass: {
            src: './scss/**/*.scss'
        },
        css: './css'
    };

//SASS
gulp.task('sass', function () {
    gulp.src(paths.sass.src)
        .pipe(watch(paths.sass.src))
        .pipe(plumber())
        .pipe(sass({
            includePaths: [
         'node_modules/breakpoint-sass/stylesheets'
     ]
        }))
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(plumber.stop())
        .pipe(gulp.dest(paths.css));
});

// Minify CSS
gulp.task('css-min', function () {
    gulp.src('./css/*.css')
        .pipe(plumber())
        .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(plumber.stop())
        .pipe(gulp.dest('./css/min'));
});

 // Rebase CSS URL
gulp.task('css-reb', function () {
  gulp.src('./css/style.css')
    .pipe(rebase())
     .pipe(gulp.dest('./'));
});

// Watch
gulp.task('watch', function () {
    gulp.watch(paths.sass.src, ['sass']);
    gulp.src('./css/style.css').pipe(gulp.dest('./'));
});

// Default
gulp.task('default', ['sass', 'watch']);
