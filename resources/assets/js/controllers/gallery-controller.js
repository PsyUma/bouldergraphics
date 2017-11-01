angular.module('boulder-graphics-app').controller('GalleryController', ['$scope','$timeout',
    function($scope, $timeout) {

        function init() {

        }

        $scope.ngClickScrollGalleryLeft = function() {
            $('.photo-images-gallery-container').animate({ scrollLeft: "-=300px" }, 800)
        };

        $scope.ngClickScrollGalleryRight = function() {
            $('.photo-images-gallery-container').animate({ scrollLeft: "+=300px" }, 800)
        };

        init();
    }
]);