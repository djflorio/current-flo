var gulp = require('gulp');
var compass = require('gulp-compass');
var livereload = require('gulp-livereload');

gulp.task('default', ['watch']);

gulp.task('compass', function() {
  return gulp.src('sass/**/*.scss')
    .pipe(compass({
      config_file: './config.rb',
      css: '.',
      sass: 'sass'
    }))
    .pipe(gulp.dest('.'))
    .pipe(livereload());
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('sass/**/*.scss', ['compass']);
})