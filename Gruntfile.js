module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json')
    });

    grunt.loadTasks('grunt-build');

    grunt.registerTask('dev-watch', [
        'watch'
    ]);

    grunt.registerTask('development', [
        'clean:build',
        'preprocess:dev',
        'concat:styles',
        'sass:dev',
        'concat:publicCSS',
        'copy:scripts',
        'copy:vendor',
        // 'copy:images',
        'clean:cleanup'
    ]);

    grunt.registerTask('qa', [
        'clean:build',
        'preprocess:qa',
        'concat:styles',
        'sass:prod',
        'concat:publicCSS',
        'concat:scripts',
        // 'copy:images',
        'uglify',
        'cacheBust',
        'clean:cleanup'
    ]);

    grunt.registerTask('production', [
        'clean:build',
        'preprocess:prod',
        'concat:styles',
        'sass:prod',
        'concat:publicCSS',
        'concat:scripts',
        // 'copy:images',
        'uglify',
        'cacheBust',
        'clean:cleanup'
    ]);

    // NOTE: This is for fresh install of node and bower dependencies!!
    grunt.registerTask('hard-clean', ['clean:hard']);

    grunt.registerTask('default', ['development', 'dev-watch']);
    grunt.registerTask('dev', ['development']);
    grunt.registerTask('prod', ['production']);
};