var gulp = require('gulp');
var sass =  require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
gulp.src('app/assets/scss/style.scss')
	.pipe(sass())
	.pipe(gulp.dest('public/css/style.min.css'));
});

gulp.task('watch', function() {
	gulp.watch('app/assets/scss/style.scss', ['public/css/style.min.css']);
//	sass --watch scss/style.scss:css/style.min.css --style compressed
//	gulp.watch('app/assets/scss/**/*.scss', ['css']);

});

gulp.task('default', ['watch']);