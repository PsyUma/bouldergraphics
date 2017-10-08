module.exports = function(grunt) {
    grunt.config('copy', {
        scripts: {
            files: [
                // {
                //     expand: true,
                //     cwd: 'resources/assets/js/constants',
                //     src: ['**/*.js', '!**/template/**'],
                //     dest: 'public/assets/js/constants/'
                // },
                {
                    expand: true,
                    cwd: 'resources/assets/js/controllers',
                    src: ['**/*.js'],
                    dest: 'public/assets/js/controllers/'
                },
                // {
                //     expand: true,
                //     cwd: 'resources/assets/js/directives',
                //     src: ['**/*.js'],
                //     dest: 'public/assets/js/directives/'
                // },
                // {
                //     expand: true,
                //     cwd: 'resources/assets/js/interceptors',
                //     src: ['**/*.js'],
                //     dest: 'public/assets/js/interceptors/'
                // },
                // {
                //     expand: true,
                //     cwd: 'resources/assets/js/services',
                //     src: ['**/*.js'],
                //     dest: 'public/assets/js/services/'
                // },
                {
                    src: 'resources/assets/js/app.js',
                    dest: 'public/assets/js/app.js'
                }
            ]
        },
        vendor: {
            files: [
                {
                    src: 'resources/assets/js/vendor/jquery/dist/jquery.js',
                    dest: 'public/assets/js/vendor/jquery.js'
                },
                {
                    src: 'resources/assets/js/vendor/bootstrap-sass/assets/javascripts/bootstrap.js',
                    dest: 'public/assets/js/vendor/bootstrap.js'
                },
                {
                    src: 'resources/assets/js/vendor/angular/angular.js',
                    dest: 'public/assets/js/vendor/angular.js'
                }
            ]
        },
        fonts: {
            files: [
                {
                    src: 'resources/assets/css/library/fonts/font-awesome.min.css',
                    dest: 'public/assets/css/font-awesome.min.css'
                },
                {
                    src: 'resources/assets/css/library/fonts/fonts.css',
                    dest: 'public/assets/css/fonts.css'
                },
                {
                    expand: true,
                    cwd: 'resources/assets/css/library/fonts/font-awesome-4.7.0',
                    src: ['**/*'],
                    dest: 'public/assets/fonts/fontawesome'
                }
            ]
        },
        images: {
            files: [
                {
                    expand: true,
                    cwd: 'resources/assets/images',
                    src: '**',
                    dest: 'public/assets/images/'
                }
            ]
        }
    });

    grunt.loadNpmTasks('grunt-contrib-copy');
};