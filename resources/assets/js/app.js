angular.module('boulder-graphics-app', []);

angular.module('boulder-graphics-app').config(['$locationProvider', '$interpolateProvider',
    function($locationProvider, $interpolateProvider) {

        // configure location setttings
        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        });

        // configure change angular '{{' to '<%'
        // does not interfere with laravel blade templating
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }
]);

angular.element(document).ready(function() {
    angular.module('boulder-graphics-app').run(['$rootScope',
        function($rootScope) {
        }
    ]);
    angular.bootstrap(document, ['boulder-graphics-app']);
});