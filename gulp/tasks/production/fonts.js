var gulp        = require('gulp');
var changed     = require('gulp-changed');
var config      = require('../../config').fonts.production;

/**
 * Copy images to build folder
 * if not changed
 */
gulp.task('fonts', function() {
  return gulp.src(config.src)
    .pipe(changed(config.dest)) // Ignore unchanged files
    .pipe(gulp.dest(config.dest));
});
