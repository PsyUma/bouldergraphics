module.exports = function(grunt) {
    grunt.config.set('concat', {

        scripts: {
            src: [
                'resources/assets/js/vendor/jquery/dist/jquery.js',
                'resources/assets/js/vendor/bootstrap-sass/assets/javascripts/bootstrap.js',
                'resources/assets/js/vendor/angular/angular.js',
                // 'resources/assets/js/app.js',
                // 'resources/assets/js/constants/config.js',
                // 'resources/assets/js/controllers/*.js',
                // 'resources/assets/js/directives/*.js',
                // 'resources/assets/js/interceptors/*.js',
                // 'resources/assets/js/services/*.js'
            ],
            dest: 'resources/assets/js/dist/main.js'
        },
        styles: {
            src: [
                'resources/assets/css/_app.scss',
                'resources/assets/css/*.scss'
            ],
            dest: 'resources/assets/css/dist/styles.scss'
        },
        publicCSS: {
            src: 'resources/assets/css/dist/styles.css',
            dest: 'public/assets/css/styles.css'
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
};