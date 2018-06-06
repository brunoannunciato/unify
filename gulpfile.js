'use strict';

const gulp = require('gulp'),
	$ = require('gulp-load-plugins')(),
	del = require('del'),
	autoprefixer = require('autoprefixer'),
	mqpacker = require('css-mqpacker'),
	cssnano = require('cssnano'),
	webpack = require('webpack-stream'),
	named = require('vinyl-named'),
	uglify = require('uglifyjs-webpack-plugin'),
	browserSync = require('browser-sync');

const paths = {
	webpack: 'webroot/src/scripts/*.js',
	scripts: ['webroot/src/scripts/**/*.js'],
	styles: 'webroot/src/styles/**/*.scss',
	images: 'webroot/src/images/**/*.{png,jpeg,jpg,svg,gif}',
	extras: ['webroot/src/*.*', 'webroot/src/fonts/**/*'],
	dest: {
		scripts: 'webroot/dist/js',
		styles: 'webroot/dist/css',
		images: 'webroot/dist/img',
		extras: 'webroot/dist'
	}
};

const lint = function (files, options = {}) {
	return gulp.src(files)
		.pipe($.eslint(options))
		.pipe($.eslint.format())
		.pipe($.eslint.failAfterError());
};

gulp.task('lint:client', () => lint(paths.scripts, {
	rules: {
		'no-var': 0
	},
	globals: [
		'Nitro',
		'jQuery',
		'$'
	],
	envs: [
		'browser'
	]
}));

gulp.task('scripts', ['lint:client'], () => {
	return gulp.src(paths.webpack)
		.pipe($.plumber())
		.pipe(named())
		.pipe(webpack({
			output: {
				filename: '[name].min.js'
			},
			externals: {
				'jquery': 'jQuery',
				'popper.js': 'Popper'
			},
			resolve: {
				modules: [
					'src/scripts',
					'node_modules'
				],
				alias: {
					plugins: require('path').resolve('../../plugins')
				}
			},
			plugins: [

			],
			devtool: $.util.env.production ? '' : '#source-map'
		}))
		.pipe(gulp.dest(paths.dest.scripts));
});

gulp.task('styles', () => {
	return gulp.src(paths.styles)
		.pipe($.plumber())
		.pipe($.util.env.production ? $.util.noop() : $.sourcemaps.init())
		.pipe($.sass({
			outputStyle: $.util.env.production ? 'compressed' : 'nested',
			errLogToConsole: true,
			includePaths: [
				'node_modules',
			]
		}).on('error', $.sass.logError))
		.pipe($.postcss($.util.env.production ? [
			mqpacker({ sort: true }),
			cssnano({
				autoprefixer: false,
				reduceIdents: false
			})
		] : []))
		.pipe($.postcss([autoprefixer()]))
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(paths.dest.styles));
});

gulp.task('images', () => {
	return gulp.src(paths.images)
		.pipe($.plumber())
		.pipe($.imagemin({
			optimizationLevel: $.util.env.production ? 5 : 1,
			progressive: true,
			interlaced: true,
			svgoPlugins: [{ removeViewBox: true }]
		}))
		.pipe(gulp.dest(paths.dest.images));
});

gulp.task('extras', () => {
	return gulp.src(paths.extras, { base: 'src' })
		.pipe(gulp.dest(paths.dest.extras));
});

gulp.task('clean', () => del([paths.dest.extras]));

gulp.task('serve', ['watch'], function () {
	browserSync({
		files: ['dist/**', '!dist/**/*.map'],
		server: {
			baseDir: ['dist']
		},
		open: !$.util.env.no
	});
});

gulp.task('watch', ['images', 'scripts', 'styles', 'extras'], () => {
	gulp.watch(paths.scripts, ['scripts']);
	gulp.watch(paths.styles, ['styles']);
	gulp.watch(paths.images, ['images']);
	gulp.watch(paths.extras, ['extras']);
});

gulp.task('default', ['clean'], () => gulp.start('serve'));

gulp.task('deploy', ['clean'], () => {
	$.util.env.production = true;

	gulp.start(['images', 'scripts', 'styles', 'extras']);
});
