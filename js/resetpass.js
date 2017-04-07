var app = angular.module('myapp', []);

app.controller('formResetController', function ($scope, $http, $filter) {
    $scope.x = 10;

    $scope.submitForm = function ($event, $valid) {
        //alert(isValid);
        if (!$valid) {
            $event.preventDefault();
        }
    };
});