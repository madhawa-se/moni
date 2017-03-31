var app = angular.module('myapp', []);

app.controller('formController', function ($scope, $http) {

    $scope.x = 10;
    $scope.countrycode = "";
    $scope.regex = 'm';
    $scope.formsubmitted = false;
    $scope.countryList={};
    $scope.religionList={};
    $scope.submitForm = function (isValid) {

        if (isValid) {
            // alert('our form is amazing');
            return true;
        } else {
            $scope.formsubmitted = true;
            //alert(' form is invalid');
            console.log($scope.regform.$error);
        }

    };
    $scope.updateCountry = function () {
        var country = $('#livein :selected');
        var countryName = country.text();
        var countryId=country.val();
        $scope.countrycode = ("+" + $scope.countryList[countryId-1].code);
    };

    $scope.getCountryList = function () {
        $http({
            method: "GET",
            url: "../Db_ajax/get_country_list"
        }).then(function mySucces(response) {
            $scope.countryList = response.data;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.getReligionList = function () {
        $http({
            method: "GET",
            url: "../Db_ajax/get_religion_list"
        }).then(function mySucces(response) {
            $scope.religionList = response.data;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.getCountryList();
    $scope.getReligionList();

});
