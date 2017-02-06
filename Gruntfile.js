/*global module:false,require:false*/
module.exports = function(grunt) {

	var os = require('os'),
		isWindows = os.platform().indexOf('win') === 0; // watch out for `darwin`

	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
	grunt.loadNpmTasks('assemble');

	// Project configuration.
	grunt.initConfig({
		pkg: '<json:package.json>',
		banner: '/*! Project Name - v<%= pkg.version %> - ' +
				'<%= grunt.template.today("yyyy-mm-dd") %>\n' +
				'* Copyright (c) <%= grunt.template.today("yyyy") %> ' +
				'Mat Marquis - mat@matmarquis.com */',
		clean: {
			dist: [ "_dist/" ]
		},
		concat: {
			options: {
				banner: '<%= banner %>'
			},
			js_initial: {
				src: [
					'_tmpl/_js/app-globals.js',
					'_tmpl/_js/initial.config.js'
				],
				dest: '_dist/_js/initial.js'
			},
			js_main: {
				src: [
					// keep this globalenhance file last!
					'_tmpl/_js/_lib/*',
					'_tmpl/_js/main.js'
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
					{ expand: true, cwd: '_tmpl/_includes/', src: ["**"], dest: "_dist/_includes/" },
					{ expand: true, cwd: "_tmpl/_img/", src: ["**"], dest: "_dist/_img/" },
					{ expand: true, cwd: "_tmpl/_img/svg/", src: ["*.png"], dest: "_dist/_img/_svg/" },
					{ expand: true, cwd: "_tmpl/_css/", src: ["**"], dest: "_dist/_css/" },
					{ expand: true, cwd: "_tmpl/", src: [".htaccess"], dest: "_dist/" }]
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
		criticalcss: {
			options: {
				filename: "_tmpl/_css/all.css",
				url: "http://localhost:8000/?nocrit",
				outputfile: "_dist/_css/critical.css"
			}
		},

		assemble: {
			options: {
				flatten: true,
				layout: ['_tmpl/index.hbs'],
				partials: ['_tmpl/_partials/**/*.hbs'],
				data: ['_tmpl/_data/*.json'],
				ext: ".php"
			},
			build: {
				src: '_tmpl/*.hbs',
				dest: '_dist/'
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
		'clean',
		'qunit',
		'concat',
		'copy',
		'cssmin',
		'uglify',
		'assemble',
		'criticalcss',
	]);

	// NOTE these watch tasks try to run only relevant tasks per file save

	grunt.registerTask('watch-endpoints', [
		'copy',
	]);

	grunt.registerTask('watch-default', [
		'clean',
		'qunit',
		'concat',
		'copy',
		'cssmin',
		'uglify',
		'assemble',
		'criticalcss',
	]);

	grunt.registerTask('watch-css', [
		'clean',
		'copy',
		'assemble',
		'concat:css_main',
		'cssmin',
		'criticalcss',
	]);

	grunt.registerTask('watch-js', [
		'concat:js_initial',
		'concat:js_main'
	]);

	grunt.registerTask('stage', [
		'clean',
		'qunit',
		'concat',
		'copy',
		'cssmin',
		'uglify',
		'assemble',
		'criticalcss',
		'uglify'
	]);
};
