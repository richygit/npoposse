module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'src/<%= pkg.name %>.js',
        dest: 'build/<%= pkg.name %>.min.js'
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  //ensure users on IE 8 and below get to view the desktop experience on mobile devices
  grunt.loadNpmTasks('grunt-stripmq');

  grunt.initConfig({
    stripmq: {
        all: {
            files: {
                // Takes the input file `grid.css`, and generates `grid-old-ie.css`.
                'css/grid-old-ie.css': ['css/grid.css'],

                // Takes the input file `app.css`, and generates `app-old-ie.css`.
                'css/app-old-ie.css': ['css/app.css']
            }
        }
    }
  });

  // Default task(s).
  grunt.registerTask('default', ['uglify']);

};
