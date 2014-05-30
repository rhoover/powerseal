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

        //
        //let's all join together
        //
        concat: {
            psv2: {
                src: [
                    // '<%=psv2.jsCustom %>/app.js',
                    // '<%=psv2.jsCustom %>/services/memberjson.js',
                    // '<%=psv2.jsCustom %>/services/storageservice.js',
                    // '<%=psv2.jsCustom %>/services/googlemap.js',
                    // '<%=psv2.jsCustom %>/filters/memberpagefilter.js',
                    // '<%=psv2.jsCustom %>/controllers/memberlist.js',
                    // '<%=psv2.jsCustom %>/controllers/memberpage.js',
                    // '<%=psv2.jsCustom %>/controllers/allmembermap.js',
                    // '<%=psv2.jsCustom %>/directives/bannerimage.js',
                    // '<%=psv2.jsCustom %>/directives/backbutton.js',
                    // '<%=psv2.jsCustom %>/directives/showsocial.js',
                    // '<%=psv2.jsCustom %>/directives/membermap.js',
                    // '<%=psv2.jsCustom %>/directives/allmembermap.js',
                    // '<%=psv2.jsCustom %>/directives/menumover.js'
                ],
                dest: '<%=psv2.production %>/js/psv2/psv2.min.js'
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
                        // 'style.css',
                        // 'js/libraries/angular/angular.min.js',
                        'fonts/*',
                        'images/*',
                        'data/*'
                    ]
                }]
            }
        },

        //
        //Minify the CSS
        //
        cssmin: {
            minify: {
                expand: true,
                src: ['*.css', '!*.min.css'],
                dest: '<%=psv2.production %>'
            }
        },

        //
        //Revision the files
        //
        rev: {
            assets: {
                files: [{
                    src: [
                    '<%=psv2.production %>/js/psv2/{,*/}*.js',
                    '<%=psv2.production %>/js/libraries/{,*/}*.js'
                    ]
                }]
            }
        }

    }); //end initConfig

    //
    //Register tasks here
    //
    grunt.registerTask('build', [
        'clean:production',
        'concat:psv2',
        'concat:angular',
        'copy:production',
         'cssmin:minify',
         'rev'
     ]);


}; //end grunt function