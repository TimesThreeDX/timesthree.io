var gulp = require('gulp');

var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssnano = require('gulp-cssnano');

var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var input = 'css/main.scss';
var output = 'css';

var jsInput = ['js/plugins.js','js/**/*.js','!js/**/*.min.js'];
var jsOutput = 'js';

// this requires imagemin - problem installing on 10.7.5
// var imgInput = 'dev/img/**/*.+(png|jpg|gif|svg)';
// var imgOutput = 'public/img';

var supported = [
    'last 2 versions',
    'safari >= 8',
    'ie >= 9',
    'ff >= 20',
    'ios 6',
    'android 4'
];

gulp.task('sass', function(){
  return gulp.src(input)
    .pipe(sass(sassOptions).on('error', sass.logError))
    // .pipe(autoprefixer())
    .pipe(cssnano({
            autoprefixer: {browsers: supported, add: true}
        }))
    .pipe(gulp.dest(output))
});

gulp.task('js', function () {
   return gulp.src(jsInput)
      .pipe(jshint())
      .pipe(jshint.reporter('default'))
      .pipe(uglify())
      .pipe(concat('main.min.js'))
      .pipe(gulp.dest(jsOutput));
});

// gulp.task('default', function() {
//     gulp.watch(input, ['sass']);
//     gulp.watch(jsInput, ['js']);
//     gulp.on('change', function(event) {
//       console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
//     });
// });

gulp.task('default', function() {
    gulp.watch(input, gulp.series('sass'));
    gulp.watch(jsInput, gulp.series('js'));
    gulp.on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});

// gulp.task('watch', function() {
//   gulp.watch('app/css/*.css', gulp.series('styles'));
//   gulp.watch('app/js/*.js', gulp.series('scripts'));
//   gulp.watch('app/img/*', gulp.series('images'));
// });