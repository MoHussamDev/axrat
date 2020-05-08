const gulp        = require('gulp');
const sassGlob = require('gulp-sass-glob');
const browserSync = require('browser-sync').create();
const browserSyncReuseTab  = require('browser-sync-reuse-tab')(browserSync,'external')
const sass        = require('gulp-sass');
const pug         = require('gulp-pug');
const uglify      = require('gulp-uglify');
const imageMin    = require('gulp-imagemin');
const concat      = require('gulp-concat');
const del         = require('del');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const wait = require('gulp-wait');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
sass.compiler = require('node-sass');
require('dotenv').config();

// Compile Sass & Inject Into Browser
function scss() {
    return gulp.src(['web/app/themes/axrat/_src/scss/style.scss',
                    ])
        .pipe(sassGlob())            
        .pipe(plumber(
            {
                errorHandler: function(err) {
                  // display the error message
                  console.log(err.message);
                  // end the errored task
                  this.emit('end') }
              }
        ))
        .pipe(sass())
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(concat('style.css'))
        .pipe(gulp.dest('./web/app/themes/axrat/dist/css'))
        .pipe(browserSync.stream());
};

// Clean the build folder
function clean (done) {
    console.log('-> Cleaning dist folder')
    del([
      'dist',
      'src/assets/css',
      'src/assets/compJs',
      'src/*.html'
  
    ]);
    done()
  };
  
// Watch Sass, Pug & Serve
function watchFiles (){
     browserSync.init({
        proxy:{
            target:process.env.WP_HOME_HTTPS
        },
        open: false,
        notify: false,
        reloadDelay: 100

    })
    gulp.watch(['./web/app/themes/axrat/_src/scss/*','./web/app/themes/axrat/_src/scss/**/*','./web/app/themes/axrat/_src/scss/**/**/*'], scss).on('change', browserSync.reload);
};

exports.clean = clean;
exports.watchFiles = watchFiles;
exports.scss =scss;
gulp.task('default',gulp.series(scss,watchFiles))
  