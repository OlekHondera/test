import gulp from 'gulp'
import esbuild from 'gulp-esbuild'

const scriptsBuild = () => {
	return gulp
		.src([
			'#src/js/main.js'
			// many js
			// "#src/js/main.js",
			// "#src/js/test.js",
			// "#src/js/test2.js"
		])
		.pipe(
			esbuild({
				outbase: '#src',
				bundle: true,
				treeShaking: true,
				sourcemap: true
			})
		)
		.pipe(gulp.dest('dist'))
}

export default scriptsBuild
