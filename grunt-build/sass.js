module.exports = function(grunt) {
    grunt.config.set('sass', {
        dev: {
            options: {
                'sourcemap': 'none',
                'precision': 10,
                'style': 'expanded'
            },
            files: {
                'resources/assets/css/dist/styles.css': 'resources/assets/css/dist/styles.scss'
            }
        },
        prod: {
            options: {
                'sourcemap': 'none',
                'precision': 10,
                'style': 'compressed'
            },
            files: {
                'resources/assets/css/dist/styles.css': 'resources/assets/css/dist/styles.scss'
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
};