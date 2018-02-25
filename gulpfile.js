const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber');
const concat = require('gulp-concat');
const csscomb = require('gulp-csscomb');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const babel = require("gulp-babel");

const root = {
	src: './src/',
	dist: './app/public/',
	common: './app/public/common/',
	wp: './app/public/wp/wp-content/themes/yama3da210/common/'
};



// gulp.task('pug', () => {
//   return gulp.src(root.src + 'pug/**/*.pug')
//   .pipe(plumber())
//   .pipe(pug({
//     pretty: true
//   }))
//   .pipe(gulp.dest(root.dist));
// });

gulp.task('sass', () => {
	return gulp.src(root.src + 'scss/**/*.scss')
		.pipe(plumber({
			handleError: (err) => {
				console.log(err);
				this.emit('end');
			}
		}))
		.pipe(sass({
			style : 'expanded'
		}))
		.pipe(csscomb())
		.pipe(postcss([
			require('autoprefixer')({
				browsers: ['last 2 versions','ff ESR','ie 9']
			}),
			require('css-mqpacker')
		]))
		.pipe(gulp.dest(root.common + 'css/'))
});

gulp.task('cjs', () => {
	return gulp.src(root.src + 'js/common/*.js')
	.pipe(plumber({
		handleError: (err) => {
			console.log(err);
			this.emit('end');
		}
	}))
	.pipe(babel())
	.pipe(concat('common.js'))
	// .pipe(uglify())
	.pipe(gulp.dest(root.common + 'js/'))
});

gulp.task('js', () => {
	return gulp.src([root.src + 'js/**/*.js', '!src/js/common/*.js', '!src/js/plugins/*.js'])
	.pipe(plumber({
		handleError: (err) => {
			console.log(err);
			this.emit('end');
		}
	}))
	.pipe(babel())
	// .pipe(uglify())
	.pipe(gulp.dest(root.common + 'js/'))
});



gulp.task('default', ['sass', 'cjs', 'js']);

gulp.task('w', () => {
	gulp.watch(root.src + 'scss/**/*.scss', ['sass'])
	gulp.watch([root.src + 'js/**/*.js', '!src/js/plugins/*.js'], ['cjs', 'js'])
});

gulp.task('p', () => {
	gulp.src(root.src + 'js/plugins/*.js')
		.pipe(concat('plugins.js'))
		.pipe(plumber({
			handleError: (err) => {
				console.log(err);
				this.emit('end');
			}
		}))
		.pipe(uglify())
		.pipe(gulp.dest(root.common + 'js/'));
});
