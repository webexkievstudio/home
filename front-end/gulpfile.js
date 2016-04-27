"use strict";

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    autoprefixer = require('gulp-autoprefixer'),
    watch = require('gulp-watch'),
    cssmin = require('gulp-cssmin'),
    rename = require('gulp-rename'),
    paths = {
        sass: {
            src: './scss/**/*.scss'
        },
        css: './css'
    };

//sass
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

// Watch
gulp.task('watch', function () {
    gulp.watch(paths.sass.src, ['sass']);
    gulp.src('./css/style.css').pipe(gulp.dest('./'));
});

// default
gulp.task('default', ['sass', 'watch']);
