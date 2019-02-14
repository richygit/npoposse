module.exports = function(grunt) {
  grunt.initConfig({
    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
        },
        files: {                         // Dictionary of files
          'dist/css/main.css': 'src/css/main.scss',       // 'destination': 'source'
        }
      }
    },
    stripmq: {
        all: {
            files: {
                // Takes the input file `app.css`, and generates `app-old-ie.css`.
              'dist/css/main-old-ie.css': ['src/css/main.css']
            }
        }
    },
    pug: {
      compile: {
        options: {
          data: {
            debug: false
          }
        },
        files: [{
          expand: true,
          cwd: '.',
          src: ['src/pug/*.pug'],
          dest: 'dist/',
          ext: '.html',
          rename: function(dest, src) {
            src = src.replace('src/pug/', '');
            src = src.replace(/.pug$/, '.html');
            return dest + src;
          },
        }]
      }
    },
    watch: {
      scripts: {
        files: ['src/**/*'],
        tasks: ['sass', 'pug', 'htmllint'],
        options: {
          spawn: false,
        },
      },
    },
    vnuserver: {
    },
    htmllint: {
      all: {
        options: {
          server: {}
        },
        src: 'dist/**.html'
      }
    },
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  //ensure users on IE 8 and below get to view the desktop experience on mobile devices
  grunt.loadNpmTasks('grunt-stripmq');
  grunt.loadNpmTasks('grunt-contrib-pug');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-html');
  grunt.loadNpmTasks('grunt-vnuserver');

  // Default task(s).
  grunt.registerTask('default', ['vnuserver', 'watch']);
};
