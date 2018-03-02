'use strict';

// Require Dependencies
const gulp = require('gulp');
const fs = require('fs');
const gulpSequence = require('gulp-sequence');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require("autoprefixer");
const cleanCSS = require('gulp-clean-css');
const browserSync = require('browser-sync').create();
const gcmq = require('gulp-group-css-media-queries');

// Settings
let postCssSettings = [
  autoprefixer({browsers: ['last 2 version']})
];

const config = require('./projectConfig.json');
const devDomain = config.devDomain;

// Tasks

// Style
gulp.task('style', function() {
 return gulp.src('./assets/sass/main.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(postcss(postCssSettings))
  .pipe(cleanCSS())
  .pipe(sourcemaps.write('/'))
  .pipe(gulp.dest('./assets/dist'))
  .pipe(browserSync.stream({match: '**/*.css'}));
});

// Style build
gulp.task('style-build', function() {
 return gulp.src('./assets/sass/main.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(gcmq())
  .pipe(postcss(postCssSettings))
  .pipe(cleanCSS())
  .pipe(gulp.dest('./assets/dist'));
});

// Sprite
gulp.task('sprite', function() {
  const spritesmith = require('gulp.spritesmith');
  const merge = require('merge-stream');
  let spriteData = gulp.src('./assets/images/icons/*.png').pipe(spritesmith({
    imgName: 'spritesheet.png',
    cssName: '_sprite.scss',
    padding: 2,
    cssFormat: 'css',
    imgPath: '../images/spritesheet.png'
    // remove icon- prefix
    // cssOpts: {
    //   cssSelector: function (sprite) {
    //     return '.' + sprite.name;
    //   }
    // }
  }));
  let imgStream = spriteData.img
    .pipe(gulp.dest('./assets/images/'));
  let cssStream = spriteData.css
    .pipe(gulp.dest('./assets/sass/'));
  return merge(imgStream, cssStream);
});

// Clean
gulp.task('clean', function() {
  const del = require('del');
  return del(['./assets/dist/**', '!./assets/dist', '!./assets/dist/README.md']);
});

// Vendor
// copy vendors from node_modules, etc to dist/vendor folder
gulp.task('vendor', function() {
  return gulp.src(config.vendor)
    .pipe(gulp.dest('./assets/dist/vendor'));
});


// Main tasks


// Build
gulp.task('build-dev', function(callback) {
  gulpSequence(
    'clean',
    'style',
    'vendor',
    callback
  );
});

gulp.task('build', function(callback) {
  gulpSequence(
    'clean',
    'style-build',
    'vendor',
    callback
  );
});


// Watch
gulp.task('serve', ['build-dev'], function() {
  browserSync.init({
    files: ['{include,template-parts,woocommerce}/**/*.php', '*.php'],
    proxy: devDomain,
    open: false,
    port: 5050,
    snippetOptions: {
      whitelist: ['/wp-admin/admin-ajax.php'],
      blacklist: ['/wp-admin/**']
    }
  });
  gulp.watch('assets/sass/**/*.scss', {cwd: './'}, ['style']);
  gulp.watch('assets/**/*.{js,jpg,jpeg,gif,png,svg}', {cwd: './'}, ['watch:reload']);
});

gulp.task('watch:reload', ['add-reload'], reload);

gulp.task('add-reload', function() {});

// Development task
gulp.task('default', ['serve']);


// Browser reload
function reload(done) {
  browserSync.reload();
  done();
}
