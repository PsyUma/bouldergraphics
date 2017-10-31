module.exports = function(grunt) {
    grunt.config('clean', {
        build: [
            'resources/assets/css/dist',
            'resources/assets/js/dist',
            'resources/views/layouts/scripts.blade.php',
            'resources/views/layouts/master.blade.php',
            'public/assets'
        ],
        cleanup: [
            'resources/assets/css/dist',
            'resources/assets/js/dist'
        ],
        hard: [
            'node_modules',
            'resources/assets/js/vendor'
        ]
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
};