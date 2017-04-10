const gulp = require('gulp');
const sass = require('gulp-sass');
const sassModuleImporter = require('sass-module-importer');

gulp.task('styles', function() {
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass({ importer: sassModuleImporter() }))
        .on('error', function(erronInfo) {
            console.log(erronInfo.toString());
            this.emit('end');
        })
        .pipe(gulp.dest('./dist/'));
});