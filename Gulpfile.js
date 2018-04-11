var gulp 		= require( 'gulp' );
var watch 		= require( 'gulp-watch' );
var sass 		= require( 'gulp-sass' );
var sourcemaps 	= require( 'gulp-sourcemaps' );
var rename 		= require("gulp-rename");
var concat 		= require("gulp-concat");

// Copia o arquivo do Docker para a raiz do wordpress, precisa roda gulp docker no terminal
gulp.task( 'docker', function() {
	gulp.src( 'docker-compose.yml' )
	.pipe ( gulp.dest( '../../../' ) );
} );
// Normalize
gulp.task( 'normalize', function() {
	gulp.src( 'node_modules/normalize.css/normalize.css' )
	.pipe ( gulp.dest( 'assets/bibliotecas' ) );
} );

// SASS
var prefixerOptions = {
	browsers: ['last 3 versions']
};
gulp.task( 'sass', function() {
	gulp.src( 'assets/sass/style.scss' )
	.pipe( sourcemaps.init())
	.pipe( sass.sync().on('error', sass.logError) )
	.pipe( sourcemaps.write( './assets/maps' ) )
    .pipe( gulp.dest( './' ) );
} );

//JavaScript
var jsFiles = [
	'assets/js/scripts.js'
];
gulp.task( 'javascript', function() {
	gulp.src( jsFiles )
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./'));
} );

// Default
gulp.task( 'default', [ 'normalize', 'sass', 'javascript' ] );

// Watch
gulp.task('watch', function() {
    gulp.watch( 'assets/sass/**/*.scss', ['sass'] );
    gulp.watch( 'assets/sass/style.scss', ['sass'] );
    gulp.watch( jsFiles, ['javascript'] );
} );
