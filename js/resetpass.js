var app = angular.module('myapp', []);
app.directive("compareTo", compareTo);
app.controller('formResetController', function ($scope, $http, $filter) {
    $scope.x = 10;

    $scope.submitForm = function ($event, $valid) {
        //alert(isValid);
        if (!$valid) {
            $event.preventDefault();
        }
    };
});

var compareTo = function() {
    return {
        require: "ngModel",
        scope: {
            otherModelValue: "=compareTo"
        },
        link: function(scope, element, attributes, ngModel) {
             
            ngModel.$validators.compareTo = function(modelValue) {
                return modelValue == scope.otherModelValue;
            };
 
            scope.$watch("otherModelValue", function() {
                ngModel.$validate();
            });
        }
    };
};