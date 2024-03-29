"use strict";

let gulp = require("gulp");
let sass = require("gulp-sass");
let uglify = require('gulp-uglify-es').default;
let concat = require("gulp-concat");
let cleanCSS = require("gulp-clean-css");
let autoprefixer = require("gulp-autoprefixer");
let eslint = require("gulp-eslint");

sass.compiler = require("node-sass");

gulp.task("sass", function() {
  return gulp
    .src("./dev/sass/style.scss")
    .pipe(concat("all.min.css"))
    .pipe(sass().on("error", sass.logError))
    .pipe(
      autoprefixer({
        cascade: false
      })
    )
    .pipe(
      cleanCSS({
        compatibility: "ie8"
      })
    )
    .pipe(gulp.dest("./dist/css"));
});

gulp.task("debugJs", function() {
  return gulp
    .src("./dev/js/**/*.js")
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());
});

gulp.task("compressJs", function() {
  return gulp
    .src("./dev/js/**/*.js")
    .pipe(concat("all.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest("./dist/js/"));
});

gulp.task("watch", function() {
  gulp.watch("./dev/sass/**/*.scss", gulp.series("sass"));

  gulp.watch("./dev/js/**/*.js", gulp.series("compressJs"));
});
