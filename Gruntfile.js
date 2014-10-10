/*global module:false,require:false*/
module.exports = function(grunt) {

	var os = require('os'),
		isWindows = os.platform().indexOf('win') === 0; // watch out for `darwin`

	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	// Project configuration.
	grunt.initConfig({
		pkg: '<json:package.json>',
		banner: '/*! Project Name - v<%= pkg.version %> - ' +
				'<%= grunt.template.today("yyyy-mm-dd") %>\n' +
				'* Copyright (c) <%= grunt.template.today("yyyy") %> ' +
				'Authored by Filament Group, Inc. */',
		clean: {
			dist: [ "_dist/" ],
			grunticon: [ ".grunticon-temp" ]
		},
		concat: {
			options: {
				banner: '<%= banner %>'
			},
			js_initial: {
				src: [
					'_tmpl/_js/_lib/modernizr.js',
					'_tmpl/_js/app-globals.js',
					'_tmpl/_js/initial.config.js'
				],
				dest: '_dist/_js/initial.js'
			},
			js_main: {
				src: [
					// keep this globalenhance file last!
					'_tmpl/_js/globalenhance.js'
				],
				dest: '_dist/_js/main.js'
			},
			js_respond: {
				src: [
					'_tmpl/_js/_lib/respond.js'
				],
				dest: '_dist/_js/respond.js'
			},
			css_main: {
				src: [
					'_tmpl/_css/_lib/*',
					'_tmpl/_css/all.css',
				],
				dest: '_dist/_css/all.css'
			}
		},
		copy: {
			dist: {
				files: [
					{ expand: true, cwd: '_tmpl/docs/', src: ["*.html"], dest: "_dist/docs/" },
					{ expand: true, cwd: '_tmpl/_includes/', src: ["**"], dest: "_dist/_includes/" },
					{ expand: true, cwd: "_tmpl/_img/", src: ["**"], dest: "_dist/_img/" },
					{ expand: true, cwd: "_tmpl/_img/svg/", src: ["*.png"], dest: "_dist/_img/_svg/" },
					{ expand: true, cwd: "_tmpl/_css/_img/", src: ["**"], dest: "_dist/_css/_img/" },
					{ expand: true, cwd: "_tmpl/", src: ["*.html","*.php","*.json"], dest: "_dist/" },
					{ expand: true, cwd: "_tmpl/", src: [".htaccess"], dest: "_dist/" }]
			},
			grunticon: {
				files: [
					{ expand: true, cwd: "_tmpl/_css/_svg/", src: ["**"], dest: ".grunticon-temp" }
				]
			}
		},
		watch: {
			all: {
				files: [
					'!_tmpl/_css/**/*',
					'!_tmpl/_js/**/*',
					'_tmpl/**/*'
				],
				tasks: 'watch-default'
			},

			css: {
				files: ['_tmpl/_css/**/*'],
				tasks: 'watch-css'
			},

			js: {
				files: ['_tmpl/_js/**/*'],
				tasks: 'watch-js'
			},
			grunticon: {
				files: ['_tmpl/_css/_svg/*'],
				tasks: 'watch-grunticon'
			}
		},
		cssmin: {
			options: {
				banner: '<%= banner %>',
				stripBanners: true
			},
			css_main: {
				src: [
					'<%= concat.css_main.dest %>'
				],
				dest: '<%= concat.css_main.dest %>'
			}
		},
		uglify: {
			options: {
				banner: '<%= banner %>',
				stripBanners: true
			},
			js_initial: {
				src: [
					'<%= concat.js_initial.dest %>'
				],
				dest: '<%= concat.js_initial.dest %>'
			},
			js_main: {
				src: [
					'<%= concat.js_main.dest %>'
				],
				dest: '<%= concat.js_main.dest %>'
			},
			js_respond: {
				src: [
					'<%= concat.js_respond.dest %>'
				],
				dest: '<%= concat.js_respond.dest %>'
			}
		},
		svgmin: {                                           // Task
			options: {                                      // Configuration that will be passed directly to SVGO
				plugins: [{
					removeViewBox: false
				}]
			},
			tmpl: {
				files: [
					{
						expand: true,
						cwd: '.grunticon-temp/',
						src: ['**/*.svg'],
									dest: '.grunticon-temp/'
						}
				]
			}
		},
		grunticon: {
			all: {
				options: {
					src: ".grunticon-temp/",
					dest: "_dist/_css/_grunticon/",
					svgo: true,
					pngcrush: false,
					cssbasepath: "/",
					colors: {
						"green": "#0C756D"
					}
				}
			}
		},
		criticalcss: {
			custom_options: {
				options: {
					url: "http://ricg.io.dev",
					filename : 'all.css',
					outputfile: "_dist/_css/critical.css"
				}
			}
		},

		// prevent editing of _dist files
		chmod: {
			options: {},
			readonly: {
				options: {
					mode: isWindows ? '666': '555'
				},
				src: ['_dist/**']
			},
			writeable: {
				options: {
					mode: isWindows ? '666': '755'
				},
				src: ['_dist/**']
			}
		},

		qunit: {
			all: ["_tmpl/_test/*.html"]
		}

	});

	// Default task.
	grunt.registerTask('default', [
		'chmod:writeable',
		'clean',
		'qunit',
		'concat',
		'copy',
		'svgmin',
		'grunticon',
		'criticalcss',
		'chmod:readonly'
	]);

	grunt.registerTask('icons', [
		'chmod:writeable',
		'clean:grunticon',
		'copy:grunticon',
		'svgmin',
		'grunticon',
		'chmod:readonly'
	]);

	// NOTE these watch tasks try to run only relevant tasks per file save

	grunt.registerTask('watch-endpoints', [
		'chmod:writeable',
		'copy',
		'chmod:readonly'
	]);

	grunt.registerTask('watch-default', [
		'chmod:writeable',
		'qunit',
		'copy',
		'svgmin',
		'chmod:readonly'
	]);

	grunt.registerTask('watch-css', [
		'chmod:writeable',
		'concat:css_main',
		'chmod:readonly'
	]);

	grunt.registerTask('watch-js', [
		'chmod:writeable',
		'concat:js_initial',
		'concat:js_main',
		'concat:js_respond',
		'concat:js_docs',
		'chmod:readonly'
	]);

	grunt.registerTask('watch-grunticon', [
		'chmod:writeable',
		'clean:grunticon',
		'copy:grunticon',
		'svgmin',
		'grunticon',
		'chmod:readonly'
	]);

	grunt.registerTask('stage', [
		'clean',
		'qunit',
		'concat',
		'cssmin',
		'uglify',
		'copy',
		'svgmin',
		'grunticon'
	]);
};
