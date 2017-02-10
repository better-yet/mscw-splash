const { mix } = require('laravel-mix');

mix.js([
		'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
		'script.js', 
	], 'public/assets/js')
	.sass('app.scss', 'public/assets/css');