'use strict';

var gulp 		= require('gulp'),
    sass 		= require('gulp-sass');

sass.compiler 	= require('node-sass');

gulp.task('sass', function () {
  	return gulp.src('style/scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('style/css'));
});

gulp.task('sass:watch', function() {
	gulp.watch('style/scss/**/*.scss', gulp.series('sass'));
});

gulp.task('default', gulp.series('sass', 'sass:watch', function(done) {
    // task code here
    done();
}));
