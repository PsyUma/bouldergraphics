module.exports = function(grunt) {
    grunt.config.set('watch', {
        watch: {
            options: {
                livereload: {
                    port: 35730,
                    key: grunt.file.read('/usr/local/etc/nginx/keys/server.key'),
                    cert: grunt.file.read('/usr/local/etc/nginx/keys/server.crt')
                }
            },
            files: ['resources/**/*.{js,html,scss}']
        },
        scripts: {
            files: ['resources/assets/js/**/*.js'],
            tasks: ['preprocess:dev', 'copy:scripts', 'clean:cleanup']
        },
        styles: {
            files: ['resources/assets/css/**/*.scss'],
            tasks: ['concat:styles', 'sass:dev', 'concat:publicCSS', 'clean:cleanup']
        },
        html: {
            files: ['resources/views-templates/*.html'],
            tasks: ['preprocess:dev', 'clean:cleanup']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
};