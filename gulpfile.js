const { src, dest, parallel, watch, series } = require('gulp');
const concat = require('gulp-concat');
const gulp_sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const del = require("del");
const browserSync = require('browser-sync').create();
const reload = browserSync.reload;

exports.clean = function clean() {
    return del(["./dist"]);
}

exports.js = function js() {
    return src(['node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js', 
        'src/js/main.js'], { sourcemaps: true })
        .pipe(concat('main.min.js'))
        .pipe(dest("dist/js", { sourcemaps: true }));
}

exports.assets = function assets() {
    return src(['src/assets/**/*'])
        .pipe(dest("dist/assets"))
}

exports.css = function css() {
    return src(['src/css/**/*'])
        .pipe(dest("dist/css"))
}

exports.sass = function sass() {
    return src(['src/scss/*.scss'])
        .pipe(gulp_sass())
        .pipe(minifyCSS())
        .pipe(dest("dist/css"))
        .pipe(reload({stream: true}));
}

exports.watch = function() {
    watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'], exports.sass);
    watch(['src/js/*.js'], exports.js);
    //watch(['*.php'], exports.sass);
};

exports.sync = function() {
    browserSync.init({
        proxy: "https://leonidlezner.local",

        https: {
            key: '/Applications/MAMP/Library/OpenSSL/certs/leonidlezner.local.key',
            cert: '/Applications/MAMP/Library/OpenSSL/certs/leonidlezner.local.crt'
        },

        /*server: {
            baseDir: "./public"
        },*/

        open: false
    });

    watch("*.php").on('change', browserSync.reload);
    
    exports.watch();
}

exports.default = series(exports.clean, parallel(
    exports.sass,
    exports.css,
    exports.assets,
));