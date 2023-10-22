// import replace from 'gulp-replace'
const addPHP = () => {
	return gulp.src('#src/php/*.php').pipe(gulp.dest('dist')).pipe(sync.stream())
}
export default addPHP
