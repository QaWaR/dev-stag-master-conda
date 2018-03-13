// Defining requirements
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var cssnano = require('gulp-cssnano');



// Create gulp sass development task
gulp.task('sass-dev', function () {
    gulp.src([
        'scss/main.scss'
    ]).pipe(sass())
        .pipe(cssnano())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./css'))
});


// Create gulp scripts development task
// gulp.task('scripts-dev', function () {
//     var jsFiles = [
//             './public/js/main.js',
//             './public/js/blog-grid.js'
//         ],
//         jsDest = './public/js';

//     return gulp.src(jsFiles)
//         .pipe(uglify({mangle: false}))
//         .pipe(rename({
//             suffix: '.min'
//         }))
//         .pipe(gulp.dest(jsDest));
// });

// Create gulp watch task
gulp.task('watch', function () {
    gulp.watch('./scss/*.scss', ['sass-dev']);
    //gulp.watch('./public/js/*.js', ['scripts-dev']);
});


// Create gulp serve task for development
// gulp.task('serve', ['watch', 'sass-dev', 'scripts-dev'], function () {
// });
gulp.task('serve', ['watch', 'sass-dev'], function () {
});

