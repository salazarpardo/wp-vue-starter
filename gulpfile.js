var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var cleanCSS = require('gulp-clean-css');


var sassFiles = './css/src/*.scss';

gulp.task('css', function () {
    gulp.src(sassFiles)
        .pipe(sourcemaps.init())
        .pipe(sass({
          includePaths: ["./node_modules/bootstrap/scss"],
        })
        .on('error', sass.logError))
        //.pipe(cleanCSS())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./css/dist'));
});

gulp.task('js', function () {
  gulp.src([
    './node_modules/axios/dist/axios.min.js',
    './node_modules/vue/dist/vue.min.js',
    './node_modules/vue-router/dist/vue-router.min.js',
    './node_modules/babel-polyfill/dist/polyfill.min.js',
    './node_modules/bootstrap-vue/dist/bootstrap-vue.js',
  ])
  .pipe(gulp.dest('./js/dist'))
});


//run gulp and tasks in 2nd param runs
gulp.task('default', ['css', 'js']);

//run gulp watch - and automatically runs task in 2nd param:
gulp.task('watch',function() {
    gulp.watch(sassFiles,['css', 'js']);
});
