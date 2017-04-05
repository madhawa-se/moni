var app = angular.module('myapp', []);

app.controller('formController', function ($scope, $http) {

    $scope.x = 10;

    $scope.name;
    $scope.countrycode = "";
    $scope.regex = 'm';
    $scope.formsubmitted = false;
    $scope.submitted = false;
    $scope.countryList = {};
    $scope.religionList = {};
    $scope.genders = [{id: "1", name: "male"}, {id: "2", name: "femail"}];
    $scope.submitForm = function ($event, $valid) {
        //alert(isValid);
        if (!$valid) {
            $event.preventDefault();
        }
    };
    $scope.updateCountry = function (country) {
        console.log(country);
        var result = $.grep($scope.countryList, function (e) {
            return e.id == country;
        });
        if (result[0] && result[0].code){
            $scope.countrycode = ("+" + result[0].code);
        }else{
            $scope.countrycode = ("code");
        }

    };

    $scope.getCountryList = function () {
        $http({
            method: "GET",
            url: baseurl + "Db_ajax/get_country_list"
        }).then(function mySucces(response) {
            $scope.countryList = response.data;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.getReligionList = function () {
        $http({
            method: "GET",
            url: baseurl + "Db_ajax/get_religion_list"
        }).then(function mySucces(response) {
            $scope.religionList = response.data;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.getLanList = function () {
        $http({
            method: "GET",
            url: baseurl + "Db_ajax/get_lan_list"
        }).then(function mySucces(response) {
            $scope.lanList = response.data;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.selectData = function () {
        if (typeof jsonData !== 'undefined') {
            $scope.name = jsonData.name;
            $scope.gender = {id: jsonData.gender+""};
            $scope.religion_list = {id: jsonData.religion+""};
            $scope.lan_list = {id: jsonData.lan+""};
            $scope.email = jsonData.email;
            $scope.country_list = {id: jsonData.country+""};
            // $scope.fnumber=jsonData.;

        }
    };

    $scope.getCountryList();
    $scope.getReligionList();
    $scope.getLanList();
    $scope.selectData();

});
