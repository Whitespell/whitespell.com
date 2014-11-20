module.exports = function (grunt){

 grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    webRoot: 'www',
    devRoot: 'dev',

    connect: {
        server: {
            options: {
                livereload: true,
                hostname: '127.0.0.1',
                port: 9000,
                base: '<%= webRoot %>/',
                open: true
            }
        }
    },

    watch: {
        options: {
            livereload: true,
        },
        jade: {
            files: ['<%= devRoot %>/jade/**/*.jade'],
            tasks: ['jade']
        },
        js: {
            files: ['<%= devRoot %>/js/**/*.js'],
            tasks: ['concat']
        },
        sass: {
            files: ['<%= devRoot %>/sass/**/*.scss'],
            tasks: ['sass']
        }
    },

    jade: {
      compile: {
        options: {
          data: {
            debug: false
          }
        },
        files: [{
          cwd: '<%= devRoot %>/jade',
          src: '*.jade',
          dest: '<%= webRoot %>',
          ext: '.html',
          expand: true
        }]
      }
    },

    sass: {
        dist: {
          files: {
            '<%= webRoot %>/css/main.css': '<%= devRoot %>/sass/main.scss'
          }
        }
    },

    concat: {
        options: {
          separator: '\n\n',
        },
        js: {
          src: ['<%= webRoot %>/fonts/ss-pika/ss-pika.js', '<%= devRoot %>/js/libs/*.js', '<%= devRoot %>/js/src/*.js'],
          dest: '<%= webRoot %>/js/app.js'
        }
    },

    uglify: {
        js: {
          files: {
            '<%= webRoot %>/js/app.min.js': ['<%= webRoot %>/fonts/ss-pika/ss-pika.js', '<%= devRoot %>/js/libs/*.js', '<%= devRoot %>/js/src/*.js']
          }
        }
    }

 });

 require('load-grunt-tasks')(grunt);

 grunt.registerTask('default', ['connect', 'watch']);
 grunt.registerTask('build', ['jade', 'sass', 'uglify']);

}