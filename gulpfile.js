// define gulp
const gulp = require("gulp");

// define sass
const sass = require("gulp-sass");

//compile sass
sass.compiler = require("node-sass");

// minify css
cssmin = require("gulp-cssnano");
// sass function
gulp.task("sass", () => {
  return gulp
    .src("./scss/*.scss")
    .pipe(sass())
    .pipe(cssmin())
    .pipe(gulp.dest("./des"));
});

// sass watch file
gulp.task("watch", () => {
  gulp.watch("./scss/**/*.*", gulp.series("sass"));
});
// compress php files
gulp.task("compressPhp", () =>
  gulp
    .src("*.php", { read: false })
    .pipe(phpMinify())
    .pipe(gulp.dest("min-index.php"))
);
//work the tasks sequence
gulp.task("default", gulp.series("sass", "compressPhp", "watch"));
