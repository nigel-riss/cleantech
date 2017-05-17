const gulp = require('gulp');
const rename = require('gulp-rename');
const urlAdjuster = require('gulp-css-url-adjuster');

gulp.task('copyPHP', function() {
    gulp.src('./wp/*.php')
        .pipe(gulp.dest('C:/xampp/htdocs/cleantech/wp-content/themes/cleantech/'));
});

gulp.task('copyCSS', function() {
    gulp.src('./dist/styles.css')
        .pipe(rename('style.css'))
        .pipe(gulp.dest('C:/xampp/htdocs/cleantech/wp-content/themes/cleantech/'));
});

gulp.task('copyJS', function() {
    // 
});

gulp.task('copyPHPEn', function() {
    gulp.src('./wp_en/*.php')
        .pipe(gulp.dest(
            'C:/xampp/htdocs/cleantech-en/wp-content/themes/cleantech/'
        ));
})