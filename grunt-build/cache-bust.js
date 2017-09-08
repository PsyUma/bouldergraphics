module.exports = function(grunt) {
    grunt.config.set('cacheBust', {
        assets: {
            options: {
                assets: ['assets/css/*', 'assets/js/*'],
                baseDir: 'public/',
                encoding: 'utf8',
                algorithm: 'md5',
                length: 16,
                deleteOriginals: true,
                separator: '-'
            },
            src: ['resources/views/layouts/*.php', 'public/assets/css/*.css']
        }
    });

    grunt.loadNpmTasks('grunt-cache-bust');
};