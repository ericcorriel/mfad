var gulp = require('gulp');
var git = require('gulp-git');
var GulpSSH = require('gulp-ssh')
var fs = require("fs");
var config = require('./config.json')

var gulpSSH = new GulpSSH({
  ignoreErrors: false,
  sshConfig: config
})

gulp.task('push',function(){
	git.push('origin', 'master', function (err) {
    	if (err) throw err;
  	});
})

gulp.task('publish', ['push'] ,function(){
  config.privateKey = fs.readFileSync(config.privateKey);
	return gulpSSH
    .shell(['cd /var/www/html/mfad.ericcorriel.com','git pull origin master'])
    .pipe(gulp.dest('logs'))
});