// List dependences

const {src, dest, watch, series} = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const prefix = require('gulp-autoprefixer')
const minify = require('gulp-clean-css')
const rename = require('gulp-rename');
const terser = require('gulp-terser')

// Create functions

// scss
function compileScss() {
  return src('dev/sass/main.scss')
    .pipe(sass())
    .pipe(prefix('last 2 versions'))
    .pipe(dest('assets/css'))
    .pipe(minify())
    .pipe(rename({ extname: '.min.css' }))
    .pipe(dest('assets/css'))
}

// js
function compileJs() {
  return src('dev/js/script.js')
    .pipe(terser())
    .pipe(rename({ extname: '.min.js' }))
    .pipe(dest('assets/js')) 
}

// Create watchtask
function watchTask() {
  watch('dev/sass/main.scss', compileScss)
  watch('dev/js/script.js', compileJs)
}



// Default Gulp
exports.default = series(
  compileScss,
  compileJs,
  watchTask
)

  //git ignore NODE_MODULES