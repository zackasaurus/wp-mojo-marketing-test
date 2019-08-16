const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

// compile scss into css
const style = () => {
  // 1. where is scss file
  return (
    gulp
      .src('./scss/**/*.scss')
      // 2. pass file through compiler
      .pipe(sass())
      // 3. save css file
      .pipe(gulp.dest('./css'))
      // 4. stream changes to all browser
      .pipe(browserSync.stream())
  );
};

const watch = () => {
  browserSync.init({
    proxy: 'http://mojo.local/'
  });
  gulp.watch('./scss/**/*.scss', style).on('change', browserSync.reload);
  gulp.watch('./*.php').on('change', browserSync.reload);
};

exports.style = style;
exports.watch = watch;

// var reload = browserSync.reload;
// var concat = require('gulp-concat');

// browser-sync task for starting the server.
// gulp.task('browser-sync', function() {
//   //watch files
//   var files = ['./sass/*.scss', './*.php'];

//   //initialize browsersync
//   browserSync.init(files, {
//     //browsersync with a php server
//     proxy: 'http://mojomarketingtest.local/',
//     notify: true
//   });
// });

// // Sass task, will run when any SCSS files change & BrowserSync
// // will auto-update browsers
// gulp.task('sass', function() {
//   return gulp
//     .src(['sass/main.scss', 'sass/wp-core.scss', 'sass/*.scss'])
//     .pipe(sass({ outputStyle: 'compressed' }))
//     .pipe(concat('styles.css'))
//     .pipe(gulp.dest('./css'))
//     .pipe(reload({ stream: true }));
// });

// // Default task to be run with `gulp`
// gulp.task('default', gulp.series('scss', 'browser-sync'), function() {
//   gulp.watch('scss/**/*.scss', ['scss']);
// });
