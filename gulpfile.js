const gulp = require('gulp');
//const scss = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
//const cssnano = require('gulp-cssnano');
const browserSync = require('browser-sync');
const plumber = require('gulp-plumber');
//const localhost = '89.223.93.114';



gulp.task('scss', () => {
    return gulp
   .src('local/templates/visionerium_test-mode/*.scss')
        .pipe(plumber())
        //.pipe(scss())
        .pipe(
            autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {
               cascade: true
            })
        )
        //.pipe(cssnano())
        .pipe(gulp.dest('local/templates/visionerium_test-mode/'))
        .pipe((browserSync.reload({stream: true})))
});

// gulp.task('browserSync', () => {
//     browserSync({
//         open: 'external',
//         host: localhost,
//         proxy: localhost,
//         port: 80,
//
//     });
// });

gulp.task('default', ['scss'], () => {
    gulp.watch('local/templates/visionerium_test-mode/*.scss', ['scss']);

});