module.exports = function(grunt){

	grunt.initConfig({
		uglify: {
			options: {
				mangle: false
			},
			dist: {
	      		'min.js': 'js/faces.js'
			}
  		},
  		cssmin: {
		  	minify: { expand: 'true', src: 'css/style.css', ext: '.min.css'}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('default',['uglify','cssmin']);
}

/**
* Si problème avec les min, vérifier que les min ne sont pas minifier eux
* ou essayer de désactiver 'mangle' dans uglify
**/