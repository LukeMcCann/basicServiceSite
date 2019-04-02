var gulp = require('gulp');

var sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('sass', function() {
    return gulp.src('resources/sass/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/css'))
})

gulp.task('sass:watch', function () {
    gulp.watch('./resources/sass/*.scss', ['sass']);
  });