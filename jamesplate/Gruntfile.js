module.exports = function(grunt) {

	// To support SASS/SCSS or Stylus, just install
	// the appropriate grunt package and it will be automatically included
	// in the build process, Sass is included by default:
	//
	// * for SASS/SCSS support, run `npm install --save-dev grunt-contrib-sass`
	// * for Stylus/Nib support, `npm install --save-dev grunt-contrib-stylus`

	var npmDependencies = require('./package.json').devDependencies;
	var hasSass = npmDependencies['grunt-contrib-sass'] !== undefined;
	var hasStylus = npmDependencies['grunt-contrib-stylus'] !== undefined;

	grunt.initConfig({

		// Watches for changes and runs tasks
		watch : {
			sass : {
				files : ['assets/scss/**/*.scss'],
				tasks : (hasSass) ? ['sass:dev'] : null,
				options : {
					livereload : true
				}
			},
			compass : {
				files : ['assets/scss/**/*.scss'],
				tasks : (hasSass) ? ['compass:dev'] : null,
				options : {
					livereload : true
				}
			},
			stylus : {
				files : ['stylus/**/*.styl'],
				tasks : (hasStylus) ? ['stylus:dev'] : null,
				options: {
					livereload : true
				}
			},
			js : {
				files : ['assets/js/**/*.js'],
				tasks : ['jshint'],
				options : {
					livereload : true
				}
			},
			php : {
				files : ['**/*.php'],
				options : {
					livereload : true
				}
			}
		},

		// JsHint your javascript
		jshint : {
			all : ['js/*.js', '!js/modernizr.js', '!js/*.min.js', '!js/vendor/**/*.js'],
			options : {
				browser: true,
				curly: false,
				eqeqeq: false,
				eqnull: true,
				expr: true,
				immed: true,
				newcap: true,
				noarg: true,
				smarttabs: true,
				sub: true,
				undef: false
			}
		},

		// Dev and production build for sass
		sass : {
			production : {
				files : [
					{
						src : ['**/*.scss', '!**/_*.scss'],
						cwd : 'assets/scss',
						dest : 'dist/css',
						ext : '.css',
						expand : true
					}
				],
				options : {
					style : 'compressed'
				}
			},
			dev : {
				files : [
					{
						src : ['**/*.scss', '!**/_*.scss'],
						cwd : 'assets/scss',
						dest : 'dist/css',
						ext : '.css',
						expand : true
					}
				],
				options : {
					style : 'expanded'
				}
			}
		},

		// Dev and production build for compass
		compass: {
		    production: {
		      options: {
		        sassDir: 'assets/scss',
		        cssDir: 'dist/css',
		        imagesDir: 'assets/images',
		        outputStyle: 'compressed',
		        environment: 'production'
		      }
		    },
		    dev: {
		      options: {
		        sassDir: 'assets/scss',
		        cssDir: 'dist/css',
		        imagesDir: 'assets/images',
		        outputStyle: 'expanded'
		      }
		    }
		  },

		// Dev and production build for stylus
		stylus : {
			production : {
				files : [
					{
						src : ['**/*.styl', '!**/_*.styl'],
						cwd : 'stylus',
						dest : 'css',
						ext: '.css',
						expand : true
					}
				],
				options : {
					compress : true
				}
			},
			dev : {
				files : [
					{
						src : ['**/*.styl', '!**/_*.styl'],
						cwd : 'stylus',
						dest : 'css',
						ext: '.css',
						expand : true
					}
				],
				options : {
					compress : false
				}
			},
		},

		// Bower task sets up require config
		bower : {
			all : {
				rjsConfig : 'js/global.js'
			}
		},

		// Image min
		imagemin : {
			production : {
				files : [
					{
						expand: true,
						cwd: 'assets/images',
						src: '**/*.{png,jpg,jpeg}',
						dest: 'dist/images'
					}
				]
			}
		},

		// SVG min
		svgmin: {
			production : {
				files: [
					{
						expand: true,
						cwd: 'assets/images',
						src: '**/*.svg',
						dest: 'dist/images'
					}
				]
			}
		}

	});

	// Default task
	grunt.registerTask('default', ['watch']);

	// Build task
	grunt.registerTask('build', ['compass:production', 'imagemin:production', 'svgmin:production']);

	// Dev task
	grunt.registerTask('dev', ['compass:dev']);

	// Load up tasks
	if (hasSass) {
		grunt.loadNpmTasks('grunt-contrib-sass');
	}

	if (hasStylus) {
		grunt.loadNpmTasks('grunt-contrib-stylus');
	}
	
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-bower-requirejs');
	grunt.loadNpmTasks('grunt-contrib-requirejs');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-svgmin');

	// Run bower install
	grunt.registerTask('bower-install', function() {
		var done = this.async();
		var bower = require('bower').commands;
		bower.install().on('end', function(data) {
			done();
		}).on('data', function(data) {
			console.log(data);
		}).on('error', function(err) {
			console.error(err);
			done();
		});
	});

};
