var config       = require('../config')
if(!config.tasks.html) return

var browserSync  = require('browser-sync')
var gulp         = require('gulp')
var gulpif       = require('gulp-if')
var handleErrors = require('../lib/handleErrors')
var htmlmin      = require('gulp-htmlmin')
var path         = require('path')
var fs           = require('fs')

var paths = {
  src: [path.join(config.root.src, config.tasks.html.src, '/*')],
  dest: path.join(config.root.dest, config.tasks.html.dest),
}

var htmlTask = function() {

  return gulp.src(paths.src)
    .pipe(gulpif(global.production, htmlmin(config.tasks.html.htmlmin)))
    .pipe(gulp.dest(paths.dest))
    .on('end', browserSync.reload)
}

gulp.task('html', htmlTask)
module.exports = htmlTask
