'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    less = require('gulp-less'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    rimraf = require('rimraf'),
    browserSync = require("browser-sync"),
    reload = browserSync.reload;

var path = {
    assets: {
        php: 'site/templates/',
        js: 'site/templates/assets/js/',
        css: 'site/templates/assets/css/',
        img: 'site/templates/assets/img/',
        uikit: {
          js: 'site/templates/assets/js/',
          fonts: 'site/templates/assets/fonts/'
        },
        json: 'site/templates/assets/json/',
        fonts: 'site/templates/assets/fonts/'
    },
    src: {
        php: 'site/templates/**/*.php',
        js: 'site/templates/src/js/*.js',
        less: 'site/templates/src/less/template.less',
        img: 'site/templates/src/img/**/*.*',
        uikit: {
          js: 'site/templates/src/uikit/js/**/*.js',
          fonts: 'site/templates/src/uikit/fonts/*.*'
        },
        json: 'site/templates/src/json/*.json',
        fonts: 'site/templates/src/fonts/*.*'
    },
    watch: {
        php: 'site/templates/**/*.php',
        js: 'site/templates/src/js/**/*.js',
        less: 'site/templates/src/less/**/*.less',
        img: 'site/templates/src/img/**/*.*',
        uikit: {
          js: 'site/templates/src/uikit/js/**/*.js',
          less: 'site/templates/src/uikit/less/**/*.less',
          fonts: 'site/templates/src/uikit/fonts/*.*'
        },
        json:'site/templates/src/json/**/*.json',
        fonts:'site/templates/src/fonts/**/*.*'
    },
    clean: './site/templates/assets'
};

var config = {
    // server: {
    //     baseDir: "./"
    // },
    //tunnel: true,
    proxy: 'http://panama.loc' //openserver
    // port: 9000
    //logPrefix: "Frontend_Devil"
};

gulp.task('webserver', function () {
    browserSync(config);
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('php:build', function () {
    gulp.src(path.src.php)
        // .pipe(rigger())
        // .pipe(gulp.dest(path.assets.php))
        .pipe(reload({stream: true}));
});

gulp.task('less:build', function () {
    gulp.src(path.src.less)
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(prefixer())
        .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.assets.css))
        .pipe(reload({stream: true}));
});

gulp.task('js:build', function () {
    gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.assets.js))
        .pipe(reload({stream: true}));
});

gulp.task('img:build', function() {
    gulp.src(path.src.img)
        .pipe(gulp.dest(path.assets.img));
});

gulp.task('uikit:build:js', function () {
    gulp.src(path.src.uikit.js)
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.assets.js))
        .pipe(reload({stream: true}));
});

gulp.task('uikit:build:fonts', function() {
    gulp.src(path.src.uikit.fonts)
        .pipe(gulp.dest(path.assets.fonts));
});

gulp.task('json:build', function() {
    gulp.src(path.src.json)
        .pipe(gulp.dest(path.assets.json));
});

gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.assets.fonts));
});

gulp.task('build', [
    'php:build',
    'less:build',
    'js:build',
    'img:build',
    'uikit:build:js',
    'uikit:build:fonts',
    'json:build',
    'fonts:build'
]);

gulp.task('watch', function(){
    watch([path.watch.php], function(event, cb) {
        gulp.start('php:build');
    });
    watch([path.watch.less], function(event, cb) {
        gulp.start('less:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch([path.watch.img], function(event, cb){
        gulp.start('img:build');
    });
    watch([path.watch.uikit.less], function(event, cb) {
        gulp.start('less:build');
    });
    watch([path.watch.uikit.js], function(event, cb) {
        gulp.start('uikit:build:js');
    });
    watch([path.watch.uikit.fonts], function(event, cb) {
        gulp.start('uikit:build:fonts');
    });
    watch([path.watch.json], function(event, cb){
        gulp.start('json:build');
    });
    watch([path.watch.fonts], function(event, cb){
        gulp.start('fonts:build');
    });
});

gulp.task('default', ['build', 'webserver', 'watch']);
