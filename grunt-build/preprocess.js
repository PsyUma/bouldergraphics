module.exports = function(grunt) {
    var files = {
        'resources/views/layouts/scripts.blade.php': 'resources/views-templates/scripts.html',
        'resources/views/layouts/master.blade.php': 'resources/views-templates/master.html'
    };
    grunt.config.set('preprocess', {
        dev: {
            options: {
                context: {
                    NODE_ENV: 'DEV'
                }
            },
            files: files
        },
        qa: {
            options: {
                context: {
                    NODE_ENV: 'QA'
                }
            },
            files: files
        },
        prod: {
            options: {
                context: {
                    NODE_ENV: 'PROD'
                }
            },
            files: files
        }
    });

    grunt.loadNpmTasks('grunt-preprocess');
};