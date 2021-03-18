

module.exports = function(grunt){
    const sass = require('node-sass');
 
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        // Passs in options, references to files etc
        // Concatenate my js files into a single js file
        watch:{
            sass:{
                files: ['assets/scss/*.scss', 'assers/scss/**/*.scss'],
                tasks: ['sass']
            },
            js: {
                files: ['assets/js/*js', 'assets/js/**/*.js'],
                tasks: ['concat:js']
            }
        },
        sass: {
            options: {
                implementation: sass,
                sourceMap: true
            },
            dist: {
                files: {
                    'style.css': 'assets/scss/main.scss'
                }
            }
        },
        concat: { 
            js:{
                options: {
                    separator: ';',
                  },
                    src: ['assets/js/*.js', 'assets/js/**/*.js'],
                    dest: 'assets/app.js',
            }
        },
    })

    grunt.registerTask('default', ['concat', 'sass', 'watch'])
}