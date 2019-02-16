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
            src: ['src/images/*'], 
            dest: 'dev/images/', 
            filter: 'isFile'
          },
          {
            expand: true, 
            flatten: true, 
            src: ['src/js/*'], 
            dest: 'dev/js/', 
            filter: 'isFile'
          },
        ],
      },
    },
    postcss: {
      options: {
        map: {
            inline: false, // save all sourcemaps as separate files...
            annotation: 'dist/css/maps/' // ...to the specified directory
        },

        processors: [
          require('pixrem')(), // add fallbacks for rem units
          require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
          require('cssnano')() // minify the result
        ]
      },
      dist: {
        src: 'dev/css/*.css'
      }
    },
    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'src/images',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'dev/images/'
        }]
      }
    },
    uglify: {
      my_target: {
        options: {
          sourceMap: true,
        },
        files: {
          'dev/js/main.min.js': ['src/js/menu.js']
        }
      }
    },
    watch: {
      scripts: {
        files: ['src/**/*'],
        tasks: ['copy', 'sass', 'pug', 'htmllint'],
        options: {
          spawn: false,
          livereload: true,
        },
      },
    },
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  //ensure users on IE 8 and below get to view the desktop experience on mobile devices
  grunt.loadNpmTasks('grunt-stripmq');
  grunt.loadNpmTasks('grunt-contrib-pug');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-html');
  grunt.loadNpmTasks('grunt-vnuserver');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask(
    'default', ['vnuserver', 'connect', 'watch']
  );
};
