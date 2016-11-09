var options = {};
  options.user = 'markszymanski';
  options.port = 8888;
  options.site_path = 'http://localhost:8888/electricAgenda/'; // something like /Users/username/sites/mymampsite


var gulp    = require('gulp'),
$           = require('gulp-load-plugins')(),
mamp        = require('gulp-mamp'),
uglify      = require('gulp-uglify'),
sass        = require('gulp-sass'),
browserSync = require('browser-sync').create(),
prefix      = require('gulp-autoprefixer'),
concat      = require('gulp-concat');


gulp.task('config', function(cb){
    mamp(options, 'config', cb);
});

gulp.task('start', function(cb){
    mamp(options, 'start', cb);
});

gulp.task('stop', function(cb){
    mamp(options, 'stop', cb);
});

gulp.task('mamp', ['config', 'start']);


var sassPaths = [
  'bower_components/foundation/scss'
];

gulp.task('sass', function() {
  return gulp.src('scss/style.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed'
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest(''))
    .pipe(browserSync.stream());
});


// Scripts task: Uglify | Concatenate
gulp.task('scripts', function(){
  gulp.src([
    'bower_components/jquery/dist/jquery.js', 
    'bower_components/foundation/js/foundation.js',
    'js/layout/jquery.mixitup.min.js'
    ])
  .pipe(concat('foundation.js'))
  .pipe(uglify())
  .pipe(gulp.dest('build/js'));
});

// Scripts task: Uglify | Concatenate
gulp.task('fest_scripts', function(){
  gulp.src([
    'js/festival/sheetrock.js',
    'js/festival/handlebars.js'
    ])
  .pipe(concat('festival.js'))
  .pipe(uglify())
  .pipe(gulp.dest('build/js'));
});

// Scripts task: Uglify | Concatenate
gulp.task('app_scripts', function(){
  gulp.src([
    'js/layout/mfp.js',
    'js/app/app.js',
    'js/app/*.js'
    ])
  .pipe(concat('app.js'))
  .pipe(uglify())
  .pipe(gulp.dest('build/js'));
});

// Watch JS
gulp.task('watch', ['sass'], function(){

  browserSync.init({
        // server: {
        //     baseDir: "./"
        // }
        proxy: 'http://localhost:8888/',
        port: 5000
    });

  gulp.watch('js/app/*.js', ['app_scripts']);
  gulp.watch('scss/**/*.scss', ['sass']);
  gulp.watch(['*.php', 'articles/*.php', 'festivals/*.php']).on('change', browserSync.reload);
});

  gulp.task('default', ['sass','scripts', 'app_scripts', 'fest_scripts', 'watch'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
});