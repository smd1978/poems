var gulp = require('gulp'), // Подключаем Gulp
		sass        = require('gulp-sass')(require('sass')), //Подключаем Sass пакет,
		browserSync = require('browser-sync'); // Подключаем Browser Sync
		const bulk = require('gulp-sass-bulk-importer');
		const autoprefixer = require('gulp-autoprefixer');

	gulp.task('sass', function(){ // Создаем таск Sass
		return gulp.src('app/sass/**/*.sass') // Берем источник
			.pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
			.pipe(bulk())
			.pipe(gulp.dest('app/css/')) // Выгружаем результата в папку app/css
			.pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
			.pipe(autoprefixer())
	});
	 
	gulp.task('browser-sync', function() { // Создаем таск browser-sync
		browserSync.init({ // Выполняем browserSync
			proxy:"np10"
		});
	});
	 
	gulp.task('watch', function() {
		gulp.watch('app/sass/**/*.sass', gulp.parallel('sass'));
		gulp.watch('*.php').on("change", browserSync.reload);
	});
	gulp.task('default', gulp.parallel('sass', 'browser-sync', 'watch'));