var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var frontnote = require("gulp-frontnote");
var uglify = require("gulp-uglify");
var browser = require("browser-sync");
var plumber = require("gulp-plumber");
var minifyCSS = require('gulp-minify-css');

gulp.task("server", function() {
    browser({
        server: {
            baseDir: "dist/"
        }
    });
});

gulp.task("sass", function() {
    gulp.src("src/scss/common.scss")
        .pipe(plumber())
        .pipe(frontnote({css: '../popoi_wp/wp-content/themes/twentyseventeen/assets/css/common.css'}))
        .pipe(sass())
        .pipe(autoprefixer())
		.pipe(minifyCSS({
		  	keepBreaks: false
		}))
        .pipe(gulp.dest("popoi_wp/wp-content/themes/twentyseventeen/assets/css"))
        .pipe(browser.reload({stream:true}));
});

gulp.task("js", function() {
    gulp.src(["src/js/**/*.js"])
		.pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('popoi_wp/wp-content/themes/twentyseventeen/assets/js/'))
        .pipe(browser.reload({stream:true}));
});

gulp.task("default",['server'], function() {
    gulp.watch(["src/js/**/*.js"],["js"]);
    gulp.watch("src/scss/common.scss",["sass"]);
});