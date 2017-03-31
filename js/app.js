var app = angular.module('myapp', []);

app.controller('formController', function ($scope) {

    $scope.x=10;
    $scope.countrycode="";
    $scope.submitForm = function (isValid) {

        if (isValid) {
            alert('our form is amazing');
        }

    };
    $scope.updateCountry=function(){
        var country = $('#livein :selected');
        var countryName=country.text();
        $scope.countrycode=("+"+country.data("country_code"));
    };

});
