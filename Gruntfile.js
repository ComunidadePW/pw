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
            with_banner: {
                options: {
                    banner: '/* \n' +
                        'Theme Name: pw \n' +
                        'Theme URI: http://www.pinceladasdaweb.com.br/blog\n' +
                        'Description: Tema do blog Pinceladas da Web\n' +
                        'Author: Comunidade PW \n' +
                        'Author URI: https://github.com/comunidadepw \n' +
                        'Version: 0.0.3 \n' +
                        'Tags: light, two-columns, left-sidebar, fluid-layout, sticky-post \n' +
                        'License: GNU General Public License v2 or later \n' +
                        'License URI: http://www.gnu.org/licenses/gpl-2.0.html \n' +
                        '*/'
                },
                files: {
                    'style.css': ['src/style.css', 'src/prettify.css']
                }
            }
        }
    });
 
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['uglify', 'cssmin']);
};
