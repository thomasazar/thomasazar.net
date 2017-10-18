var gulp        = require('gulp');
var browsersync = require('browser-sync');
var concat      = require('gulp-concat');
var config      = require('../../config');

/**
* Run JavaScript through gulp-concat
*/

gulp.task('scripts', function(callback) {
  browsersync.notify('Compiling JavaScript');

  return gulp.src(config.scripts.src)
    .pipe(concat(config.scripts.outfile))
    .pipe(gulp.dest(config.scripts.dest));
});
