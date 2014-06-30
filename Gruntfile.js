module.exports = function (grunt) {

    //load tasks from devDependencies within package.json
    require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});

    //because you can't abstract too much
    var psv2Config = {
        jsCustom: 'js/psv2',
        jsLibraries: 'js/libraries',
        production: 'staging'
    }
    grunt.initConfig({

        psv2: psv2Config,

        clean: {
            // production: ['production/'] this either creates or deletes the directory
            production: {
                files: [{
                    dot: true,
                    src: ['<%=psv2.production %>/*']
                }]
            }
        },

        // ngmin tries to make the code safe for minification automatically by
        // using the Angular long form for dependency injection. It doesn't work on
        // things like resolve or inject so those have to be done manually.
        ngmin: {
          dist: {
            files: [{
              // expand: true,
              // cwd: '<%=psv2.production %>/<%=psv2.jsCustom %>',
              src: '<%=psv2.production %>/<%=psv2.jsCustom %>/psv2.js',
              dest: '<%=psv2.production %>/<%=psv2.jsCustom %>/psv2.js'
            }]
          }
        },
        //
        //let's all join together
        //
        concat: {
            psv2: {
                src: [
                    '<%=psv2.jsCustom %>/app.js',
                    '<%=psv2.jsCustom %>/directives/responsive-trigger.js',
                    '<%=psv2.jsCustom %>/directives/backbutton.js'

                ],
                dest: '<%=psv2.production %>/<%=psv2.jsCustom %>/psv2.js'
            },
            angular: {
                src: [
                '<%=psv2.jsLibraries %>/angular/angular.min.js',
                '<%=psv2.jsLibraries %>/angular-animate/angular-animate.min.js',
                '<%=psv2.jsLibraries %>/angular-touch/angular-touch.min.js'
                ],
                dest: '<%=psv2.production %>/js/libraries/all-angular.min.js'
            }
        },

        //
        // Copy files not handled in other tasks
        //
        copy: {
            production: {
                files: [{
                    expand: true,
                    dot: false,
                    dest: '<%=psv2.production %>',
                    src: [
                        '*.php',
                        // 'inc/*', //solved by tweaking functions.php
                        // 'languages/*', //solved by tweaking functions.php
                        'style.css',
                        // 'js/libraries/angular/angular.min.js',
                        'fonts/*',
                        'images/*.png',
                        'images/*.jpg',
                        'images/*.ico'
                    ]
                }]
            }
        },

        //
        //Minify the CSS
        //
        cssmin: {
            minify: {
                // expand: true,
                // src: ['*.css', '!*.min.css'],
                src: '<%=psv2.production %>/style.css',
                dest: '<%=psv2.production %>/style.css'
            }
        },

        //
        //Revision the files
        //
        filerev: {
            dist: {
                src: [
                '<%=psv2.production %>/<%=psv2.jsCustom %>/psv2.js',
                '<%=psv2.production %>/<%=psv2.jsLibraries %>/all-angular.min.js'
                ]
            }
        }

    }); //end initConfig

    //
    //Register tasks here
    //
    grunt.registerTask('build', [
        'clean:production',
        'copy:production',
        'concat:psv2',
        'concat:angular',
        'cssmin',
        'ngmin',
        'filerev'
     ]);


}; //end grunt function