module.exports = function (grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            js: {
                files: {
                    'javascript/all.js': ['src/javascript/prettify.js', 'src/javascript/all.js']
                }
            },
        },
        cssmin: {
            options: {
                keepSpecialComments: 1
            },
            minify: {
                src: ['src/style.css', 'src/prettify.css'],
                dest: 'style.css'
            }
        }
    });
 
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['uglify', 'cssmin']);
};
