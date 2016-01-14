var gulp         = require('gulp');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('styles', function() {
  gulp.src('_scss/main.scss')
    .pipe(sass({
        outputStyle: 'compressed',
        precision: 7,
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./assets/css/'));
});

gulp.task('default',function() {
  gulp.src('_scss/main.scss')
    .pipe(sass({
        outputStyle: 'compressed',
        precision: 7,
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./assets/css/'));
    
  gulp.watch('_scss/**/*.scss', ['styles']);
});