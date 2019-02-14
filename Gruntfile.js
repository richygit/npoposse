module.exports = function(grunt) {
  grunt.initConfig({
    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
        },
        files: {                         // Dictionary of files
          'dev/css/main.css': 'src/css/main.scss',       // 'destination': 'source'
        }
      }
    },
    stripmq: {
        all: {
            files: {
                // Takes the input file `app.css`, and generates `app-old-ie.css`.
              'dev/css/main-old-ie.css': ['src/css/main.css']
            }
        }
    },
    pug: {
      compile: {
        options: {
          data: {
            debug: false
          },
          pretty: true,
        },
        files: [{
          expand: true,
          cwd: '.',
          src: ['src/pug/*.pug'],
          dest: 'dev/',
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
        tasks: ['sass', 'pug', 'htmllint', 'copy'],
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
        src: 'dev/**.html'
      }
    },
    connect: {
      server: {
        options: {
          port: 9001,
          host: 'localhost',
          base: 'dev',
          livereload: false, //TODO enable livereload/browser-sync
        }
      }
    },
    copy: {
      main: {
        files: [
          // includes files within path
          {
            expand: true, 
            flatten: true, 
            src: ['src/images/**'], 
            dest: 'dev/images/', 
            filter: 'isFile'
          },
        ],
      },
    },
  });

  //TODO setup dist task to minimise and uglify assets
  grunt.loadNpmTasks('grunt-contrib-sass');
  //ensure users on IE 8 and below get to view the desktop experience on mobile devices
  grunt.loadNpmTasks('grunt-stripmq');
  grunt.loadNpmTasks('grunt-contrib-pug');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-html');
  grunt.loadNpmTasks('grunt-vnuserver');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Default task(s).
  grunt.registerTask('default', ['vnuserver', 'connect', 'watch']);
};
