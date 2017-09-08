module.exports = function(grunt) {
    grunt.config.set('uglify', {
        prod: {
            options: {
                wrap: {}
            },
            files: {
                'public/assets/js/main-min.js': 'resources/assets/js/dist/main.js'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
};