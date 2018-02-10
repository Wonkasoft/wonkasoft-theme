var gulp = require('gulp'),
sass = require('gulp-sass'),
sourcemaps = require('gulp-sourcemaps'),
jshint = require('gulp-jshint'),
concat = require('gulp-concat'),
path = require('path'),
cleanCSS = require('gulp-clean-css'),
imagemin = require('gulp-imagemin'),
plumber = require('gulp-plumber'),
notify = require('gulp-notify'),
browserSync = require('browser-sync').create(),
fs = require('node-fs'),
fse = require('fs-extra'),
json = require('json-file'),
jsmin = require('gulp-js-minify'),
themeName = json.read('./package.json').get('name'),
siteName = json.read('./package.json').get('siteName'),
themeDir = '../' + themeName,
plumberErrorHandler = { errorHandler: notify.onError({

	title: 'Gulp',

	message: 'Error: <%= error.message %>'

})

};

gulp.task('default', function(){

	console.log('default gulp task...');

});

gulp.task('default', ['sass', 'sass2', 'js', 'imgPress', 'watch', 'browser-sync']);

gulp.task('init', function() {

	fs.mkdirSync(themeDir, 765, true);

	fse.copySync('theme-boilerplate', themeDir + '/');

});

// Static server
gulp.task('browser-sync', function() {
	browserSync.init({
		proxy: 'localhost/' + siteName,
		port: 80
	});
});

gulp.task('sass', function () {

	return gulp.src('./sass/style.scss')

	.pipe(sourcemaps.init())

	.pipe(plumber(plumberErrorHandler))

	.pipe(sass())

	.pipe(cleanCSS())

	.pipe(concat('style.css'))

	.pipe(sourcemaps.write('./maps'))

	.pipe(gulp.dest('./'))

	.pipe(browserSync.stream());

});

gulp.task('sass2', function () {

	return gulp.src('./sass/woocommerce.scss')

	.pipe(sourcemaps.init())

	.pipe(plumber(plumberErrorHandler))

	.pipe(sass())

	.pipe(cleanCSS())

	.pipe(concat('woocommerce.css'))

	.pipe(sourcemaps.write('./maps'))

	.pipe(gulp.dest('./'))

	.pipe(browserSync.stream());

});

gulp.task('js', function () {

	return gulp.src('./js/wonkamizer-js.js')

	.pipe(plumber(plumberErrorHandler))

	.pipe(jshint())

	.pipe(jshint.reporter('fail'))

	.pipe(jsmin())

	.pipe(concat(themeName + '.min.js'))

	.pipe(gulp.dest('./assets/js'))

	.pipe(browserSync.stream());

});

gulp.task('imgPress', function() {

	return gulp.src('./images/*.{png,jpg,jpeg,gif}')

	.pipe(plumber(plumberErrorHandler))

	.pipe(imagemin({

		optimizationLevel: 7,

		progressive: true

	}))

	.pipe(gulp.dest('./assets/img'))

	.pipe(browserSync.stream());

});

gulp.task('watch', function() {

	gulp.watch('**/*.php').on('change', browserSync.reload);

	gulp.watch('./sass/*/*.scss', ['sass', 'sass2']).on('change', browserSync.reload);

	gulp.watch('./sass/*/*/*.scss', ['sass', 'sass2']).on('change', browserSync.reload);

	gulp.watch('./js/*.*', ['js']).on('change', browserSync.reload);

	gulp.watch('./images/*.{png,jpg,gif}', ['imgPress']).on('change', browserSync.reload);

});