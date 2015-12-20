module.exports = function(grunt) {
	
	var autoprefixer = require('autoprefixer-core');

	grunt.initConfig({
	  sass: {
	    dist: {
	      options: {
	        style: 'expanded'
	      },
	      files: {
	        'assets/css/style.css': '_scss/main.scss'
	      }
	    }
	  },
	  // uglify: {
	  // 	my_target: {
  	//       files: {
  	//         'assets/js/app.min.js': ['js/fastclick.js', 'js/autocomplete.js', 'js/app.js']
  	//       }
  	//     }
	  // },
	  postcss: {
	  	options: {
	  		processors: [
	  			autoprefixer({ browsers: ['last 5 versions'] }).postcss
	  		]
	  	},
	  	dist: { src: 'css/*.css' }
	  },
	  combine_mq: {
		default_options: {
		  expand: true,
		  cwd: 'css',
		  src: 'style.css'
		}
	  },
	  watch: {
	    scripts: {
	      files: ['**/*.scss'],
	      tasks: ['sass', 'postcss', 'uglify'],
	      options: {
	        spawn: false,
	        livereload: true
	      },
	    },
	  },
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-combine-mq');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.registerTask('default', ['sass']);

};